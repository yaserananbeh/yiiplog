<?php

namespace frontend\controllers;

use frontend\resource\Comment;
use yii\filters\auth\HttpBearerAuth;

class CommentController extends \yii\rest\ActiveController
{
    public $modelClass = Comment::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator']['only'] = ['create', 'update', 'delete'];
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class
        ];
        return $behaviors;
    }
}
