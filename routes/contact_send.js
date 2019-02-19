const express = require('express');
const router = express.Router();

// Get contact send page
router.get('/', function(req, res) {
    res.render('contact_send', {
        title: 'Email Sent!',
        name: 'Email Sent!'
    });
});

module.exports = router;