const express = require('express');
const router = express.Router();

// Get terms page
router.get('/', (req, res) => {
    res.render('terms', {
        title: 'Terms and Conditions',
        name: 'Terms and Contitions'
    });
});

module.exports = router;