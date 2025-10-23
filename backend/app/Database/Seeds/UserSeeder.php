<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@cafe.com',
                'password' => password_hash('secret', PASSWORD_DEFAULT),
            ],
            [
                'username' => 'barista',
                'email'    => 'barista@cafe.com',
                'password' => password_hash('coffee', PASSWORD_DEFAULT),
            ],
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
