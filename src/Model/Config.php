<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Model;

use JsonSerializable;

/**
 * @see https://flatpickr.js.org/options/
 * Class Config
 * @package Yaroslavche\Symfony\UX\Flatpickr\Model
 */
class Config implements JsonSerializable
{
    /**
     * A string of characters which are used to define how the date will be displayed in the input box. The supported characters are defined in the table below.
     * @var string $dateFormat
     */
    private $dateFormat = 'Y-m-d';

    /**
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * @param string $dateFormat
     * @return Config
     */
    public function setDateFormat(string $dateFormat): Config
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'dateFormat' => $this->dateFormat,
        ];
    }
}