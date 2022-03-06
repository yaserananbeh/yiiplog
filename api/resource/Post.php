<?php

namespace api\resource;

class Post extends \common\models\Post
{
    //  this function if I need to response with some fields(property) only
    public function fields()
    {
        return ['id', 'title', 'body'];
    }
    public function extraFields()
    {
        return ['created_at', 'updated_at', 'created_by'];
    }
}
