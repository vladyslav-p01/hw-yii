<?php

use yii\db\Schema;
use yii\db\Migration;

class m151205_215508_addingForeignKey extends Migration
{
    public function up()
    {
        //$name, $table, $columns, $refTable, $refColumns,

        $this->addForeignKey('fk-user-gender_id', 'user',
            'gender_id', 'gender', 'id', 'CASCADE');

        $this->addForeignKey('fk-site-site_type_id', 'site',
            'site_type_id', 'site_type', 'id', 'CASCADE');

        /*
                $this->addForeignKey(
                    'fk-<?= $table . '-' . $field_first ?>_id',
                    '<?= $table ?>',
                    '<?= $field_first ?>_id',
                    '<?= $field_first ?>',
                    'id',
                    'CASCADE');
        */
    }


    public function down()
    {
        $this->dropForeignKey('fk-user-gender_id', 'user');
        $this->dropForeignKey('fk-site-site_type_id', 'site');
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
