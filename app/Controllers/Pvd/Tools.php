<?php

namespace App\Controllers\Pvd;

use App\Controllers\BaseController;
use App\Models\Pvd\UnduhHasilPklModel;


class Tools extends BaseController
{
  public function unduh($riset)
  {
    $datapengunduh = new UnduhHasilPklModel();
    $data = [
      'email' => $this->request->getVar('email'),
      'nama' => $this->request->getVar('nama'),
      'instansi' => $this->request->getVar('instansi')
    ];
    $datapengunduh->insert($data);
    return redirect()->to('hasil-pkl/' . $riset . '/dasbor');
  }
}
