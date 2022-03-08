<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%attribute}}`.
 */
class m220308_104958_create_attribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%attribute}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'category_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
        ]);
        $this->addForeignKey('FK_attribute_user_created_by', '{{%attribute}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('FK_attribute_category_category_id', '{{%attribute}}', 'category_id', '{{%category}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_attribute_category_category_id', '{{%attribute}}');
        $this->dropForeignKey('FK_attribute_user_created_by', '{{%attribute}}');
        $this->dropTable('{{%attribute}}');
    }
}
