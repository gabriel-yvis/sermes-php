const express = require('express');
const app = express();

const routes = require('./routes');

const mongoose = require('mongoose');
const user = false ? 'sermes_reader' : 'omnistack';
const pass = false ? 'KA6cb4b92tFMAVqE' : 'omnistack';
mongoose.connect('mongodb+srv://'+user+':'+pass+'@sermes-pcdta.gcp.mongodb.net/sermes?retryWrites=true&w=majority', {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

app.use(express.json());
app.use(routes);

app.listen(3000, () => console.log('running'));