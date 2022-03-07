<?php

namespace app\common\models\query;

/**
 * This is the ActiveQuery class for [[\app\common\models\Category]].
 *
 * @see \app\common\models\Category
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \app\common\models\Category[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \app\common\models\Category|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
