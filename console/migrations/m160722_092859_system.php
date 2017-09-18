<?php

use yii\db\Migration;

class m160722_092859_system extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%system}}', [
            'id' => $this->primaryKey(),
            'webname' => $this->string()->notNull(),
            'weburl' => $this->string()->notNull(),
            'logo' => $this->string()->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string(),
            'icp' => $this->string()->notNull(),
            'addr' => $this->string()->notNull(),
            'tel' => $this->string()->notNull(),
            'count' => $this->string()->notNull(),
            'introduction' => $this->text(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%system}}');
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