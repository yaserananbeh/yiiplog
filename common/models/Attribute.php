<?php

namespace common\models;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%attribute}}".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $category_id
 * @property int|null $created_at
 * @property int|null $updated_at
 * @property int|null $created_by
 *
 * @property Category $category
 * @property User $createdBy
 * @property PostAttributeValue[] $postAttributeValues
 */
class Attribute extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%attribute}}';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false
            ]
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name','category_id'], 'required'],
            [['category_id', 'created_at', 'updated_at', 'created_by'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category_id' => 'Category ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CategoryQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\UserQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[PostAttributeValues]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostAttributeValueQuery
     */
    public function getPostAttributeValues()
    {
        return $this->hasMany(PostAttributeValue::className(), ['post_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\AttributeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\AttributeQuery(get_called_class());
    }
}
