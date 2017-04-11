<?php

use yii\db\Migration;

class m170410_143742_Table_Status extends Migration
{
     public function safeUp(){
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%status}}', [
            'id' => $this->primaryKey(),
            'turn_on' => $this -> boolean() -> defaultValue(false),
            'id_product' => $this -> integer() -> notNull(),
            'created_at' => $this->date()->defaultValue(date('Y/m/d',time())),
            'updated_at' => $this->date()->defaultValue(date('Y/m/d',time())),
        ], $tableOptions);

        // add forenkey
        $this -> addForeignKey(
                'FK_tblStatus_tblProduct',
                'status',
                'id_product',
                'product',
                'id',
                'CASCADE',
                'CASCADE'
            );
    }

    public function safeDown()
    {
        $this->dropForeignKey('{{%FK_tblStatus_tblProducts}}','{{%status}}');
        $this->dropTable('{{%status}}');
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
