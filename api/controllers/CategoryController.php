<?php

namespace api\controllers;

use api\resource\Category;
use yii\rest\ActiveController;
use yii\filters\auth\HttpBearerAuth;


class CategoryController extends ActiveController
{
    public $modelClass = Category::class;

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
