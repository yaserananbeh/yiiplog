<?php

namespace frontend\resource;

class Post extends \common\models\Post
{
    //  this function if I need to response with some fields(property) only
    // public function fields()
    // {
    //     return ['id', 'title', 'body'];
    // }
    public function extraFields()
    {
        // return ['created_at', 'updated_at', 'created_by', 'comments'];
        return ['comments'];
    }
    // override the get comments method to get the data from frontend/resource

    /**
     * Gets query for [[Comments]].
     *
     * @return \yii\db\ActiveQuery|\common\models\query\CommentQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['post_id' => 'id']);
    }
}
