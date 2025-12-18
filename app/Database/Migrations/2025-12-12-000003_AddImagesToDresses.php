<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImagesToDresses extends Migration
{
    public function up()
    {
        $fields = [
            'images' => [
                'type' => 'TEXT',
                'null' => true,
                'after' => 'image',
            ],
        ];

        $this->forge->addColumn('dresses', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('dresses', 'images');
    }
}
