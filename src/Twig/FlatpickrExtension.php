<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Yaroslavche\Symfony\UX\Flatpickr\Model\Config;
use Yaroslavche\Symfony\UX\Flatpickr\Model\Instance;

/**
 * Class FlatpickrExtension
 * @package Yaroslavche\Symfony\UX\Flatpickr\Twig
 */
class FlatpickrExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('flatpickr', [$this, 'flatpickr'], ['needs_environment' => true, 'is_safe' => ['html']]),
        ];
    }

    public function flatpickr(Environment $env, ?Instance $instance = null): string
    {
        $config = null !== $instance ? $instance->getConfig() : new Config();
        $configEncoded = base64_encode(json_encode($config));
        return <<<INPUT
<input
    data-controller="@yaroslavche/symfony-ux-flatpickr/flatpickr"
    data-config="{$configEncoded}"
>
INPUT;
    }
}
