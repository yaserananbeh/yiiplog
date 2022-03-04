<?php

namespace frontend\controllers;

use common\models\Post;

class PostController extends \yii\rest\ActiveController
{
    public $modelClass = Post::class;
}
