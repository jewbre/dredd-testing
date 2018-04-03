<?php
/**
 * Created by PhpStorm.
 * Date: 01/04/2018
 * Time: 23:11
 */

namespace api\custom;


class Response extends \yii\web\Response
{
    public function init()
    {
        parent::init();

        $this->on(self::EVENT_BEFORE_SEND, [$this, 'beforeSend']);
    }

    public function beforeSend($event)
    {
        /** @var Response $response */
        $response = $event->sender;
        if ($response->statusCode >= 400 && $response->statusCode != 422) {
            if (is_array($response->data) && $response->data['message']) {
                $response->data = [
                    'message' => $response->data['message']
                ];
            }
        }
    }


}
