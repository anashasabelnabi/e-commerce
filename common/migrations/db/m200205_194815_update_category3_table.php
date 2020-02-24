<?php

use yii\db\Migration;

/**
 * Class m200205_194815_update_category3_table
 */
class m200205_194815_update_category3_table extends Migration
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
        echo "m200205_194815_update_category3_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('product', 'images');
        $this->dropColumn('product', 'main_image');
        $this->addColumn('category', 'images', $this->string());
        $this->addColumn('category', 'main_image', $this->string());

    }

    public function down()
    {
        echo "m200205_194815_update_category3_table cannot be reverted.\n";

        return false;
    }

}
