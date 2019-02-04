<?php

use App\Facades\Str;
use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', function (Request $request, Response $response, array $args) {

    var_dump(Str::toUpper('hi'));

});
