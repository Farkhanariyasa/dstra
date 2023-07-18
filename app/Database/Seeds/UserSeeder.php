<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'subjectmatter',
                'password' => password_hash('subjectmatterbps', PASSWORD_DEFAULT),
                'nama_lengkap' => 'Subject Matter',
                'email' => 'pkl@stis.ac.id',
                'instansi' => 'BPS',
                'picture' => 'https://ui-avatars.com/api/?name=Subject+Matter&color=7F9CF5&background=EBF4FF',
                'platform_id' => ''
            ]
        ];
        $this->db->table('pvd_users')->insertBatch($data);
    }
}
