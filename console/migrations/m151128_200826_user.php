<?php

use yii\db\Schema;
use yii\db\Migration;

class m151128_200826_user extends Migration
{

    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('user',[
            'id' => $this->primaryKey()->notNull(),
            'username' => $this->string(15)->unique()->notNull(),
            'email' => $this->string(50)->unique()->notNull(),
            'age' => $this->integer(3),
            'gender_id' => $this->integer(1)->notNull(),
            'phone' => $this->string(13)->notNull(),
            'photo' => $this->string(10)
        ], $tableOptions);


        $this->addForeignKey('fk-user-gender_id', 'user',
            'gender_id', 'gender', 'id', 'CASCADE');

    }

    public function down()
    {
        $this->dropForeignKey('fk-user-gender_id', 'user');
        $this->dropTable('user');
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