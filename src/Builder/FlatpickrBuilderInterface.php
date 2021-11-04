<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Builder;

use Yaroslavche\Symfony\UX\Flatpickr\Model\Config;
use Yaroslavche\Symfony\UX\Flatpickr\Model\Instance;

/**
 * Interface FlatpickrBuilderInterface
 * @package Yaroslavche\Symfony\UX\Flatpickr\Builder
 */
interface FlatpickrBuilderInterface
{
    public function createFlatpickrInstance(): Instance;

    public function createFlatpickrConfig(): Config;
}
