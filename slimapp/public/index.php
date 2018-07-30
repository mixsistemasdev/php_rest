<?php
header('Content-Type: application/json; charset=utf-8');

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

// init
$app = new \Slim\App;

// Router
$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write(
        json_encode('{ ver: 1.00 }')
    );

    return $response;
});

// ROUTES CRUD

// operadores
$app->group('/operadores', function () {

    // C

    // R
    $this->get('/', function (Request $request, Response $response, array $args) {
        // $operadores = '[{"ope_pk":"1","ope_c_operador":"marcelo","ope_c_senha":"teste","ope_c_email":"marcelo@mix.com.br"}]';


        $data = [
            'ok' => false,
            'errors' => [],
            'data' => null
        ]; // API Response

        /* $data['data'] = [
            [
                "ope_pk" => 1,
                "ope_c_operador" => "marcelo",
                "ope_c_senha" => "teste",
                "ope_c_email" => "marcelo@mix.com.br"
            ]
        ]; */


        $response->getBody()->write(
            json_encode($operadores)
        );
        return $response;
    });

    // U

    // D

    /*
    // C
    $this->get('/abrir/operador/{id}/troco/{troco}', function (Request $request, Response $response, array $args) {
        $id = (int) $args['id'];
        $troco = floatval($args['troco']);
        $response->getBody()->write(
            json_encode(C_cai_abrir($id, $troco))
        );
        return $response;
    });

    // R
    $this->get('/aberto/operador/{id}', function (Request $request, Response $response, array $args) {
        $id = (int) $args['id'];
        $response->getBody()->write(
            json_encode((new TblCaixas())->R_aberto($id))
        );
        return $response;
    });

    $this->get('/info/{id}', function (Request $request, Response $response, array $args) {
        $id = (int) $args['id'];
        $response->getBody()->write(
            json_encode((new TblCaixas())->R_info($id))
        );
        return $response;
    });

    // U
    $this->post('/fechar', function (Request $request, Response $response, array $args) {
        $input = $request->getParsedBody();
        $response->getBody()->write(
            json_encode(U_cai_fechar($input))
        );
        return $response;
    });

    // D
    */
});

$app->run();