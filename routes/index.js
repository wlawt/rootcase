const express = require('express');
const router = express.Router();

// Get home page
router.get('/', function(req, res) {
  res.render('index', {
    title: 'Rootcase',
    name: 'Rootcase',
    active: 'active'
  });
});

module.exports = router;
