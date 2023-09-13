```
$ composer require yaroslavche/symfony-ux-flatpickr
$ yarn install --force
$ yarn encore dev
```

```php
# src/Controller/SomeController.php
# ...
use Yaroslavche\Symfony\UX\Flatpickr\Form\Type\FlatpickrDateTimeType;
use Yaroslavche\Symfony\UX\Flatpickr\Form\Type\FlatpickrDateType;

class SomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $form = $this->createFormBuilder()
            ->add('date', FlatpickrDateType::class)
            ->add('datetime', FlatpickrDateTimeType::class)
            ->add('send', SubmitType::class)
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dd($data);
        }
        return $this->renderForm('template.html.twig', ['form' => $form]);
    }
}
```

## Installation without recipe
```json5
  # assets/controllers.json
  "controllers": {
        "@yaroslavche/symfony-ux-flatpickr": {
            "flatpickr": {
                "enabled": true,
                "fetch": "eager"
            }
        }
    },
```

```json5
# package.json
"devDependencies": {
  # ...
  "@yaroslavche/symfony-ux-flatpickr": "file:vendor/yaroslavche/symfony-ux-flatpickr/src/Resources/assets",
  "flatpickr": "^4.6.13"          
}
```

Make sure, that you have in `package.json`
```
"@symfony/stimulus-bridge": "^3.2.2",
"@symfony/webpack-encore": "^4.0.0",
```
[Upgrading to stimulus-bridge 2.0](https://symfony.com/blog/webpack-encore-1-0-and-stimulus-bridge-2-0-released#upgrading-to-stimulus-bridge-2-0)
