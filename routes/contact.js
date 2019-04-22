const express = require("express");
const nodemailer = require("nodemailer");
const router = express.Router();
const bodyParser = require("body-parser");
const path = require("path");
const keys = require("../config/keys");

// Get contact page
router.get("/", function(req, res) {
  res.render("contact", {
    title: "Rootcase - Contact Us",
    name: "Rootcase - Contact",
    active2: "active",
    clientCaptcha: keys.clientCaptcha
  });
});

module.exports = router;
