<?php

class Person {
    private $wallet;
    private $houseKeys;
    private $transport;
    private $smartphone;
    private $destination; 
        
    public function __construct($wallet, $houseKeys, $transport, $smartphone, $destination) {
        $this->wallet = $wallet;
        $this->houseKeys = $houseKeys;
        $this->transport = $transport;
        $this->smartphone = $smartphone;
        $this->destination = $destination;
    }
    
    public function departureFromHome() {
        echo "- I'm going to leave the house: ";
        echo $this->destination->getDestination() . "\n";
        echo "- I have:\n";
        echo $this->wallet->carry() . "\n";
        echo $this->houseKeys->carry() . "\n";
        echo $this->transport->carry() . "\n";
        echo $this->smartphone->carry() . "\n\n";
    }
}

?>

