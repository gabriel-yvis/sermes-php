const { Router } = require('express');
const routes = Router();
const MovieController = require('./controllers/MovieController');

routes.get('/movies', MovieController.listAll)
// routes.get('/filmes/:quantidade', MovieController.search)

module.exports = routes;