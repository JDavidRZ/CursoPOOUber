<?php
class Car{
    public $id;
    public $license;
    public $driver;
    protected $passenger;

    public function __construct($license, $driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        echo "
        <br>
        License: $this->license 
        Driver:{$this->driver->name} 
        Numero de pasajeros: {$this->passenger}
        ";
    }

    public function getPassenger(){
        return $this->passenger;
    }

    public function setPassenger($passenger){
        if ($passenger == 4) {
            $this->passenger = $passenger;
        }else{
            echo "<br>Necesitas asignar 4 pasajeros";
        }
    }
}