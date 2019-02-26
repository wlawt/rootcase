const express = require('express');
const router = express.Router();
const passport = require('passport');
const session = require('express-session');

// Get contact send page
router.get('/', function(req, res) {
    res.render('contact_send', {
        title: 'Email Sent!',
        name: 'Email Sent!'
    });
});

module.exports = router;