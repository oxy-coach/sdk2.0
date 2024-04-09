<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\BaseTypes\Order;
use CdekSDK2\Exceptions\RequestException;
use CdekSDK2\Http\ApiResponse;

/**
 * Class Orders
 * @package CdekSDK2\Actions
 */
class Orders extends ActionsWithDelete
{
    /**
     * URL для запросов к API
     * @var string
     */
    public const URL = '/orders';

    /**
     * Создание заказа
     * @throws RequestException
     */
    public function add(Order $order): ApiResponse
    {
        $params = $this->serializer->toArray($order);
        return $this->preparedAdd($params);
    }

    /**
     * @throws RequestException
     */
    public function edit(Order $order): ApiResponse
    {
        $params = $this->serializer->toArray($order);
        return $this->preparedEdit($params);
    }

    /**
     * Получить данные по номеру заказа СДЭК
     * @throws RequestException
     */
    public function getByNumber(string $number): ApiResponse
    {
        $slug = static::URL . '?cdek_number=' . $number;
        return $this->http_client->get($slug);
    }

    /**
     * Получить данные по номеру заказа в ИС клиента
     * @throws RequestException
     */
    public function getByImNumber(string $imNumber): ApiResponse
    {
        $slug = static::URL . '?im_number=' . $imNumber;
        return $this->http_client->get($slug);
    }
}
