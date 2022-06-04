<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Staff extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                    => ['type' => 'int', 'constraint' => 12, 'unsigned' => true, 'auto_increment' => true],
            'nombre'                => ['type' => 'varchar', 'constraint' => 50],
            'apellidos'             => ['type' => 'varchar', 'constraint' => 50],
            'funcion'               => ['type' => 'varchar', 'constraint' => 50],
            'descripcionFuncion'    => ['type' => 'varchar', 'constraint' => 250],
            'fechaIngreso'          => ['type' => 'date'],
            'salario'               => ['type' => 'decimal'],
            'activo'                => ['type' => 'boolean', 'default' => false],
            'created_at'            => ['type' => 'datetime', 'null' => false],
            'updated_at'            => ['type' => 'datetime', 'null' => true]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('staffs', true);
    }

    public function down()
    {
        $this->forge->dropTable('staffs', true);
    }
}
