const express = require('express');
const router  = express.Router();

// Get policy page
router.get('/', (req, res) => {
    res.render('policy', {
        title: 'Policy and Returns',
        name: 'Policy and Returns'
    });
});

module.exports = router;