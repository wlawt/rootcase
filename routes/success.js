const express = require('express');
const router = express.Router();
const passport = require('passport');
const session = require('express-session');

function ensureAuthenticated (req, res, next) {
    if(req.isAuthenticated()) {
        return next();
    } else {
        res.redirect('/error');
    }
}

// Get success page
router.get('/', ensureAuthenticated, function(req, res) {
    res.render('success', {
        title: 'Purchase Success!',
        name: 'Purchase Success!'
    });
});

module.exports = router;