<?php

use yii\db\Schema;
use yii\db\Migration;

class m151127_205321_gender extends Migration
{
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('gender',[
            'id' => $this->primaryKey(),
            'title' => $this->string(20)->notNull()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('gender');
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
