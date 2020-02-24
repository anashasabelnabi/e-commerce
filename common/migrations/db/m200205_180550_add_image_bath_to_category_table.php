<?php

use yii\db\Migration;

/**
 * Class m200205_180550_add_image_bath_to_category_table
 */
class m200205_180550_add_image_bath_to_category_table extends Migration
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
        echo "m200205_180550_add_image_bath_to_category_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('category', 'image_path', $this->string());
        $this->addColumn('category', 'image_base_url', $this->string());

        $this->alterColumn(category,image_path,'text not null');
        $this->alterColumn(category,image_base_url,'text not null');

    }

    public function down()
    {
        echo "m200205_180550_add_image_bath_to_category_table cannot be reverted.\n";

        return false;
    }

}
