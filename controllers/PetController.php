<?php
require_once '../utils.php';

class PetController {

    public function createOne(){
        $body = getBody();

        $name = sanitizeInput($body, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $race_id = sanitizeInput($body, 'race_id', FILTER_VALIDATE_INT);

        $age = sanitizeInput($body, 'age', FILTER_VALIDATE_INT);
        $weight = sanitizeInput($body, 'weight', FILTER_VALIDATE_FLOAT);
        $size = sanitizeInput($body,  'size', FILTER_SANITIZE_SPECIAL_CHARS);

        if(!$name) responseError("Nome do pet é obrigatório", 400);
        if(!$race_id) responseError("ID da raça do pet é obrigatório", 400);
        // validar $size .......

        

    }
}