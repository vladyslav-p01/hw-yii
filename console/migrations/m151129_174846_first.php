<?php

use yii\db\Schema;
use yii\db\Migration;

class m151129_174846_first extends Migration
{
    public function up()
    {
        $this->createTable('sites', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'site_type' => $this->string(),
            'site_url' => $this->string(),
            'image_file' => $this->string(),
            'phone_number' => $this->string(),
            'user_name' => $this->string(),
            'gender' => $this->string(),
        ]);
    }

    public function down()
    {

       $this->dropTable('sites');
       return true;

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
