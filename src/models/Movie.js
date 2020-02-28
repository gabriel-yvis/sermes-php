const mongoose = require('mongoose');

const MovieSchema = new mongoose.Schema({
    titulo: String,
    Ano: Number,
    duracao: Number
});

module.exports = mongoose.model('Movie', MovieSchema);