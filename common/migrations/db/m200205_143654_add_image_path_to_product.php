<?php

use yii\db\Migration;

/**
 * Class m200205_143654_add_image_path_to_product
 */
class m200205_143654_add_image_path_to_product extends Migration
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
        echo "m200205_143654_add_image_path_to_product cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('product', 'image_path', $this->string());
        $this->addColumn('product', 'image_base_url', $this->string());



    }

    public function down()
    {
        echo "m200205_143654_add_image_path_to_product cannot be reverted.\n";

        return false;
    }

}
