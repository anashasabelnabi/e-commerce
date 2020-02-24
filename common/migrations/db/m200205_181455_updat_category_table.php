<?php

use yii\db\Migration;

/**
 * Class m200205_181455_updat_category_table
 */
class m200205_181455_updat_category_table extends Migration
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
        echo "m200205_181455_updat_category_table cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->dropColumn('category', 'image');
        $this->alterColumn(category,title,'string not null');
        $this->alterColumn(category,description,'string not null');
    }

    public function down()
    {
        echo "m200205_181455_updat_category_table cannot be reverted.\n";

        return false;
    }

}
