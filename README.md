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