<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Model;

use DateTimeInterface;

/**
 * @see https://flatpickr.js.org/instance-methods-properties-elements/
 * Class Instance
 * @package Yaroslavche\Symfony\UX\Flatpickr\Model
 */
class Instance
{
    /**
     * The array of selected dates (Date objects).
     * @var array<int, DateTimeInterface> $selectedDates
     */
    private $selectedDates;
    /**
     * The year currently displayed on the calendar.
     * @var int $currentYear
     */
    private $currentYear;
    /**
     * The zero-indexed month number (0-11) currently displayed on the calendar.
     * @var int $currentMonth
     */
    private $currentMonth;
    /**
     * The configuration object (defaults + user-specified options).
     * @var Config $config
     */
    private $config;

    /**
     * @return DateTimeInterface[]
     */
    public function getSelectedDates(): array
    {
        return $this->selectedDates;
    }

    /**
     * @param DateTimeInterface[] $selectedDates
     * @return Instance
     */
    public function setSelectedDates(array $selectedDates): Instance
    {
        $this->selectedDates = $selectedDates;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentYear(): int
    {
        return $this->currentYear;
    }

    /**
     * @param int $currentYear
     * @return Instance
     */
    public function setCurrentYear(int $currentYear): Instance
    {
        $this->currentYear = $currentYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurrentMonth(): int
    {
        return $this->currentMonth;
    }

    /**
     * @param int $currentMonth
     * @return Instance
     */
    public function setCurrentMonth(int $currentMonth): Instance
    {
        $this->currentMonth = $currentMonth;
        return $this;
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * @param Config $config
     * @return Instance
     */
    public function setConfig(Config $config): Instance
    {
        $this->config = $config;
        return $this;
    }
}