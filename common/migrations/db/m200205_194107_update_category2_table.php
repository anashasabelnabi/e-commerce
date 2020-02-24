<?php

use yii\db\Migration;

/**
 * Class m200205_194107_update_category2_table
 */
class m200205_194107_update_category2_table extends Migration
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
        echo "m200205_194107_update_category2_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('category', 'image_path');
        $this->dropColumn('category', 'image_base_url');
        $this->addColumn('product', 'images', $this->string());
        $this->addColumn('product', 'main_image', $this->string());

    }

    public function down()
    {
        echo "m200205_194107_update_category2_table cannot be reverted.\n";

        return false;
    }

}
