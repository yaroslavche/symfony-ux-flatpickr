```
$ composer require yaroslavche/symfony-ux-flatpickr
$ yarn install --force
$ yarn encore dev
```

```html
# template.html.twig
{{ flatpickr() }}
{{ flatpickr(instance) }}
```

```php
# src/Controller/SomeController.php

use Yaroslavche\Symfony\UX\Flatpickr\Builder\FlatpickrBuilderInterface;

/**
 * @Route("/", name="home")
 * @param FlatpickrBuilderInterface $flatpickrBuilder
 * @return Response
 */
public function index(FlatpickrBuilderInterface $flatpickrBuilder): Response
{
    $instance = $flatpickrBuilder->createFlatpickrInstance();
    $instance->getConfig()->setDateFormat('d.m.Y');
    return $this->render('home/index.html.twig', [
        'instance' => $instance,
    ]);
}
```