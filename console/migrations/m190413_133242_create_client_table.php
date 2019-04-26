<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190413_133242_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'client_no' => $this->string(10)->notNull()->unique(),
            'f_name' => $this->string(100)->notNull(),
            'l_name' => $this->string(100)->notNull(),
            'tel_no' => $this->string(10),
            'pref_type' => $this->string(50),
            'max_rent' => $this->decimal(7,2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
