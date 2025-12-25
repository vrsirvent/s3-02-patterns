<?php

class Tigger {
    private static $instance = null;   
    private $roarCounter = 0;

    private function __construct() {
        echo "Building character...\n";
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() {
        echo "Grrr!  ";
        $this->roarCounter++;
    }

    public function getCounter() {
        return $this->roarCounter;
    }
}

?>

