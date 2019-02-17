const express = require('express');
const path = require('path');
const router = express.Router();

// Get home page
router.get('/', function(req, res) {
    res.render('index', {
        title: 'Rootcase',
        name: 'Rootcase',
    });
});

module.exports = router;