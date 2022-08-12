<?php

class Airports extends Controller {
    private $airportModel;

    public function __construct() {
        $this->airportModel = $this->model('Airport');
    }

    public function index() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $departure = trim($_POST['departure']);
            $arrival = trim($_POST['arrival']);

            if(empty($errors)) {
                header('location:' . URLROOT . '/flights/index/'.$departure . '/'.$arrival);
            } else
                $this->response([], $errors, 422);

        } else
            $this->view('airports/index');
    }

    public function getAllAirports() {
        $posts = $this->airportModel->getAirports();

        $this->response($posts, [], 200);
    }



}
