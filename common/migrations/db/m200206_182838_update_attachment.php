<?php

use yii\db\Migration;

/**
 * Class m200206_182838_update_attachment
 */
class m200206_182838_update_attachment extends Migration
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
        echo "m200206_182838_update_attachment cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->renameColumn('category_attachment', 'article_id', 'category_id');
        $this->renameColumn('product_attachment', 'article_id', 'product_id');

        /**/
        $this->alterColumn('category_attachment','path','varchar(1024)not null');
        $this->alterColumn('category_attachment','base_url','varchar(1024) not null');
        $this->alterColumn('category_attachment','type','varchar(255) not null');
        $this->alterColumn('category_attachment','name','varchar(255) not null');
        $this->alterColumn('category_attachment','created_at','int(11) not null');
        /**/
        $this->alterColumn('product_attachment','path','varchar(1024)not null');
        $this->alterColumn('product_attachment','base_url','varchar(1024) not null');
        $this->alterColumn('product_attachment','type','varchar(255) not null');
        $this->alterColumn('product_attachment','name','varchar(255) not null');
        $this->alterColumn('product_attachment','created_at','int(11) not null');
        /**/
        $this->addForeignKey(category_id,category_attachment,category_id,category,id);
        $this->addForeignKey(product_id,product_attachment,product_id,product,id);

    }

    public function down()
    {
        echo "m200206_182838_update_attachment cannot be reverted.\n";

        return false;
    }

}
