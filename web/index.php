<?php

require('../vendor/autoload.php');

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});

$app->get('/galerie', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('galerie.twig');
});

$app->get('/nousJoindre', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('nousJoindre.twig');
});
$app->get('/menu', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('menu.twig');
});
$app->get('/commentaire', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('commentaire.twig');
});
$app->run();
