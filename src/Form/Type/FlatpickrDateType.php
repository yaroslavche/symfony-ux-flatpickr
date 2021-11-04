<?php

declare(strict_types=1);

namespace Yaroslavche\Symfony\UX\Flatpickr\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Yaroslavche\Symfony\UX\Flatpickr\Model\Config;

class FlatpickrDateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $config = (new Config())
            ->setDateFormat('d.m.Y')
            ->setEnableTime(false);
        $builder
            ->add('value', TextType::class, ['label' => false, 'attr' => [
                'data-controller' => 'yaroslavche--symfony-ux-flatpickr--flatpickr',
                'data-config' => base64_encode(json_encode($config)),
            ]]);
    }
}
