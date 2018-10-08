<?php 
class People{
    public $name;
    private $age;
    protected $type;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        $this->type = "human";

        echo "<p>".$this->name." is born</p>";
    }

    public function speaks(){
        echo "<p>".$this->name." says: Hi, how are ya? Nice weather we're having.</p>";
    }

    public function get_info(){
        echo "<p>".$this->name." is a ".$this->age." year old ".$this->type.".</p>";
    }

    public function __set($age, $value){
        $this->age = $value;
    }

    public function __get($type){
        if($type == 'type'){
            return $this->type;
        }
        else{
            return 'not permitted';
        }
    }
}

class Monster extends People{
    public function __construct($name, $age, $type)
    {
        parent::__construct($name, $age);
        $this->type = $type;
        echo "<p>".$this->name." is born again as a ".$this->type.".</p>";
    }
}
?>