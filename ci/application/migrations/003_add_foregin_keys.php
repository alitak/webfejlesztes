<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_foregin_keys extends CI_Migration
{

    public function up()
    {
        $this->db->query('ALTER TABLE `posts` ADD CONSTRAINT `fk_posts_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;');
    }

    public function down()
    {
        $this->db->query('ALTER TABLE `posts` DROP FOREIGN KEY `fk_posts_category_id`');
    }

}
