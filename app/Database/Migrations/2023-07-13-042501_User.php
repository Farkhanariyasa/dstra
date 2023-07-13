<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'platform_id' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pvd_users');
    }

    public function down()
    {
        $this->forge->dropTable('pvd_users');
    }
}
