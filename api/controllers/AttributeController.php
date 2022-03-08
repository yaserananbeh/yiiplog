<?php

namespace api\controllers;

use common\models\Attribute;
use yii\rest\ActiveController;

class AttributeController extends ActiveController
{
    public $modelClass = Attribute::class;
}

