const express = require('express');
//const keys = require('./config/keys');
//const stripe = require('stripe')(keys.stripeSecretKey);
const bodyParser = require('body-parser');
const path = require('path');
const nodemailer = require('nodemailer');

// Creating routing var
const routes = require('./routes/index');
const features = require('./routes/features');
const store = require('./routes/store');
const contact = require('./routes/contact');

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

// Creating routing path
app.use('/', routes);
app.use('/features', features);
app.use('/store', store);
app.use('/contact', contact);

app.post('/send', (req, res) => {
    const output = `
    <p>You have a new message:</p>
    <h3>Information details</h3>
    <ul>
        <li>Name ${req.body.name}</li>
        <li>Name ${req.body.subject}</li>
        <li>Name ${req.body.email}</li>
    </ul>
    <h3>Message</h3>
    <p>${req.body.message}</p>
    `
    // async..await is not allowed in global scope, must use a wrapper
    async function main(){

        // Generate test SMTP service account from ethereal.email
        // Only needed if you don't have a real mail account for testing
        let account = await nodemailer.createTestAccount();
    
        // create reusable transporter object using the default SMTP transport
        let transporter = nodemailer.createTransport({
        host: "smtp.gmail.com",
        port: 587,
        secure: false, // true for 465, false for other ports
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
        from: '"RootCase Support" <jaCIBC2018@gmail.com>', // sender address
        to: "${req.body.email}", // list of receivers
        subject: "${req.body.subject}", // Subject line
        text: "Hello world?", // plain text body
        html: output // html body
        };
    
        // send mail with defined transport object
        let info = await transporter.sendMail(mailOptions)
    
        console.log("Message sent: %s", info.messageId);
        // Preview only available when sending through an Ethereal account
        console.log("Preview URL: %s", nodemailer.getTestMessageUrl(info));
    
        // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
        // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...

        res.render('contact', {
            msg: 'Email has been sent'
        });
    }
    
    main().catch(console.error);
});


const port = process.env.PORT || 5000;

app.listen(port, () => {
    console.log(`server started on port ${port}`);
});



