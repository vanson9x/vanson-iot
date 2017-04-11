<?php

use yii\db\Migration;

class m170405_093841_Table_User extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->date()->defaultValue(date('Y/m/d',time())),
            'updated_at' => $this->date()->defaultValue(date('Y/m/d',time())),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user}}');

    }

    
    // Use safeUp/safeDown to run migration code within a transaction
    // public function safeUp()
    // {
        
    // }

    // public function safeDown()
    // {
    // }
    
}
