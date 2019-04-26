<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%private_owner}}`.
 */
class m190413_131035_create_private_owner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%private_owner}}', [
            'id' => $this->primaryKey(),
            'owner_no' => $this->string(5)->notNull()->unique(),
            'f_name' => $this->string(300)->notNull(),
            'l_name' => $this->string(300)->notNull(),
            'address' => $this->string(),
            'telephone' => $this->integer(),
            'user_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%private_owner}}');
    }
}
