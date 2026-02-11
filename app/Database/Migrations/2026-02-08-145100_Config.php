<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Config extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            "config_key" => [
                "type" => "VARCHAR",
                "constraint" => 100,
                "unique" => true,
            ],
            "config_value" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => true,
            ],
            "created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
            "updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("app_config");
        $this->db->table("app_config")->insertBatch([
            [
                "config_key" => "school_name",
                "config_value" => "Cihat Kora Anadolu Lisesi",
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropTable("app_config");
    }
}
