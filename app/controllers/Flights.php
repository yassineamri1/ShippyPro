<?php

class Flights extends Controller {
    private $flightModel;

    public function __construct() {
        $this->flightModel = $this->model('Flight');
    }


    public function index($departure, $arrival) {

        $this->view('flights/index');
    }

    public function getFlight($departure, $arrival) {
        $posts = $this->flightModel->getFlights();
        $g = new Graph();

        for($i = 0; $i < count($posts); $i++){
            $g->addedge($posts[$i]->code_departure, $posts[$i]->code_arrival, $posts[$i]->price);
        }

        $codeDeparture = $this->flightModel->getCodeByName($departure);
        $codeDeparture = $codeDeparture[0]->code;

        $codeArrival = $this->flightModel->getCodeByName($arrival);
        $codeArrival = $codeArrival[0]->code;

        list($distances, $prev) = $g->paths_from($codeDeparture);

        $path = $g->paths_to($prev, $codeArrival);

        $data = [
            'posts' => $path,
        ];

        $this->response($data, [], 200);
    }
}
