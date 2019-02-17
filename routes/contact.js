const express = require('express');
const router = express.Router();

// Get feature page
router.get('/', function(req, res) {
    res.render('contact', {
        title: 'Rootcase - Contact Us',
        name: 'Rootcase - Contact'
    });
});

module.exports = router;