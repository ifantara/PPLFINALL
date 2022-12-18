<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CobaDB extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'=>'INT',
                'constraint'=>11,
                'auto_increment'=>true,
                'unsigned'=>true,
            ],
            'nrp' => [
                'type'=>'VARCHAR',
                'constraint'=>16,
            ],
            'namaMahasiswa' => [
                'type'=>'VARCHAR',
                'constraint'=>64,
            ],
            'nomerTelepon' => [
                'type'=>'VARCHAR',
                'constraint'=>16,
            ],
            'dosenPembimbing' => [
                'type'=>'VARCHAR',
                'constraint'=>64,
            ],
            'dosenPenguji' => [
                'type'=>'VARCHAR',
                'constraint'=>64,
            ],
            'tanggal' => [
                'type'=>'DATE'
            ]]
        );
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('jadwal');
    }
    public function down()
    {
        $this->forge->dropTable('jadwal');
    }
}
