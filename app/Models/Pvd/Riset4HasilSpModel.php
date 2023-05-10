<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset4HasilSpModel extends Model
{
    protected $table = 'pvd_riset4_hasil_pencacahan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    # fungsi agregat (count) untuk satu kolom kategorik
    public function getJumlahUUP($kolom, $k){
        return $this->where([$kolom => $k])->countAllResults();
    }

    # fungsi agregat (count) untuk dua kolom kategori
     public function getJumlahUUP2($kolom1, $kolom2, $k1, $k2){
        return $this->where([$kolom1 => $k1, $kolom2 => $k2])->countAllResults();
    }

    // ke bawah adalah kode dummy
    # fungsi agregat (mean) untuk satu kolom kategorik dan satu kolom numerik
    public function getRataan($kolom_kategorik, $kolom_numerik, $nilai){
        $sub_query = 'avg('.$kolom_numerik.') as rataan';
        $result =  $this->where([$kolom_kategorik => $nilai])->select($sub_query)->first();
        return $result['rataan'];
    }
        
    # fungsi agregat (count) untuk dua kolom kategori, semua indikator di blok SDM
    public function getJumlahUUPSDM($kolomKec, $kolomSkala, $kec, $skala){
        return $this->where([$kolomKec => $kec, $kolomSkala => $skala])->countAllResults();
    }

    public function getUnitUsahaTIK($uu){
        return $this->where(["b409a" => $uu])->countAllResults();
    }

    public function getUnitUsahaTIK1($b401a){
        return $this->where(["b401a" => $b401a])->countAllResults();
    }

    public function getUnitUsahaTIK2($b407a){
        return $this->where(["b407a" => $b407a])->countAllResults();
    }

    public function getRataanIKUPTIK($b109){
        $result =  $this->where(["b109" => $b109])->select('avg(b405a) as rataan')->first();
        return $result['rataan'];
    }

    public function getRataanIKUPTIK2($b109){
        $result =  $this->where(["b109" => $b109])->select('avg(b407a) as rataan')->first();
        return $result['rataan'];
    }

    public function getRataanIKUPTIK3($b109){
        $result =  $this->where(["b109" => $b109])->select('avg(b409a) as rataan')->first();
        return $result['rataan'];
    }

    public function getPendapatan(){
        // get all row in column b309
        $pendapatan = $this->select('b309')->findAll();

        // delete row with value 0 
        foreach ($pendapatan as $key => $value) {
            if ($value['b309'] == 70000000 || $value['b309'] == 0) {
                unset($pendapatan[$key]);
            }
        }

        $pendapatan = array_column($pendapatan, 'b309');
        return $pendapatan;
    }

    public function getUmur(){
        // get all row in column b302
        $umur = $this->select("b302")->findAll();
        $umur = array_column($umur, 'b302');
        return $umur;
    }

    public function getPendapatanNoFilter(){
        // get all row in column b309
        $pendapatan = $this->select("b309")->findAll();
        $pendapatan = array_column($pendapatan, "b309");
        return $pendapatan;
    }

}


