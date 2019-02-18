const express = require('express');
const router = express.Router();

// Get success page
router.get('/', function(req, res) {
    res.render('success', {
        title: 'Purchase Success!',
        name: 'Purchase Success!'
    });
});

module.exports = router;