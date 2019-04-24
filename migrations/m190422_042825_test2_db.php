<?php

use yii\db\Migration;

/**
 * Class m190422_042825_test2_db
 */
class m190422_042825_test2_db extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      $this->createTable('new_user',[
        'f_name'=> $this->string(),
        'l_name'=> $this->string(),
        'email'=> $this->string(),
        'marks'=> $this->decimal(),
        'status'=> $this->boolean(),
      ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190422_042825_test2_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190422_042825_test2_db cannot be reverted.\n";

        return false;
    }
    */
}
