<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Periodista extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => ['type' => 'INT',        'constraint' => 12, 
                'unsigned' => true, 'auto_increment' => true],
            'foto'      => ['type' => 'VARCHAR',    'constraint' => 255, 'nullable' => true],
            'nombre'    => ['type' => 'VARCHAR',    'constraint' => 50],
            'slug'      => ['type' => 'VARCHAR',    'constraint' => 70,  'nullable' => true],
            'apellidos' => ['type' => 'VARCHAR',    'constraint' => 50],
            'area'      => ['type' => 'VARCHAR',    'constraint' => 50],
            'bio'       => ['type' => 'TEXT',       'constraint' => 2000],
            'email'     => ['type' => 'VARCHAR',    'constraint' => 100],
            'telefono'  => ['type' => 'VARCHAR',    'constraint' => 15]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('periodistas', true);
    }

    public function down()
    {
        $this->forge->dropTable('periodistas', true);
    }
}