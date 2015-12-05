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
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'site_type_id' => $this->integer(2),
            'site_url' => $this->string(),
        ], $tableOptions);
    }

    public function down()
    {

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
