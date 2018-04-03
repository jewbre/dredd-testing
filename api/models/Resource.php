<?php
/**
 * Created by PhpStorm.
 * Date: 01/04/2018
 * Time: 22:07
 */

namespace api\models;


class Resource extends \common\models\Resource
{
    public function fields()
    {
        return [
            'id' => function (Resource $model) {
                return (int)$model->id;
            },
            'fieldString',
            'fieldNumber' => function (Resource $model) {
                return (float)$model->fieldNumber;
            },
            'fieldDate' => function (Resource $model) {
                $date = \DateTime::createFromFormat(\DateTime::ATOM, $model->fieldDate);
                return $date->format(\DateTime::ATOM);
            },
            'comment' => function (Resource $model) {
                return $model->comment;
            },
            'fieldArray' => function (Resource $model) {
                return $model->subresources;
            }
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubresources()
    {
        return $this->hasMany(Subresource::class, ['resourceId' => 'id']);
    }


}
