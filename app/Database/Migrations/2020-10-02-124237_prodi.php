<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Prodi extends Migration
{

	private $table = 'prodi';

	public function up()
	{
		//buat kolom di tabel
		$this->forge->addField([
			'kode_prodi'          => [
					'type'           => 'VARCHAR',
					'constraint'     => '1',
			],
			'nama_prodi'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'ketua_prodi' => [
					'type'           => 'TEXT',
					'constraint'     => '100',
			],
	]);
	$this->forge->addKey('kode_prodi', true);
	$this->forge->createTable($this->table);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//seperti drop table
		$this->forge->dropTable($this->table);
	}
}
