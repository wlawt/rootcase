const express = require('express');
const router = express.Router();
const passport = require('passport');
const session = require('express-session');

/*
function ensureAuthenticated (req, res, next) {
    if(req.isAuthenticated()) {
        return next();
    } else {
        res.redirect('/error');
    }
}
*/
// Get contact error page
router.get('/', function(req, res) {
  res.render('contact_error', {
    title: 'Error sending!',
    name: 'Error sending!'
  });
});

module.exports = router;
