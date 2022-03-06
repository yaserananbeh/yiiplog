<?php

namespace frontend\controllers;

use frontend\resource\Comment;

class CommentController extends \yii\rest\ActiveController
{
    public $modelClass = Comment::class;
}
