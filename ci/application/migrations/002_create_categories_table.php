<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_categories_table extends CI_Migration
{

    public function up()
    {
        $fieds = [
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'tags' => [
                'type' => 'TEXT',
            ],
        ];
        $this->dbforge->add_field($fieds);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('categories');

        $fieds = [
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
        ];
        $this->dbforge->add_field($fieds);
        $this->dbforge->add_key('id', true);
        $this->dbforge->create_table('users');
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
        $this->dbforge->drop_table('categories');
    }

}
