<?php

namespace frontend\resource;

class Comment extends \common\models\Comment
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }
    public function extraFields()
    {
        return ['post'];
    }
    // override the get comments method to get the data from frontend/resource

    /**
     * Gets query for [[Post]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\PostQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::class, ['id' => 'post_id']);
    }
}
