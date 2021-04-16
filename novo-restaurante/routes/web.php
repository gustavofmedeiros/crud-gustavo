<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It is a breeze. Simply tell Lumen the URIs it should respond to
 * | and give it the Closure to call when that URI is requested.
 * |
 */
$router->get("/cozinhas", "CozinhaController@listarTodas");


$router->get("/cozinhas/{id}", "CozinhaController@buscarIndividual");
$router->post("/cozinhas", "CozinhaController@gravar");
$router->put("/cozinhas/{id}", "CozinhaController@atualizar");
$router->delete("/cozinhas/{id}", "CozinhaController@apagar");
