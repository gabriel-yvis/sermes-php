const Movie = require('../models/Movie');

module.exports = {
    async listAll(req, res){
        console.log('chegou');
        const movies = await Movie.find();
        console.log('partiu');
        return res.json(movies);
    }
}