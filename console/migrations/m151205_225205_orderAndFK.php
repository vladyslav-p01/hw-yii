<?php

use yii\db\Schema;
use yii\db\Migration;

class m151205_225205_orderAndFK extends Migration
{
    public function up()
    {
        $this->createTable('order', [
           'id' => $this->primaryKey(),
           'user_id' => $this->integer(5)->notNull(),
           'site_id' => $this->integer(5)->notNull(),
        ]);

        $this->addForeignKey('fk-order-user_id',
            'order', 'user_id', 'user', 'id', 'CASCADE');

        $this->addForeignKey('fk-order-site_id',
            'order', 'site_id', 'site', 'id', 'CASCADE');
    }

    public function down()
    {
        $this->dropForeignKey('fk-order-user_id', 'order');
        $this->dropForeignKey('fk-order-site_id', 'order');
        $this->dropTable('order');
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
