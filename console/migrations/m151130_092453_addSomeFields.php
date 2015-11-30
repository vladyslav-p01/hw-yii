<?php

use yii\db\Schema;
use yii\db\Migration;

class m151130_092453_addSomeFields extends Migration
{
    public function up()
    {
        $this->addColumn('sites', 'email', 'varchar(20)');
        $this->addColumn('sites', 'age_creator', 'int(3)');
    }

    public function down()
    {
        $this->dropColumn('sites', 'email');
        $this->dropColumn('sites', 'age_creator');
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
