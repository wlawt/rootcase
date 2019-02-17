const express = require('express');
const router = express.Router();

// Get feature page
router.get('/', function(req, res) {
    res.render('features', {
        title: 'Rootcase - Features',
        name: 'Rootcase - Features'
    });
});

module.exports = router;