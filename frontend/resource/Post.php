<?php

namespace frontend\resource;

class Post extends \common\models\Post
{
    //  this function if I need to response with some fields(property) only
    public function fields()
    {
        return ['id', 'title', 'body'];
    }
}
