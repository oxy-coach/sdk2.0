<?php

declare(strict_types=1);

namespace CdekSDK2\Dto;

use JMS\Serializer\Annotation\Type;

/**
 * Class PickupPointList
 * @package CdekSDK2\Dto
 */
class PickupPointList
{
    /**
     * Список ПВЗ
     * @Type("array<CdekSDK2\Dto\PickupPoint>")
     * @var PickupPoint[]
     */
    public $items = [];

    public function getCount(): int
    {
        return count($this->items);
    }

    public function filter(array $filter = []): array
    {
        $filtered = [];
        foreach ($this->items as $pvz) {
            foreach ($filter as $k => $v) {
                if (
                    property_exists(PickupPoint::class, $k)
                    && mb_strtolower((string) $pvz->$k) === mb_strtolower((string) $v)
                ) {
                    $filtered[] = $pvz;
                    break;
                }
            }
        }
        return $filtered;
    }
}
