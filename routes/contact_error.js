const express = require('express');
const router = express.Router();

// Get contact error page
router.get('/', function(req, res) {
    res.render('contact_error', {
        title: 'Error sending!',
        name: 'Error sending!'
    });
});

module.exports = router;