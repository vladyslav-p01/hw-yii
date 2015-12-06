<?php

use yii\db\Schema;
use yii\db\Migration;

class m151129_174846_site extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('site', [
            'id' => $this->primaryKey(),
            'owner_id' => $this->integer(3)->notNull(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'site_type_id' => $this->integer(2),
            'site_url' => $this->string(),
        ], $tableOptions);


        /*$this->addForeignKey('fk-order-user_id',
            'order', 'user_id', 'user', 'id', 'CASCADE');*/


        $this->addForeignKey('fk-site-owner_id',
            'site', 'owner_id', 'user', 'id', 'CASCADE');

        $this->addForeignKey('fk-site-site_type_id', 'site',
            'site_type_id', 'site_type', 'id', 'CASCADE');

    }


    public function down()
    {
        $this->dropForeignKey('fk-site-owner_id', 'site');
        $this->dropForeignKey('fk-site-site_type_id', 'site');
        $this->dropTable('site');

    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
