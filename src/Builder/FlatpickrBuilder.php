<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Builder;

use Yaroslavche\Symfony\UX\Flatpickr\Model\Config;
use Yaroslavche\Symfony\UX\Flatpickr\Model\Instance;

/**
 * Class FlatpickrBuilder
 * @package Yaroslavche\Symfony\UX\Flatpickr\Builder
 */
class FlatpickrBuilder implements FlatpickrBuilderInterface
{
    public function createFlatpickrInstance(): Instance
    {
        $config = $this->createFlatpickrConfig();
        $instance = new Instance();
        $instance->setConfig($config);
        return $instance;
    }

    public function createFlatpickrConfig(): Config
    {
        return new Config();
    }
}
