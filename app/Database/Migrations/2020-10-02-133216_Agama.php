<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Agama extends Migration
{
	private $table = 'agama';
	public function up()
	{
		$this->forge->addField([
			'kode_agama'           => [
				 'type'           => 'INT',
				 'constraint'     => 11,
				 'unsigned'       => TRUE,
				 'auto_increment' => TRUE
			],
			'agama '       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('posts');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->dbforge->drop_table('blog');
	}
}
