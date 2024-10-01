<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class Order
 * @package CdekSDK2\Dto
 */
class PaymentInfo
{
    /**
     * Сумма по чеку
     * @Type("float")
     * @var float
     */
    public $sum;

    /**
     * Тип оплаты суммы:
     * CARD - картой
     * CASH - наличными
     * @Type("string")
     * @var string
     */
    public $type;
}
