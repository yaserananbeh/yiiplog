<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m220307_142128_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'body' => 'LONGTEXT',
            'category_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
        ]);
        $this->addForeignKey('FK_post_user_created_by', '{{%post}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('FK_post_category_category_id', '{{%post}}', 'category_id', '{{%category}}', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_post_category_category_id', '{{%post}}');
        $this->dropForeignKey('FK_post_user_created_by', '{{%post}}');
        $this->dropTable('{{%post}}');
    }
}
