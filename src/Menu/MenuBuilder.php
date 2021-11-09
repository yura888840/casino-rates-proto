<?php

namespace App\Menu;

use Knp\Menu\FactoryInterface;
use Knp\Menu\ItemInterface;

class MenuBuilder
{
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(array $options): ItemInterface
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Home', ['route' => 'homepage']);

        $menu->addChild('About Me', ['route' => 'user_edit']);

        $menu['About Me']->addChild('Edit profile', ['route' => 'user_edit']);

        return $menu;
    }
}
