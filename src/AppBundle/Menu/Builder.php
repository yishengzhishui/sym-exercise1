<?php
// src/AppBundle/Menu/Builder.php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function navMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        //beautify the navbar
        $menu->setChildrenAttribute('class', 'nav navbar-nav');

        $menu->addChild('Home', [
            'route' => 'homepage',
            'label' => '首页'
        ]);

   // create another menu item
        $menu->addChild('news', [
            'route' => 'news_index',
            'label' => '新闻'
        ]);


        return $menu;
    }
}