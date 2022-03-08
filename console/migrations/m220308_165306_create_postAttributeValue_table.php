<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%postAttributeValue}}`.
 */
class m220308_165306_create_postAttributeValue_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%postAttributeValue}}', [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer(),
            'attribute_id' => $this->integer(),
            'value' => $this->string(),
        ]);
        $this->addForeignKey("FK_postAttributeValue_post_post_id", '{{%postAttributeValue}}', 'post_id', '{{%post}}', "id");
        $this->addForeignKey("FK_postAttributeValue_attribute_attribute_id", '{{%postAttributeValue}}', 'post_id', '{{%attribute}}', "id");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey("FK_postAttributeValue_post_post_id", '{{%postAttributeValue}}');
        $this->dropForeignKey("FK_postAttributeValue_attribute_attribute_id", '{{%postAttributeValue}}');
        $this->dropTable('{{%postAttributeValue}}');
    }
}
