<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Yaroslavche\Symfony\UX\Flatpickr\Builder\FlatpickrBuilder;
use Yaroslavche\Symfony\UX\Flatpickr\Builder\FlatpickrBuilderInterface;
use Yaroslavche\Symfony\UX\Flatpickr\Twig\FlatpickrExtension as TwigExtension;
use Twig\Environment;

/**
 * Class FlatpickrExtension
 * @package Yaroslavche\Symfony\UX\Flatpickr\DependencyInjection
 */
class FlatpickrExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container
            ->setDefinition('flatpickr.builder', new Definition(FlatpickrBuilder::class))
            ->setPublic(false);
        $container
            ->setAlias(FlatpickrBuilderInterface::class, 'flatpickr.builder')
            ->setPublic(false);
        if (class_exists(Environment::class)) {
            $container
                ->setDefinition('flatpickr.twig_extension', new Definition(TwigExtension::class))
                ->addTag('twig.extension')
                ->setPublic(false);
        }
    }
}
