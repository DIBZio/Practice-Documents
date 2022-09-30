<?php

use MakhlukHidup as GlobalMakhlukHidup;

abstract class MakhlukHidupp
{
    abstract public function makan(): string;
    abstract public function minum(): string;
}

class Manusia extends MakhlukHidupp
{
    public string $tanggalLahir;
    public string $jenisKelamin;
    public int $umur;
    private string $status;


    public function makan(): string
    {
        return "Manusia juga butuh makan";
    }
    public function minum(): string
    {
        return "Manusia juga butuh minum";
    }

    public function ambilStatus(string $status)
    {
        $this->status = $status;
    }

    protected function getStatus()
    {
        return $this->status;
    }
}

class Pria extends Manusia
{
    public function __construct()
    {
        $this->jenisKelamin = "Laki-laki";
    }

    public function print()
    {
        echo "UMUR: {$this->umur}" . PHP_EOL;
        echo "Pelajar: {$this->getStatus()}" . PHP_EOL;
        echo "JENIS KELAMIN: {$this->jenisKelamin}" . PHP_EOL;
    }
}

$binsar = new Pria();
$binsar->umur = 20;
$binsar->ambilStatus("Pelajar");
$binsar->print();
