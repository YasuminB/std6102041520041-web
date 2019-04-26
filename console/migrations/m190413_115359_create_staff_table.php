<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190413_115359_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no' => $this ->string(10)->notNull()->unique(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'position' => $this->string(100),
            'sex' => $this->string(10),
            'dob' => $this->date(),
            'salary' => $this->decimal(17,2),
            'branch_id' => $this->integer(11)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
