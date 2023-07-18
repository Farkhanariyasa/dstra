<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class Riset4HasilPklModel extends Model
{
    protected $table = 'pvd_riset4_hasilpkl';
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

    # fungsi agregat (count) untuk satu kolom kategorik dengan tiga nilai
    public function getJumlahUUP3($kolom, $k){
        return 925-$this->where([$kolom => $k])->countAllResults();
    }

    # fungsi agregat (count) untuk dua kolom kategori, dua nilai
    public function getJumlahUUPDua($kolom1, $kolom2, $k1, $k21, $k22){
        $result1 = $this->where([$kolom1 => $k1, $kolom2 => $k21])->countAllResults();
        $result2 = $this->where([$kolom1 => $k1, $kolom2 => $k22])->countAllResults();
        return $result1 + $result2;
    }

    # fungsi agregat (count) untuk dua kolom kategori, tiga nilai
    public function getJumlahUUPTiga($kolom1, $kolom2, $k1, $k21, $k22,$k23){
        $result1 = $this->where([$kolom1 => $k1, $kolom2 => $k21])->countAllResults();
        $result2 = $this->where([$kolom1 => $k1, $kolom2 => $k22])->countAllResults();
        $result3 = $this->where([$kolom1 => $k1, $kolom2 => $k23])->countAllResults();
        return $result1 + $result2 + $result3;
    }

    # fungsi summary (min) untuk satu kolom kategorik dan satu kolom numerik
    public function getMin($kolom_kategorik, $kolom_numerik, $k1){
        $sub_query = 'min('.$kolom_numerik.') as minimum';
        $result =  $this->where([$kolom_kategorik => $k1])->select($sub_query)->first();
        return $result['minimum'];
    }

    # fungsi summary (max) untuk satu kolom kategorik dan satu kolom numerik
    public function getMax($kolom_kategorik, $kolom_numerik, $k1){
        $sub_query = 'max('.$kolom_numerik.') as maximum';
        $result =  $this->where([$kolom_kategorik => $k1])->select($sub_query)->first();
        return $result['maximum'];
    }

    # fungsi agregat (mean) untuk satu kolom kategorik dan satu kolom numerik
    public function getRataan($kolom_kategorik, $kolom_numerik, $k1){
        $sub_query = 'avg('.$kolom_numerik.') as rataan';
        $result =  $this->where([$kolom_kategorik => $k1])->select($sub_query)->first();
        return $result['rataan'];
    }

    # fungsi agregat (mean) untuk dua kolom kategorik dan satu kolom numerik
    public function getRataan2($kolom_kategorik1, $kolom_kategorik2, $kolom_numerik, $k1, $k2){
        $sub_query = 'avg('.$kolom_numerik.') as rataan';
        $result =  $this->where([$kolom_kategorik1 => $k1, $kolom_kategorik2 => $k2])->select($sub_query)->first();
        return $result['rataan'];
    }

    # fungsi agregat (geometric mean) untuk satu kolom numerik
    public function getRataanGeo($kolom_numerik){
        $sub_query = 'exp(avg(ln('.$kolom_numerik.'))) as rataan';
        $result =  $this->select($sub_query)->first();
        return round($result['rataan'], 2);
    }

    # fungsi agregat (geometric) untuk satu kolom kategorik dan satu kolom numerik
    public function getRataanGeo2($kolom_kategorik, $kolom_numerik, $k1){
        $sub_query = 'exp(avg(ln('.$kolom_numerik.'))) as rataan';
        $result =  $this->where([$kolom_kategorik => $k1])->select($sub_query)->first();
        return round($result['rataan'], 2);
    }

    # fungsi agregat (geometric) untuk satu kolom kategorik dan satu kolom numerik
    public function getRataanGeo3($kolom_kategorik1, $kolom_kategorik2, $kolom_numerik, $k1, $k2){
        $sub_query = 'exp(avg(ln('.$kolom_numerik.'))) as rataan';
        $result =  $this->where([$kolom_kategorik1 => $k1, $kolom_kategorik2 => $k2])->select($sub_query)->first();
        return round($result['rataan'], 2);
    }

    # fungsi filter data dan me-retrieve-nya
    public function getIKUPTIK($kolom_kategorik, $k1){
        $result = $this->where([$kolom_kategorik => $k1])->select("geometrik_mean")->findAll();
        $result = array_column($result, "geometrik_mean");
        return $result;
    }

    # fungsi no filter data dan me-retrieve-nya untuk ikuptik
    public function getIKUPTIK2(){
        $result = $this->select("geometrik_mean")->findAll();
        $result = array_column($result, "geometrik_mean");
        return $result;
    }

    # fungsi no filter data dan me-retrieve-nya untuk umur
    public function getUmur2(){
        $result = $this->select("usia_pemilik_pengelola")->findAll();
        $result = array_column($result, "usia_pemilik_pengelola");
        return $result;
    }
}


