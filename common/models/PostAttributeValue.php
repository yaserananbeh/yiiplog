<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%post_attribute_value}}".
 *
 * @property int $id
 * @property int|null $post_id
 * @property int|null $attribute_id
 * @property string|null $value
 *
 * @property Attribute $post
 * @property Post $post0
 */
class PostAttributeValue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%post_attribute_value}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'attribute_id'], 'integer'],
            [['value'], 'string', 'max' => 255],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attribute::className(), 'targetAttribute' => ['post_id' => 'id']],
            [['post_id'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['post_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Post ID',
            'attribute_id' => 'Attribute ID',
            'value' => 'Value',
        ];
    }

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\AttributeQuery
     */
    public function getPost()
    {
        return $this->hasOne(Attribute::className(), ['id' => 'post_id']);
    }

    /**
     * Gets query for [[Post0]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostQuery
     */
    public function getPost0()
    {
        return $this->hasOne(Post::className(), ['id' => 'post_id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\PostAttributeValueQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\PostAttributeValueQuery(get_called_class());
    }
}
