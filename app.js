const express = require('express');
//const keys = require('./config/keys');
//const stripe = require('stripe')(keys.stripeSecretKey);
const bodyParser = require('body-parser');
const path = require('path');

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

const port = process.env.PORT || 5000;

app.listen(port, () => {
    console.log(`server started on port ${port}`);
});



