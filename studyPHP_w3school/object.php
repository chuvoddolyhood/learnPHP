<?php
    // class people{
    //     public $name;
    //     public $age;
        
    //     public function people($name, $age){
    //         $this -> name = $name;
    //         $this -> age = $age;
    //     }

    //     public function message(){
    //         return "My name's " . $this->name . ". I'm " . $this->age;
    //     }   
    // }

    // $person = new people("Nghia", 21);
    // echo $person -> message();    


    class laptop{
        private $monitor;
        private $keyboard;
        private $mouse;

        public function laptop($monitor, $keyboard, $mouse){
            $this -> monitor = $monitor;
            $this -> keyboard = $keyboard;
            $this -> mouse = $mouse;
        }

        public function message(){
            return "It's have " . $this->monitor . ", " . $this->keyboard . ", " . $this->mouse;
        }
    }

    $msi = new laptop("aps", "machine", "driver");
    echo $msi->message();

?>