<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'name_user' => 'Administrator',
			'email_user' => 'fadzry1603@gmail.com',
			'nomor_user' => '082258847225',
			'password_user' => password_hash('12345', PASSWORD_BCRYPT),
		];
		$this->db->table('users')->insert($data);
	}
}
