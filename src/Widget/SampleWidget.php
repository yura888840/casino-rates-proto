<?php

namespace App\Widget;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SampleWidget extends AbstractController
{
    // Inspired by https://evilcoder.ru/kak-sozdat-vidzhet-na-symfony/

    public function __construct()
    {
    }

    public function show()
    {
        $sampleData = [
            [
                'id' => 1,
                'name' => 'PHP8',
                'slug' => 'php8',
                'count ' => 2,
            ],
            [
                'id' => 2,
                'name' => 'Node.Js',
                'slug' => 'nidejs',
                'count ' => 2,
            ],
            [
                'id' => 3,
                'name' => 'GoLang',
                'slug' => 'golang',
                'count ' => 2,
            ],
        ];

        return $this->render('widget/sample.html.twig', ['categories' => $sampleData]);
    }
}
