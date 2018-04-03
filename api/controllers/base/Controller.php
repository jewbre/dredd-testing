<?php

namespace api\controllers\base;

/**
 * This is the class for REST controller "ResourceController".
 */

use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBearerAuth;

abstract class Controller extends \yii\rest\ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => CompositeAuth::class,
            'authMethods' => [
                HttpBearerAuth::class,
            ],
        ];
        return $behaviors;
    }

}
