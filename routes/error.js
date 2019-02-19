const express = require('express');
const router = express.Router();

// Get error page
router.get('/', (req, res) => {
    res.render('error', {
        title: '404 Error',
        name: '404 Page Not Found' 
    });
});

module.exports = router;