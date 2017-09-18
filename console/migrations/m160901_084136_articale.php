<?php

use yii\db\Migration;

class m160901_084136_articale extends Migration
{   public function up()
{
    $tableOptions = null;
    if ($this->db->driverName === 'mysql') {
        // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }

    $this->createTable('{{%articale}}', [
        'id' => $this->primaryKey(),
        'username' => $this->string()->notNull(),
        'keywords' => $this->string(),
        'description' => $this->string(),
        'title' => $this->string()->notNull()->unique(),
        'pic' => $this->string()->notNull(),
        'pid' => $this->string()->notNull(),
        'content' => $this->text()->notNull(),

        'status' => $this->smallInteger()->notNull()->defaultValue(10),
        'created_at' => $this->integer()->notNull(),
        'updated_at' => $this->integer()->notNull(),
    ], $tableOptions);
}

    public function down()
    {
        $this->dropTable('{{%articale}}');
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
