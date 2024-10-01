<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

class CheckList
{
    /**
     * Информация о чеке
     * @Type("array<CdekSDK2\Dto\Check>")
     * @var Check[]
     */
    public $check_info;
}
