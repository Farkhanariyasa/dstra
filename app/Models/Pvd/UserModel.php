<?php

namespace App\Models\Pvd;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'pvd_users';
    protected $allowedFields = ['username', 'platform_id', 'nama_lengkap', 'picture', 'email', 'password', 'instansi'];

    // untuk ambil data
    public function getData($parameter)
    {
        $builder = $this->table($this->table);
        $builder->where('username=', $parameter);
        $builder->orWhere('email=', $parameter);
        $query = $builder->get();
        return $query->getRowArray();
    }


    // untuk update data
    public function updateData($data)
    {
        $builder = $this->table($this->table);
        if ($builder->save($data)) {
            return true;
        } else {
            return false;
        }
    }

    public function findUserByUserName($username)
    {
        $user = $this
            ->asArray()
            ->where(['username' => $username])
            ->first();
        return $user;
    }

    public function getUser($id)
    {
        return $this->db->table('users')->getWhere(['id' => $id])->getRowArray();
    }
}
