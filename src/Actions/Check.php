<?php

namespace CdekSDK2\Actions;

class Check extends Action
{
    use FilteredTrait;
    /**
     * URL для запросов к API
     *
     * @var string
     */
    public const URL = '/check';

    /**
     * Список корректных параметров, которые разрешено передавать для получения чека
     * @var array
     */
    public const FILTER = [
        'order_uuid' => '',
        'cdek_number' => '',
        'date' => '',
    ];
}
