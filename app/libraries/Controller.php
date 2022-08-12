<?php

class Controller {
    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }


    public function view($view, $data = []) {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        } else {
            die("View does not exists.");
        }
    }

    public function response($data = [], $errors = [], $statusCode = 200) {
        header("Content-Type: application/json");
        http_response_code($statusCode);
        $response = [
            "data" => $data,
            "errors" => $errors
        ];
        echo json_encode($response);
        exit();
    }

}
