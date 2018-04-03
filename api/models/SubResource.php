<?php
/**
 * Created by PhpStorm.
 * Date: 01/04/2018
 * Time: 22:07
 */

namespace api\models;


class SubResource extends \common\models\SubResource
{
    public function fields()
    {
        return [
            'id' => function (SubResource $model) {
                return (int)$model->id;
            },
            'message'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResource()
    {
        return $this->hasOne(Resource::class, ['id' => 'resourceId']);
    }

}
