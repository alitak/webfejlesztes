<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_posts_table extends CI_Migration
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
            'category_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'constraint' => 11,
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
            ),
            'post' => [
                'type' => 'TEXT',
            ],
        ];
        $this->dbforge->add_field($fieds);
        $this->dbforge->add_key('id', true);
        $this->dbforge->add_key('category_id');
        $this->dbforge->create_table('posts');
    }

    public function down()
    {
        $this->dbforge->drop_table('posts');
    }

}
