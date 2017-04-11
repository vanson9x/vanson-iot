<?php

use yii\db\Migration;

class m170411_001706_Table_Alarm extends Migration
{
    public function Up(){
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%alarm}}', [
            'id' => $this->primaryKey(),
            'begin' => $this -> datetime() -> notNull(),
            'count' => $this -> integer() -> notNull(),
            'id_product' => $this -> integer() -> notNull(),
            'created_at' => $this->date()->defaultValue(date('Y/m/d',time())),
            'updated_at' => $this->date()->defaultValue(date('Y/m/d',time())),
        ], $tableOptions);

        // add forenkey
        $this -> addForeignKey(
                'FK_tblAlarm_tblProduct',
                'alarm',
                'id_product',
                'product',
                'id',
                'CASCADE',
                'CASCADE'
            );
    }

    public function Down()
    {
        $this->dropForeignKey('FK_tblAlarm_tblProduct','{{%alarm}}');
        $this->dropTable('{{%alarm}}');
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
