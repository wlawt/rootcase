const express = require('express');
const nodemailer = require('nodemailer');
const router = express.Router();
const bodyParser = require('body-parser');
const path = require('path');

// Get contact page
router.get('/', function(req, res) {
    res.render('contact', {
        title: 'Rootcase - Contact Us',
        name: 'Rootcase - Contact'
    });
});

module.exports = router;