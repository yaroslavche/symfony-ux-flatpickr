<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Model;

use DateTimeInterface;
use JsonSerializable;

/**
 * @see https://flatpickr.js.org/options/
 * Class Config
 * @package Yaroslavche\Symfony\UX\Flatpickr\Model
 */
class Config implements JsonSerializable
{
    /**
     * Exactly the same as date format, but for the altInput field
     * @var string
     */
    private $altFormat = 'F j, Y';
    /**
     * Show the user a readable date (as per altFormat), but return something totally different to the server.
     * @var bool
     */
    private $altInput = false;
    /**
     * This class will be added to the input element created by the altInput option.  Note that altInput already inherits classes from the original input.
     * @var string
     */
    private $altInputClass = '';
    /**
     * Allows the user to enter a date directly into the input field. By default, direct entry is disabled.
     * @var bool
     */
    private $allowInput = false;
    /**
     * Allows the preloading of an invalid date. When disabled, the field will be cleared if the provided date is invalid
     * @var bool
     */
    private $allowInvalidPreload = false;
    /**
     * Instead of body, appends the calendar to the specified node instead.
     * Attaching the calendar to a specific element makes it depend on that element’s position and style. If the calendar is not positioned as expected, check the CSS rules of the container.
     * @var null|string
     */
    private $appendTo = null;
    /**
     * Defines how the date will be formatted in the aria-label for calendar days, using the same tokens as dateFormat. If you change this, you should choose a value that will make sense if a screen reader reads it out loud.
     * @var string
     */
    private $ariaDateFormat = 'F j, Y';
    /**
     * When in "multiple" mode, conjunction is used to separate dates in the entry field.
     * @var null|string
     */
    private $conjunction = null;
    /**
     * Whether clicking on the input should open the picker. You could disable this if you wish to open the calendar manually with.open()
     * @var bool
     */
    private $clickOpens = true;
    /**
     * A string of characters which are used to define how the date will be displayed in the input box. The supported characters are defined in the table below.
     * @var string $dateFormat
     */
    private $dateFormat = 'Y-m-d';
    /**
     * Sets the initial selected date(s).
     * If you're using mode: "multiple" or a range calendar supply an Array of Date objects or an Array of date strings which follow your dateFormat.
     * Otherwise, you can supply a single Date object or a date string.
     * @var null|string
     */
    private $defaultDate = null;
    /**
     * Initial value of the hour element.
     * @var int
     */
    private $defaultHour = 12;
    /**
     * Initial value of the minute element.
     * @var int
     */
    private $defaultMinute = 0;
    /**
     * Disabling specific dates
     * @var array<int, DateTimeInterface>
     */
    private $disable = [];
    /**
     * Set disableMobile to true to always use the non-native picker.
     * By default, flatpickr utilizes native datetime widgets unless certain options (e.g. disable) are used.
     * @var bool
     */
    private $disableMobile = false;
    /**
     * Disabling all dates except select few
     * This is the enable option, which takes in an array of date strings, date ranges and functions. Essentially the same as the disable option above, but reversed.
     * @var array<int, DateTimeInterface>
     */
    private $enable = [];
    /**
     * Enables time picker
     * @var bool
     */
    private $enableTime = false;
    /**
     * Enables seconds in the time picker.
     * @var bool
     */
    private $enableSeconds = false;
    /**
     * Adjusts the step for the hour input (incl. scrolling)
     * @var int
     */
    private $hourIncrement = 1;
    /**
     * Displays the calendar inline
     * @var bool
     */
    private $inline = false;
    /**
     * The maximum date that a user can pick to (inclusive).
     * @var null|DateTimeInterface
     */
    private $maxDate = null;
    /**
     * The minimum date that a user can start picking from (inclusive).
     * @var null|DateTimeInterface
     */
    private $minDate = null;
    /**
     * Adjusts the step for the minute input (incl. scrolling)
     * @var int
     */
    private $minuteIncrement = 5;
    /**
     * "single", "multiple", or "range"
     * @var string
     */
    private $mode = 'single';
    /**
     * HTML for the arrow icon, used to switch months.
     * @var string
     */
    private $nextArrow = '>';
    /**
     * Hides the day selection in calendar.
     * Use it along with enableTime to create a time picker.
     * @var bool
     */
    private $noCalendar = false;
    /**
     * Where the calendar is rendered relative to the input vertically and horizontally. In the format of "[vertical] [horizontal]". Vertical can be auto, above or below (required). Horizontal can be left, center or right.
     * e.g. "above" or "auto center"
     * @var string
     */
    private $position = 'auto';
    /**
     * The element off of which the calendar will be positioned.
     * @var null|string
     */
    private $positionElement = null;
    /**
     * HTML for the left arrow icon.
     * @var string
     */
    private $prevArrow = '<';
    /**
     * Show the month using the shorthand version (ie, Sep instead of September).
     * @var bool
     */
    private $shorthandCurrentMonth = false;
    /**
     * @var bool Position the calendar inside the wrapper and next to the input element.
     * Attaching the calendar to a specific element makes it depend on that element’s position and style. If the calendar is not positioned as expected, check the CSS rules of the container.
     */
    private $static = false;
    /**
     * The number of months to be shown at the same time when displaying the calendar.
     * @var int
     */
    private $showMonths = 1;
    /**
     * Displays time picker in 24 hour mode without AM/PM selection when enabled.
     * @var bool
     */
    private $time24hr = false;
    /**
     * Enables display of week numbers in calendar.
     * @var bool
     */
    private $weekNumbers = false;
    /**
     * Custom elements and input groups
     * @var bool
     */
    private $wrap = false;
    /**
     * How the month should be displayed in the header of the calendar.
     * "dropdown" or "static"
     * If showMonths has a value greater than 1, the month is always shown as static.
     * @var string
     */
    private $monthSelectorType = 'dropdown';

