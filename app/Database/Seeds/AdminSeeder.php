<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $password = password_hash('changeme', PASSWORD_DEFAULT);
        $data = [
            'name' => 'Administrator',
            'email' => 'admin@local.test',
            'password_hash' => $password,
            'is_admin' => 1,
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $this->db->table('users')->insert($data);
    }
}
