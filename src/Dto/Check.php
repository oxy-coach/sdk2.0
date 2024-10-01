<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class Check
{
    /**
     * Идентификатор заказа в ИС СДЭК, по которому был сформирован чек
     * @Type("string")
     * @var string
     */
    public $order_uuid;

    /**
     * Номер заказа СДЭК, по которому был сформирован чек
     * @Type("int")
     * @var int
     */
    public $cdek_number;

    /**
     * Дата и время формирования чека
     * @Type("string")
     * @var string
     */
    public $date;

    /**
     * Номер фискального накопителя
     * @Type("string")
     * @var string
     */
    public $fiscal_storage_number;

    /**
     * Порядковый номер фискального документа
     * @Type("string")
     * @var string
     */
    public $document_number;

    /**
     * Фискальный признак документа
     * @Type("int")
     * @var int
     */
    public $fiscal_sign;

    /**
     * Тип чека. Возможные значения:
     * CASH_RECEIPT_IN - чек прихода
     * CASH_RECEIPT_REFUND - чек возврата
     * @Type("string")
     * @var string
     */
    public $type;

    /**
     * Информация о сумме по чеку
     * @Type("array<CdekSDK2\Dto\PaymentInfo>")
     * @var PaymentInfo[]
     */
    public $payment_info;
}
