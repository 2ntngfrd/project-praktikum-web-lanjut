<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\I18n\Time;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'user_id'				=> [
				'type'				=> 'INT',
				'constraint'		=> 10,
				'unsigned'			=> true,
				'auto_increment'	=> true
			],
			'username'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'password'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'fullname'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'email'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 100
			],
			'role'			=> [
				'type'				=> 'INT',
				'constraint'		=> 2,
			],
			'created_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
			'updated_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
			'deleted_at'			=> [
				'type'				=> 'TIMESTAMP',
				'null'				=> true
			],
		]);
		$this->forge->addKey('user_id', true);
		$this->forge->createTable('user');

		// Insert Super Admin Data
		$data = [
			'username' => 'admin',
			'password' => password_hash('admin', PASSWORD_DEFAULT),
			'fullname' => 'Super Admin',
			'email' => 'gasskeun@gmail.com',
			'role' => '0',
			'created_at' => new Time('now'),
			'updated_at' => new Time('now')
		];
		$this->db->table('user')->insert($data);

		// Insert User Data
		$data = [
			'username' => 'user',
			'password' => password_hash('user', PASSWORD_DEFAULT),
			'fullname' => 'Regular User',
			'email' => 'user@gmail.com',
			'role' => '1',
			'created_at' => new Time('now'),
			'updated_at' => new Time('now')
		];
		$this->db->table('user')->insert($data);
	}

	public function down()
	{
		$this->forge->dropTable('user');
	}
}
