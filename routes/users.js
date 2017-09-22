var express = require('express');
var router = express.Router();
var passport = require('passport');
var LocalStrategy = require('passport-local').Strategy;
var passport = require('passport');
var User = require('../models/user');

// Register
router.get('/register', function(req, res){
	res.render('register');
});

// Login
router.get('/login', function(req, res){
	res.render('login');
});

/////////////////////////////Facebook Route///////////////////////////////////
router.get('/auth/facebook', passport.authenticate('facebook'));
router.get('/auth/facebook/callback',
passport.authenticate('facebook', { successRedirect: '/',
failureRedirect: '/login' }));

//////////////////////////////Google Route////////////////////////////////////
router.get('/auth/google', passport.authenticate('google', {scope: ['profile', 'email']}));
router.get('/auth/google/callback',
passport.authenticate('google', { successRedirect: '/',
failureRedirect: '/login' }));

/////////////////////////////Registration Page//////////////////////////////////
// Register User
router.post('/register', function(req, res){
	var name = req.body.name;
	var email = req.body.email;
	var password = req.body.password;
	var password2 = req.body.password2;

	// Validation - Checks if user filled out the form correctly
	req.checkBody('name', 'Name is required').notEmpty();
	req.checkBody('email', 'Email is required').notEmpty();
	req.checkBody('password', 'Password is required').notEmpty();
	req.checkBody('password2', 'Passwords do not match').equals(req.body.password);

	var errors = req.validationErrors();

	if(errors){
		res.render('login', {
			// shows the errors
			errors:errors
		});
	} else {
		// account created successful! creating new user data structure
		var newUser = new User({
			// General Information
			username: email,
			password: password,
			email: email,
			name: name
		});

		User.createUser(newUser, function(err, user){
			if(err) throw err;
			console.log(user);
		});

		req.flash('success_msg', 'You are registered and can now login');

		res.redirect('/users/login');
	}
});
/////////////////////////////Serialization ///////////////////////////////////

passport.serializeUser(function(user, done) {
	done(null, user.id);
});

passport.deserializeUser(function(id, done) {
	User.getUserById(id, function(err, user) {
		done(err, user);
	});
});

////////////////////////////Login Strategies//////////////////////////////////
// Local Login - Users created their own account from our website
passport.use(new LocalStrategy(
	function(username, password, done) {
		// Checks if user info is correct
		User.getUserByUsername(username, function(err, user){
			// Checks username
			if(err) throw err;
			if(!user){
				// Wasn't found. display error message
				return done(null, false, {message: 'Incorrect Username or Password'});
			}
			//Check password for correct username
			User.comparePassword(password, user.password, function(err, isMatch){
				if(err) throw err;
				if(isMatch){
					// Success! get the user
					const util = require('util');
					console.log(util.inspect(user, false, null));
					return done(null, user);
				} else {
					// Failed! display error message
					return done(null, false, {message: 'Incorrect Username or Password'});
				}
			});
		});
	}));

/////////////////////////////Login Route////////////////////////////////////////
router.post('/login',
passport.authenticate('local', {successRedirect:'/', failureRedirect:'/users/login',failureFlash: true}),
function(req, res) {
	console.log(util.inspect(res));
	res.redirect('/');
});

////////////////////////////Log out Route////////////////////////////////
router.get('/logout', function(req, res){
	req.logout();

	req.flash('success_msg', 'You are logged out');

	res.redirect('/users/login');
});

module.exports = router;

//------------------------------ Test Code -------------------------------------
// const util = require('util')

// alternative shortcut
// console.log(util.inspect(newUser, false, null));
// console.log(util.inspect(User.User, false, null));

// var newUser = new User(); // Create a new User
// newUser.name = "Joseph K Phan"
// User.createUser(newUser, function(err, user){
//     if(err) throw err;
//     console.log(user);
// });
//
// User.addToDoListItem(newUser, "Demo", function(err, user) {
// 	if (err) console.log("error :(");
// 	console.log(user);
// });
