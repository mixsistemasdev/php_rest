<?php
header('Content-Type: application/json; charset=utf-8');

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

require 'vendor/autoload.php';

// classes
require_once __DIR__ . '/inc/classes/db/Operadores.php';

// init
$app = new \Slim\App();

// ROUTES NON TABLE RELATED
$app->group('/', function () {
    $this->get('', function (Request $request, Response $response, array $args) {
        $response->getBody()->write('{"ver": "1.0", "server": "local"}');
        return $response;
    });
});

// ROUTES CRUD

// operadores
$app->group('/operadores', function () {
    // C
    /*
    $this->post('/criar', function (Request $request, Response $response, array $args) {
    $input = $request->getParsedBody();
    $response->getBody()->write(
    json_encode(C_ope($input))
    );
    return $response;
    });
     */

    // R

    $this->get('/', function (Request $request, Response $response, array $args) {
        $response->getBody()->write(
            json_encode((new TblOperadores())->R_operadores())
        );
        return $response;
    });
    /*
    $this->get('/existe-admin', function (Request $request, Response $response, array $args) {
    $response->getBody()->write(
    json_encode((new TblOperadores())->R_existe_admin())
    );
    return $response;
    });

    $this->post('/login', function (Request $request, Response $response, array $args) {
    $input = $request->getParsedBody();
    $response->getBody()->write(
    json_encode((new TblOperadores())->R_login($input))
    );
    return $response;
    });

    $this->get('/cod/{cod}', function (Request $request, Response $response, array $args) {
    $cod = (int) $args['cod'];
    $response->getBody()->write(
    json_encode((new TblOperadores())->R_operador_cod($cod))
    );
    return $response;
    });

    $this->get('/id/{id}', function (Request $request, Response $response, array $args) {
    $id = (int) $args['id'];
    $response->getBody()->write(
    json_encode((new TblOperadores())->R_operador($id))
    );
    return $response;
    });

    $this->post('/pag/{all}', function (Request $request, Response $response, array $args) {
    $all = ((int) $args['all']) > 0;
    $input = $request->getParsedBody();
    $response->getBody()->write(
    json_encode(R_ope_pag($input, $all))
    );
    return $response;
    });

    $this->get('/prox-cod', function (Request $request, Response $response, array $args) {
    $response->getBody()->write(
    json_encode((new TblOperadores())->R_prox_cod())
    );
    return $response;
    });
     */

    // U
    /*
$this->post('/gravar', function (Request $request, Response $response, array $args) {
$input = $request->getParsedBody();
$response->getBody()->write(
json_encode(U_ope($input))
);
return $response;
});
 */
});

// Run app
$app->run();
