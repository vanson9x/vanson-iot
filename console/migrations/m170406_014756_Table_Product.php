<?php

use yii\db\Migration;

class m170406_014756_Table_Product extends Migration
{
  public function up()
  {
      $tableOptions = null;
      if ($this->db->driverName === 'mysql') {
          $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
      }

      $this->createTable('{{%product}}', [
          'id' => $this->primaryKey(),
          'name' => $this->string()->notNull(),
          'power' => $this->integer()->notNull(),
          'time_use' => $this->integer()->notNull()->defaultValue(0),
          'created_at' => $this->date()->defaultValue(date('Y/m/d',time())),
          'updated_at' => $this->date()->defaultValue(date('Y/m/d',time())),
      ], $tableOptions);
  }

  public function down()
  {
      $this->dropTable('{{%product}}');
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
