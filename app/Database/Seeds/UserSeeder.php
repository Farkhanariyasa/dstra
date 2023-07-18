<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'akun',
                'password' => password_hash('akun', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Akun Khusus',
                'email' => 'akunkhusus@pkl.stis.local',
                'instansi' => 'BPS',
                'picture' => 'https://ui-avatars.com/api/?name=Akun+Khusus&color=7F9CF5&background=EBF4FF',
                'platform_id' => ''
            ]
        ];
        $this->db->table('pvd_users')->insertBatch($data);
    }
}
