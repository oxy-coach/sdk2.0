<?php

declare(strict_types=1);

namespace CdekSDK2\Actions;

use CdekSDK2\Http\ApiResponse;

trait FilteredTrait
{
    public function getFiltered(array $filter = []): ApiResponse
    {
        $add_params = $this->parseFilter($filter);
        return $this->get($add_params);
    }

    private function parseFilter(array $filter = []): string
    {
        $add_params = '';
        if (empty($filter)) {
            return $add_params;
        }

        $filtered = [];
        foreach ($filter as $k => $v) {
            if (array_key_exists($k, self::FILTER)) {
                $filtered[$k] = $v;
            }
        }
        return http_build_query($filtered);
    }

    /**
     * Переиспользуем стандартный метод
     */
    public function get(string $filter = ''): ApiResponse
    {
        return $this->http_client->get(self::URL . '?' . $filter);
    }
}
