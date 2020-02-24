<?php

use yii\db\Migration;

/**
 * Class m200206_182235_update_varchar
 */
class m200206_182235_update_varchar extends Migration
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
        echo "m200206_182235_update_varchar cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->alterColumn('category','image_path','varchar(1024)not null');
        $this->alterColumn('category','image_base_url','varchar(1024) not null');
        $this->alterColumn('product','image_path','varchar(1024) not null');
        $this->alterColumn('product','image_base_url','varchar(1024) not null');

    }

    public function down()
    {
        echo "m200206_182235_update_varchar cannot be reverted.\n";

        return false;
    }

}
