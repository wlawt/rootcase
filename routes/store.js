const express = require('express');
const path = require('path');
const keys = require('../config/keys');
const stripe = require('stripe')(keys.stripeSecretKey);
const router = express.Router();

// Get store page
router.get('/', function(req, res) {
  res.render('store', {
    title: 'Rootcase - Store',
    name: 'Rootcase - Store',
    stripePublishableKey: keys.stripePublishableKey,
    active3: 'active'
  });
});

module.exports = router;
