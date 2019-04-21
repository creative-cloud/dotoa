<?php

use yii\db\Migration;

/**
 * Class m190421_052252_test_db
 */
class m190421_052252_test_db extends Migration
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
        echo "m190421_052252_test_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190421_052252_test_db cannot be reverted.\n";

        return false;
    }
    */
}
