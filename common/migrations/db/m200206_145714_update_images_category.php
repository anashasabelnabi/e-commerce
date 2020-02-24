<?php

use yii\db\Migration;

/**
 * Class m200206_145714_update_images_category
 */
class m200206_145714_update_images_category extends Migration
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
        echo "m200206_145714_update_images_category cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->dropColumn('category', 'images');
        $this->dropColumn('category', 'main_image');
        $this->addColumn('category', 'image_path', $this->string());
        $this->addColumn('category', 'image_base_url', $this->string());
        $this->alterColumn('category','image_path','string not null');
        $this->alterColumn('category','image_base_url','string not null');

    }

    public function down()
    {
        echo "m200206_145714_update_images_category cannot be reverted.\n";

        return false;
    }

}
