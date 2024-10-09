<?php

declare(strict_types=1);

namespace CdekSDK2\BaseTypes;

use JMS\Serializer\Annotation\Type;

/**
 * Class Services
 * @package CdekSDK2\BaseTypes
 */
class TariffServices extends Base
{
    /**
     * Код дополнительной услуги
     * @Type("string")
     * @var string
     */
    public $code;

    /**
     * Стоимость услуги (в валюте договора)
     * @Type("float")
     * @var float
     */
    public $sum;

    /**
     * Сумма услуги (с НДС и скидкой/наценкой в валюте договора)
     * @Type("float")
     * @var float
     */
    public $total_sum;

    /**
     * Процент скидки
     * @Type("float")
     * @var float
     */
    public $discount_percent;

    /**
     * Общая сумма скидки
     * @Type("float")
     * @var float
     */
    public $discount_sum;

    /**
     * Ставка НДС
     * @Type("float")
     * @var float
     */
    public $vat_rate;

    /**
     * Сумма НДС
     * @Type("float")
     * @var float
     */
    public $vat_sum;

    public function __construct(array $param = [])
    {
        parent::__construct($param);
        $this->rules = [
            'code' => 'required|alpha',
            'parameter' => 'numeric',
        ];
    }
}
