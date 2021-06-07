<?php
class TestUnit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }
    private function hitungDenda($denda,$hariterlambat)
    {
        if ($hariterlambat < 5){
            return $denda * $hariterlambat;
        }
        else if (($hariterlambat >= 5) && ($hariterlambat < 10)){
            return $denda * $hariterlambat *1.5;
        }
        else if ($hariterlambat >= 10) {
            return $denda * $hariterlambat *2;
        }
    }
    public function tesDenda()
    {
        $test = $this->hitungDenda(1000,2);
        $expected_result = 2000;
        $test_name = 'Menghitung total denda mahasiswa (testcase 4)';
        echo $this->unit->run($test, $expected_result, $test_name);
    }
}