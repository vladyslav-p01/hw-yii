<?php

use yii\db\Schema;
use yii\db\Migration;

class m151129_160959_site_type extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('site_type', [
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('site_type');
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
