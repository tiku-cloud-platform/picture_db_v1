<?php
declare(strict_types=1);

namespace App\Logic\User\Service;

use App\Logic\User\Repository\ImageSeriesRepository;

class ImageSeriesService implements UserServiceInterface
{

    public static function searchWhere(array $requestParams)
    {
        // TODO: Implement searchWhere() method.
    }

    public function serviceAll(array $requestParams): array
    {
       return (new ImageSeriesRepository())->repositoryAll();
    }

    public function serviceSelect(array $requestParams): array
    {
        // TODO: Implement serviceSelect() method.
    }

    public function serviceCreate(array $requestParams): array
    {
        // TODO: Implement serviceCreate() method.
    }

    public function serviceUpdate(array $requestParams): array
    {
        // TODO: Implement serviceUpdate() method.
    }

    public function serviceDelete(array $requestParams): int
    {
        // TODO: Implement serviceDelete() method.
    }

    public function serviceFind(array $requestParams): array
    {
        // TODO: Implement serviceFind() method.
    }
}
