<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserDetail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
'school_origin' => [
    'type'       => 'VARCHAR',
    'constraint' => 255,
    'null'       => true,
],
                      'age' => [
                'type' => 'INT',
                'unsigned' => TRUE
            ],
            'address' => [
                'type' => 'TEXT',
                'null' => TRUE
            ],
            'phone_number' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addUniqueKey('user_id');

        $this->forge->createTable('users_detail');
    }

    public function down()
    {
        $this->forge->dropTable('users_detail');
    }
}
