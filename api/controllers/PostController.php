<?php

namespace api\controllers;

use api\resource\Post;

class PostController extends \yii\rest\ActiveController
{
    public $modelClass = Post::class;
}
