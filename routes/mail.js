const express = require('express');
const router = express.Router();

// Get home page
router.get('/', function(req, res) {
    res.render('mail', {
        title: 'Mail Sent!',
        name: 'Mail Sent!'
    });
});

module.exports = router;