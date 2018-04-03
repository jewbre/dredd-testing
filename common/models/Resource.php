<?php

namespace common\models;

use common\models\base\Resource as BaseResource;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "resource".
 */
class Resource extends BaseResource
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                [['fieldString', 'fieldDate', 'comment'], 'string', 'min' => 1]
            ]
        );
    }
}
