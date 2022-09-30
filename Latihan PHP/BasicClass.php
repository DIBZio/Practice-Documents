<?php

class BasicClass {
    public string $name = "Binsar Dwi Jasuma";
    public function printMyname (){
        echo "Nama Saya adalah $this->name";
    }
}

$class = new BasicClass("Class");