const express = require('express');
const router = express.Router();
const passport = require('passport');
const session = require('express-session');

function ensureAuthenticated (req, res, next) {
    if(req.isAuthenticated()) {
        return next();
    } else {
        res.redirect('/error');
    }
}

// Get contact send page
router.get('/', ensureAuthenticated, function(req, res) {
    res.render('contact_send', {
        title: 'Email Sent!',
        name: 'Email Sent!'
    });

});

module.exports = router;