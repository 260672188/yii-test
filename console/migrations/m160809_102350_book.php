<?php

use yii\db\Migration;

class m160809_102350_book extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%book}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string(),
			'name'=> $this->string()->notNull(),
			'tel'=> $this->string()->notNull(),
			'mail'=> $this->string(),
			'city'=> $this->string(),
			'money'=> $this->string(),
			'business'=> $this->string(),


            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%book}}');
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