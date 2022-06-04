<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint'  => 12, 'unsigned' => true, 'auto_increment' => true],
            'periodista'    => ['type' => 'int', 'unsigned' => true, 'constraint' => 12, 'auto_increment' => false],
            'title'         => ['type' => 'VARCHAR', 'constraint' => 255],
            'slug'          => ['type' => 'VARCHAR', 'constraint' => 255],
            'body'          => ['type' => 'TEXT'],
            'categoria'     => ['type' => 'int', 'unsigned' => true, 'constraint' => 12, 'auto_increment' => false],
            'staff'         => ['type' => 'int', 'unsigned' => true, 'constraint' => 12, 'auto_increment' => false]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('periodista', 'periodistas', 'id');
        $this->forge->addForeignKey('categoria', 'categorias', 'id');
        $this->forge->addForeignKey('staff', 'staffs', 'id');

        $this->forge->createTable('news', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('news', true);
    }
}