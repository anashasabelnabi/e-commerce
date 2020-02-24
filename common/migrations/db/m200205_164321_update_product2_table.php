<?php

use yii\db\Migration;

/**
 * Class m200205_164321_update_product2_table
 */
class m200205_164321_update_product2_table extends Migration
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
        echo "m200205_164321_update_product2_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->alterColumn(product,title,'varchar(255) not null');
        $this->alterColumn(product,description,'varchar(255) not null');
        $this->alterColumn(product,image_path,'text not null');
        $this->alterColumn(product,image_base_url,'text not null');
        $this->alterColumn(product,created_at,'string not null');

    }

    public function down()
    {
        echo "m200205_164321_update_product2_table cannot be reverted.\n";

        return false;
    }

}
