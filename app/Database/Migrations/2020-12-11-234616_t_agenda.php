<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TContacto extends Migration
{

	public function up()
        {
			$this->db->disableForeignKeyChecks();
                $this->forge->addField([
                        'id_contactos'          => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => true,
                                'auto_increment' => true,
																					],


															'id_categorias'   => [
																'type'           => 'INT',
																'constraint'     => 5,
																'unsigned'       => true,

																								],

															'nombre'       => [
																'type'           => 'VARCHAR',
																'constraint'     => '250',
																								],

				                        'Apaterno'       => [
				                                'type'           => 'VARCHAR',
				                                'constraint'     => '250',
																										],

																		'Amaterno'       => [
																			'type'           => 'VARCHAR',
																			'constraint'     => '250',
																										],

																		'tel'       => [
																			'type'           => 'VARCHAR',
																			'constraint'     => '250',
																										],

												              'email' => [
																			'type'           => 'VARCHAR',
																			'constraint'     => '250',
																									],


																			'fecha'       => [
																			'type'           => 'VARCHAR',
																			'constraint'     => '250',
																												],
												                ]);


				$this->forge->addKey('id_contacto', true);
				$this->forge->addForeingKey('id_categoria','t_agenda','id_categoria','CASCADE','SET NULL');
				$this->forge->createTable('t_agenda');
				$this->db->enableForeignKeyChecks();
        }

        public function down()
        {
                $this->forge->dropTable('t_agenda');
        }
}
