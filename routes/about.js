const express = require('express');
const router = express.Router();

// Get feature page
router.get('/', function(req, res) {
  res.render('about', {
    title: 'Rootcase - About',
    name: 'Rootcase - About',
    active1: 'active'
  });
});

module.exports = router;
