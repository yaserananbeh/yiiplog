<?php

namespace api\controllers;

use frontend\resource\Post;

class PostController extends \yii\rest\ActiveController
{
    public $modelClass = Post::class;
}
