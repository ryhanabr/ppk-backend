<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'userId' => [
                'type' => 'INT',
                'auto_increment' => true
            ]
        ]);
        $this->forge->addField([
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addField([
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 25
            ]
        ]);
        $this->forge->addField([
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addField([
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addField([
            'telp' => [
                'type' => 'VARCHAR',
                'constraint' => 15
            ]
        ]);
        $this->forge->addField([
            'pass' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ]
        ]);
        $this->forge->addField([
            'admin' => [
                'type' => 'BOOLEAN'
            ]
        ]);
        $this->forge->addKey('userId',true);
        $this->forge->createTable('auth');
    }

    public function down()
    {
        //
    }
}
