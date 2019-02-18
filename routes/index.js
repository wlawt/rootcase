const express = require('express');
const path = require('path');
const keys = require('../config/keys');
const stripe = require('stripe')(keys.stripeSecretKey);
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