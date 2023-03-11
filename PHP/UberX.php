<?php
require_once('car.php');
class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent::__construct($license,$driver);
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setPassenger($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 4 pasajeros";
        }
    }

    public function PrintDataCar(){
        parent::PrintDataCar();
        echo "
        <br>
        Model: $this->model 
        Brand: $this->brand
        ";
    }

}