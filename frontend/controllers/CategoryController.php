<?php

namespace frontend\controllers;

use common\models\Category;
use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = Category::class;
}
