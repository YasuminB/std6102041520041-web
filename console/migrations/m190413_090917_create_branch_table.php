<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%branch}}`.
 */
class m190413_090917_create_branch_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%branch}}', [
            'id' => $this->primaryKey(),
            'branch_no' => $this ->string(10)->notNull()->unique(),
            'name' => $this ->string(150),
            'street' => $this ->string(150),
            'city' => $this->string(150),
            'postcode' =>$this ->String(10)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%branch}}');
    }
}
