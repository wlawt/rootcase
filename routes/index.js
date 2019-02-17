const express = require('express');
const router = express.Router();

// Get home page
router.get('/', function(req, res) {
    res.render('index', {
        title: 'Rootcase',
        name: 'Rootcase',
        stripePublishableKey: keys.stripePublishableKey
    });
});

module.exports = router;