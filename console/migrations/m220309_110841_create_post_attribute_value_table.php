<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post_attribute_value}}`.
 */
class m220309_110841_create_post_attribute_value_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%post_attribute_value}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer(),
            'attribute_id' => $this->integer(),
            'value' => $this->string(),
        ]);
        $this->addForeignKey("FK_post_attribute_value_post_post_id", '{{%post_attribute_value}}', 'post_id', '{{%post}}', "id");
        $this->addForeignKey("FK_post_attribute_value_attribute_attribute_id", '{{%post_attribute_value}}', 'attribute_id', '{{%attribute}}', "id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("FK_post_attribute_value_post_post_id", '{{%post_attribute_value}}');
        $this->dropForeignKey("FK_post_attribute_value_attribute_attribute_id", '{{%post_attribute_value}}');
        $this->dropTable('{{%post_attribute_value}}');
    }
}
