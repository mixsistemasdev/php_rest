<?php
class TblOperadores {

    // C

    // R

    function R_operadores() {

        $data = [
            'ok' => false,
            'errors' => [],
            'data' => null
        ]; // API response
        
        $data['ok'] = true;
        $data['data'] = [
            ['ope_pk' => '1','ope_c_operador' => 'marcelo','ope_c_senha' => 'teste','ope_c_email' => 'marcelo@mix.com.br']
        ];

        return $data;
    }

    // U

    // D

}