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

//ternary
$gender = "PRIA";
$gender = "Wadon";
$hi = $gender == "PRIA" ? "Hi bro!" : "Hi sis";

echo $hi . PHP_EOL;

//tanpa null coalising operator
$data = [
    'bukak' => 'create'
];

if (isset($data['bukak'])) {
    $bukak = $data['bukak'];
} else {
    $bukak = 'nothing';
}
echo $bukak . PHP_EOL;
// nek data ra ono isine output e nothing

//dengan null coalising operator

$dta = ["action" => "nggawe"];
$gas = $dta["action"] ?? "Nothing";

echo $gas . PHP_EOL;
//podo ro nduwur

// goto a;
echo "iki goto, ngge loncat-loncat";
//for loop

for ($awal = 1; $awal <= 10; $awal++) {
    echo "Iki perulangan ke" . $awal . PHP_EOL;
}

for ($awal = 1; $awal <= 10; $awal++) :
    echo "Iki perulangan ke" . $awal . PHP_EOL;
endfor;

$dad = 1;
while ($dad <= 10) {
    echo "boleh ke : " . $dad . PHP_EOL;
    $dad++;
}

$sad = 1;

while ($sad <= 10) {
    echo "Hokya ke : $sad" . PHP_EOL;
    $sad++;
}

$wad = 1;

do {
    echo "mantab ke : " . $wad . PHP_EOL;
    $wad++;
} while ($wad <= 10);

$xad = 100;

do {
    echo "xantab ke : " . $xad . PHP_EOL;
    $xad++;
} while ($xad <= 10);


for ($pap = 0; $pap <= 100; $pap++) {
    if ($pap % 2 == 0) {
        continue;
    }

    echo "Siap : $pap" . PHP_EOL;
}

$enc = [
    "first_name" => "Dibz",
    "middle_name" => "Ibn",
    "last_name" => "Onez"
];

foreach ($enc as $kunci => $nilai) {
    echo "$kunci : $nilai" . PHP_EOL;
}
// a:
// echo "iki goto, ngge loncat kode";

function sayHello($jeneng, $jenengMburi)
{
    echo "Hello $jeneng" . $jenengMburi . PHP_EOL;
}

sayHello("DIBZ", "ONEZ");

//default argument value
function sayHokya($mantab = "Jeneng")
{
    echo "Hello $mantab" . PHP_EOL;
}

sayHokya();
