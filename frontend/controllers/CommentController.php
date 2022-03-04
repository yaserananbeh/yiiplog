<?php

namespace frontend\controllers;

use common\models\Comment;

class CommentController extends \yii\rest\ActiveController
{
    public $modelClass = Comment::class;
}
