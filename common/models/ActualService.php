<?php
/**
 * Created by PhpStorm.
 * Date: 19/04/2018
 * Time: 00:56
 */

namespace common\models;


use common\interfaces\Service;
use yii\base\Model;

class ActualService extends Model implements Service
{

    /**
     * @var int
     */
    private $meaningfulNumber;

    /**
     * ActualService constructor.
     * @param int $number
     */
    public function __construct(int $number)
    {
        $this->meaningfulNumber = $number;
    }

    /**
     * @return int
     */
    public function getMeaningfulNumber(): int
    {
        return $this->meaningfulNumber;
    }

    /**
     * @param int $meaningfulNumber
     */
    public function setMeaningfulNumber(int $meaningfulNumber)
    {
        $this->meaningfulNumber = $meaningfulNumber;
    }

    public function doSomething(): string
    {
        return 'aaa';
    }

    public function rules()
    {
        return parent::rules(); // TODO: Change the autogenerated stub
    }
}
