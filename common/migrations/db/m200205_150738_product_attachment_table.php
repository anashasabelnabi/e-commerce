<?php

use yii\db\Migration;

/**
 * Class m200205_150738_product_attachment_table
 */
class m200205_150738_product_attachment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200205_150738_product_attachment_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%product_attachment}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer()->notNull(),
            'path' => $this->string()->notNull(),
            'base_url' => $this->string(),
            'type' => $this->string(),
            'size' => $this->integer(),
            'name' => $this->string(),
            'created_at' => $this->integer()
        ]);

        $this->createTable('{{%category_attachment}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer()->notNull(),
            'path' => $this->string()->notNull(),
            'base_url' => $this->string(),
            'type' => $this->string(),
            'size' => $this->integer(),
            'name' => $this->string(),
            'created_at' => $this->integer()
        ]);

    }

    public function down()
    {
        echo "m200205_150738_product_attachment_table cannot be reverted.\n";

        return false;
    }

}
