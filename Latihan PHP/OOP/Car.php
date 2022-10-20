<?php

//Pilar 1 = Encapsulation
class Car {
    //Inisialisasi Awal Property
    public string $name;
    public int $speed;

    //__Construct = Memulai dari awal, jka __deconstruct maka dari akhir
    public function __construct(string $name)
    {
        //menambahkan property ke class
        $this->name=$name;
        $this->speed = 0;
    }

    //Method
    public function startEngine()
    {
        echo "$this->name telah dinyalakan\n";
    }

    public function go(int $speed = 2)
    {
        $this->speed += $speed;
        echo "Kecepatan Mobil saat ini adalah $this->speed km/jam\n";
    }

    public function stop()
    {
        echo "Mobil telah berhenti\n";
    }

    public function getName()
    {
        return $this->name;
    }
}

//Data yang dibuat dari class
$lamborgini = new Car("Lamborgini");
$lamborgini->startEngine();
$lamborgini->go();
$lamborgini->go(10);
$lamborgini->go();
$lamborgini->stop();

