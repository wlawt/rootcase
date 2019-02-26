const express = require('express');
const keys = require('./config/keys');
const stripe = require('stripe')(keys.stripeSecretKey);
const bodyParser = require('body-parser');
const path = require('path');
const nodemailer = require('nodemailer');
const request = require('request');
const passport = require('passport');
const session = require('express-session');

// Creating routing var for routes file
const routes = require('./routes/index');
const features = require('./routes/features');
const store = require('./routes/store');
const contact = require('./routes/contact');
const contact_send = require('./routes/contact_send');
const contact_error = require('./routes/contact_error');
const success = require('./routes/success');
const terms = require('./routes/terms');
const policy = require('./routes/policy');
const error = require('./routes/error');

// Global var
var views = false;

// Passport config
//require('./config/passport')(passport);

// Initalize app
const app = express();

// View engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');


// Body Parser Middleware
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

// Set static folder 
app.use(express.static(`${__dirname}/public`));

// Express session middelware
app.use(session({
    secret: 'secret',
    resave: true,
    saveUninitialized: true
}));

// Creating routing path for ejs files
app.use('/', routes);
app.use('/features', features);
app.use('/store', store);
app.use('/contact', contact);
app.use('/success', success);
app.use('/contact_send', contact_send);
app.use('/contact_error', contact_error);
app.use('/terms', terms);
app.use('/policy', policy);
app.use('/error', error);

// Charge route
app.post('/charge', (req, res) => {
    const amount = 1999;
    
    stripe.customers.create({
        email: req.body.stripeEmail,
        source: req.body.stripeToken
    }).then(customer => stripe.charges.create({
        amount, 
        description: 'iPhone 7/8 BioCase',
        currency: 'cad',
        customer: customer.id 
    })).then(charge => res.render('success'));
});

app.get('/contact_send', (req, res) => {
    if(views) {
        console.log("true");
        res.redirect('/contact_send');
    } else {
        console.log("false");
        res.redirect('/error');
    }
});

// Error handling for charge route
app.get('/charge', (req, res) => {
    res.redirect('/error');
});

// Error handling for send route
app.get('/send', (req, res) => {
    res.redirect('/error');
});

// Contact route
app.post('/send', (req, res, next) => {
    const output = `
    <p>You have a new message:</p>
    <h3>Information details</h3>
    <ul>
        <li>Name ${req.body.name}</li>
        <li>Subject ${req.body.subject}</li>
        <li>Email ${req.body.email}</li>
    </ul>
    <h3>Message</h3>
    <p>${req.body.message}</p>
    `
    var captchaSolved = false;
    var view = false;

    if (req.body['g-recaptcha-response'] === undefined || req.body['g-recaptcha-response'] === '' || req.body['g-recaptcha-response'] === null) {
        //return res.json({"responseCode" : 1, "responseDesc" : "Please select captcha"});
        return res.redirect('/contact_error'), view = true;
    }

    var secretKey = "6LdL2ZEUAAAAAEfYGq2ElB9Ex5HWgjehdtHUyt6L";
    var verificationUrl = "https://www.google.com/recaptcha/api/siteverify?secret=" + secretKey + "&response=" + req.body['g-recaptcha-response'] + "&remoteip=" + req.connection.remoteAddress;
    

    request(verificationUrl, (error, response, body) => {
        body = JSON.parse(body);
        if(body.success !== undefined && !body.success) {
            return captchaSolved = false, view = true;
            //return res.json({"responseCode" : 1, "responseDesc" : "Failed captcha verification"});
        }
        view = true;
        captchaSolved = true;
        //res.json({"responseCode" : 0, "responseDesc" : "Success"});
    });

    // Error in captcha
    app.use("*", (req, res) => {
        res.status(404).send("404");
    });

    // async..await is not allowed in global scope, must use a wrapper
    async function main(){
        // Generate test SMTP service account from ethereal.email
        // Only needed if you don't have a real mail account for testing
        let account = await nodemailer.createTestAccount();
    
        // create reusable transporter object using the default SMTP transport
        let transporter = nodemailer.createTransport({
            host: "smtp.gmail.com",
            //service: 'gmail',
            //port: 587,
            port: 465,
            secure: true, // true for 465, false for other ports
            auth: {
                user: 'jaCIBC2018@gmail.com', // generated ethereal user
                pass: 'juniorachievement2018' // generated ethereal password
            }, 
            tls: {
                rejectUnauthorized: false
            }
        });
    
        // setup email data with unicode symbols
        let mailOptions = {
            from: '${req.body.name}', // sender address
            to: 'jaCIBC2018@gmail.com', // list of receivers
            subject: "New message from contact form", // Subject line
            html: output // html body
        };
        
        // send mail with defined transport object
        let info = await transporter.sendMail(mailOptions, (err, info) => {
            if (err) {
                if(!captchaSolved && view) {
                    console.log(err);
                    next();
                } else {
                    res.redirect('/error');
                }
            } else {
                if(captchaSolved && view) {
                    console.log(info);
                    views = true;
                    res.redirect('/contact_send', 307);
                } else {
                    res.redirect('/error');
                }
            }
        });
    }
    views = false;
        
    main().catch(console.error);
});

const port = process.env.PORT || 5000;

app.listen(port, () => {
    console.log(`server started on port ${port}`);
});
