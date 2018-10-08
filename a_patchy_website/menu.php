<?php
class Menu{
    private $title = "Mason Campbell";

    public function __get($title){
        return "<title>".$this->title."</title>";
    }
}
?>