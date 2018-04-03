<?php

namespace common\models;

use common\models\base\SubResource as BaseSubResource;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "subresource".
 */
class SubResource extends BaseSubResource
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
                # custom validation rules
            ]
        );
    }
}