    /**
     * @return string
     */
    public function getAltFormat(): string
    {
        return $this->altFormat;
    }

    /**
     * @param string $altFormat
     * @return Config
     */
    public function setAltFormat(string $altFormat): Config
    {
        $this->altFormat = $altFormat;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAltInput(): bool
    {
        return $this->altInput;
    }

    /**
     * @param bool $altInput
     * @return Config
     */
    public function setAltInput(bool $altInput): Config
    {
        $this->altInput = $altInput;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltInputClass(): string
    {
        return $this->altInputClass;
    }

    /**
     * @param string $altInputClass
     * @return Config
     */
    public function setAltInputClass(string $altInputClass): Config
    {
        $this->altInputClass = $altInputClass;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowInput(): bool
    {
        return $this->allowInput;
    }

    /**
     * @param bool $allowInput
     * @return Config
     */
    public function setAllowInput(bool $allowInput): Config
    {
        $this->allowInput = $allowInput;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowInvalidPreload(): bool
    {
        return $this->allowInvalidPreload;
    }

    /**
     * @param bool $allowInvalidPreload
     * @return Config
     */
    public function setAllowInvalidPreload(bool $allowInvalidPreload): Config
    {
        $this->allowInvalidPreload = $allowInvalidPreload;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAppendTo(): ?string
    {
        return $this->appendTo;
    }

    /**
     * @param string|null $appendTo
     * @return Config
     */
    public function setAppendTo(?string $appendTo): Config
    {
        $this->appendTo = $appendTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getAriaDateFormat(): string
    {
        return $this->ariaDateFormat;
    }

    /**
     * @param string $ariaDateFormat
     * @return Config
     */
    public function setAriaDateFormat(string $ariaDateFormat): Config
    {
        $this->ariaDateFormat = $ariaDateFormat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConjunction(): ?string
    {
        return $this->conjunction;
    }

    /**
     * @param string|null $conjunction
     * @return Config
     */
    public function setConjunction(?string $conjunction): Config
    {
        $this->conjunction = $conjunction;
        return $this;
    }

    /**
     * @return bool
     */
    public function isClickOpens(): bool
    {
        return $this->clickOpens;
    }

    /**
     * @param bool $clickOpens
     * @return Config
     */
    public function setClickOpens(bool $clickOpens): Config
    {
        $this->clickOpens = $clickOpens;
        return $this;
    }

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

    /**
     * @return string|null
     */
    public function getDefaultDate(): ?string
    {
        return $this->defaultDate;
    }

    /**
     * @param string|null $defaultDate
     * @return Config
     */
    public function setDefaultDate(?string $defaultDate): Config
    {
        $this->defaultDate = $defaultDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultHour(): int
    {
        return $this->defaultHour;
    }

    /**
     * @param int $defaultHour
     * @return Config
     */
    public function setDefaultHour(int $defaultHour): Config
    {
        $this->defaultHour = $defaultHour;
        return $this;
    }

    /**
     * @return int
     */
    public function getDefaultMinute(): int
    {
        return $this->defaultMinute;
    }

    /**
     * @param int $defaultMinute
     * @return Config
     */
    public function setDefaultMinute(int $defaultMinute): Config
    {
        $this->defaultMinute = $defaultMinute;
        return $this;
    }

    /**
     * @return DateTimeInterface[]
     */
    public function getDisable(): array
    {
        return $this->disable;
    }

    /**
     * @param DateTimeInterface[] $disable
     * @return Config
     */
    public function setDisable(array $disable): Config
    {
        $this->disable = $disable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDisableMobile(): bool
    {
        return $this->disableMobile;
    }

    /**
     * @param bool $disableMobile
     * @return Config
     */
    public function setDisableMobile(bool $disableMobile): Config
    {
        $this->disableMobile = $disableMobile;
        return $this;
    }

    /**
     * @return DateTimeInterface[]
     */
    public function getEnable(): array
    {
        return $this->enable;
    }

    /**
     * @param DateTimeInterface[] $enable
     * @return Config
     */
    public function setEnable(array $enable): Config
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableTime(): bool
    {
        return $this->enableTime;
    }

    /**
     * @param bool $enableTime
     * @return Config
     */
    public function setEnableTime(bool $enableTime): Config
    {
        $this->enableTime = $enableTime;
        return $this;
    }

    /**
     * @return bool
     */
    public function isEnableSeconds(): bool
    {
        return $this->enableSeconds;
    }

    /**
     * @param bool $enableSeconds
     * @return Config
     */
    public function setEnableSeconds(bool $enableSeconds): Config
    {
        $this->enableSeconds = $enableSeconds;
        return $this;
    }

    /**
     * @return int
     */
    public function getHourIncrement(): int
    {
        return $this->hourIncrement;
    }

    /**
     * @param int $hourIncrement
     * @return Config
     */
    public function setHourIncrement(int $hourIncrement): Config
    {
        $this->hourIncrement = $hourIncrement;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInline(): bool
    {
        return $this->inline;
    }

    /**
     * @param bool $inline
     * @return Config
     */
    public function setInline(bool $inline): Config
    {
        $this->inline = $inline;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getMaxDate(): ?DateTimeInterface
    {
        return $this->maxDate;
    }

    /**
     * @param DateTimeInterface|null $maxDate
     * @return Config
     */
    public function setMaxDate(?DateTimeInterface $maxDate): Config
    {
        $this->maxDate = $maxDate;
        return $this;
    }

    /**
     * @return DateTimeInterface|null
     */
    public function getMinDate(): ?DateTimeInterface
    {
        return $this->minDate;
    }

    /**
     * @param DateTimeInterface|null $minDate
     * @return Config
     */
    public function setMinDate(?DateTimeInterface $minDate): Config
    {
        $this->minDate = $minDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinuteIncrement(): int
    {
        return $this->minuteIncrement;
    }

    /**
     * @param int $minuteIncrement
     * @return Config
     */
    public function setMinuteIncrement(int $minuteIncrement): Config
    {
        $this->minuteIncrement = $minuteIncrement;
        return $this;
    }

    /**
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     * @return Config
     */
    public function setMode(string $mode): Config
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNextArrow(): string
    {
        return $this->nextArrow;
    }

    /**
     * @param string $nextArrow
     * @return Config
     */
    public function setNextArrow(string $nextArrow): Config
    {
        $this->nextArrow = $nextArrow;
        return $this;
    }

    /**
     * @return bool
     */
    public function isNoCalendar(): bool
    {
        return $this->noCalendar;
    }

    /**
     * @param bool $noCalendar
     * @return Config
     */
    public function setNoCalendar(bool $noCalendar): Config
    {
        $this->noCalendar = $noCalendar;
        return $this;
    }

    /**
     * @return string
     */
    public function getPosition(): string
    {
        return $this->position;
    }

    /**
     * @param string $position
     * @return Config
     */
    public function setPosition(string $position): Config
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPositionElement(): ?string
    {
        return $this->positionElement;
    }

    /**
     * @param string|null $positionElement
     * @return Config
     */
    public function setPositionElement(?string $positionElement): Config
    {
        $this->positionElement = $positionElement;
        return $this;
    }

    /**
     * @return string
     */
    public function getPrevArrow(): string
    {
        return $this->prevArrow;
    }

    /**
     * @param string $prevArrow
     * @return Config
     */
    public function setPrevArrow(string $prevArrow): Config
    {
        $this->prevArrow = $prevArrow;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShorthandCurrentMonth(): bool
    {
        return $this->shorthandCurrentMonth;
    }

    /**
     * @param bool $shorthandCurrentMonth
     * @return Config
     */
    public function setShorthandCurrentMonth(bool $shorthandCurrentMonth): Config
    {
        $this->shorthandCurrentMonth = $shorthandCurrentMonth;
        return $this;
    }

    /**
     * @return bool
     */
    public function isStatic(): bool
    {
        return $this->static;
    }

    /**
     * @param bool $static
     * @return Config
     */
    public function setStatic(bool $static): Config
    {
        $this->static = $static;
        return $this;
    }

    /**
     * @return int
     */
    public function getShowMonths(): int
    {
        return $this->showMonths;
    }

    /**
     * @param int $showMonths
     * @return Config
     */
    public function setShowMonths(int $showMonths): Config
    {
        $this->showMonths = $showMonths;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTime24hr(): bool
    {
        return $this->time24hr;
    }

    /**
     * @param bool $time24hr
     * @return Config
     */
    public function setTime24hr(bool $time24hr): Config
    {
        $this->time24hr = $time24hr;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWeekNumbers(): bool
    {
        return $this->weekNumbers;
    }

    /**
     * @param bool $weekNumbers
     * @return Config
     */
    public function setWeekNumbers(bool $weekNumbers): Config
    {
        $this->weekNumbers = $weekNumbers;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWrap(): bool
    {
        return $this->wrap;
    }

    /**
     * @param bool $wrap
     * @return Config
     */
    public function setWrap(bool $wrap): Config
    {
        $this->wrap = $wrap;
        return $this;
    }

    /**
     * @return string
     */
    public function getMonthSelectorType(): string
    {
        return $this->monthSelectorType;
    }

    /**
     * @param string $monthSelectorType
     * @return Config
     */
    public function setMonthSelectorType(string $monthSelectorType): Config
    {
        $this->monthSelectorType = $monthSelectorType;
        return $this;
    }

    public function jsonSerialize(): array
    {
        $configArray = [
            'altFormat' => $this->altFormat,
            'altInput' => $this->altInput,
            'altInputClass' => $this->altInputClass,
            'allowInput' => $this->allowInput,
            'allowInvalidPreload' => $this->allowInvalidPreload,
//            'appendTo' => $this->appendTo,
            'ariaDateFormat' => $this->ariaDateFormat,
            'conjunction' => $this->conjunction,
            'clickOpens' => $this->clickOpens,
            'dateFormat' => $this->dateFormat,
            'defaultDate' => $this->defaultDate,
            'defaultHour' => $this->defaultHour,
            'defaultMinute' => $this->defaultMinute,
            'disable' => array_map(function (DateTimeInterface $datetime) {
                return $datetime->format(DATE_ISO8601);
            }, $this->disable),
            'disableMobile' => $this->disableMobile,
            'enable' => array_map(function (DateTimeInterface $datetime) {
                return $datetime->format(DATE_ISO8601);
            }, $this->enable),
            'enableTime' => $this->enableTime,
            'enableSeconds' => $this->enableSeconds,
            //'formatDate' => ,
            'hourIncrement' => $this->hourIncrement,
            'inline' => $this->inline,
            'maxDate' => $this->maxDate ? $this->maxDate->format(DATE_ISO8601) : null,
            'minDate' => $this->minDate ? $this->minDate->format(DATE_ISO8601) : null,
            'minuteIncrement' => $this->minuteIncrement,
            'mode' => $this->mode,
            'nextArrow' => $this->nextArrow,
            'noCalendar' => $this->noCalendar,
            //'onChange' => ,
            //'onClose' => ,
            //'onOpen' => ,
            //'onReady' => ,
            //'parseDate' => ,
            'position' => $this->position,
            'positionElement' => $this->positionElement,
            'prevArrow' => $this->prevArrow,
            'shorthandCurrentMonth' => $this->shorthandCurrentMonth,
            'static' => $this->static,
            'showMonths' => $this->showMonths,
            'time_24hr' => $this->time24hr,
            'weekNumbers' => $this->weekNumbers,
            'wrap' => $this->wrap,
            'monthSelectorType' => $this->monthSelectorType,
        ];
        return $configArray;
    }
}