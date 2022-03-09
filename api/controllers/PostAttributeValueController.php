<?php

namespace api\controllers;

use common\models\PostAttributeValue;
use yii\rest\ActiveController;

class PostAttributeValueController extends ActiveController
{
    public $modelClass = PostAttributeValue::class;
}
