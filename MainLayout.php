<?php

namespace denis909\themes\tabler;

use yii\helper\ArrayHelper;

class MainLayout extends \denis909\theme\MainLayout
{

    public $content;

    public $breadcrumbs = [];

    public $mainMenu = [];

    public $actionMenu = [];

    public $footerMenu = [];

    public $copyright = 'Copyright © 2019 - {year} <a href="#">My Company</a>.';

    public $enableCard = true;

    public $cardTitle;

    public $userMenu = [];

    public $accountMenu = [];

    public $shoppingCartItems = [];

    public $defaultShoppingCartOptions = [
        'class' => ShoppingCart::class,
        'menuClass' => ShoppingCartMenu::class
    ];

    public $shoppingCartOptions = [];

    public $defaultShoppingCartItemOptions = ['class' => ShippingCartItem::class];

    public $shoppingCartItemOptions = [];

    public $defaultLayoutOptions = ['assetsClass' => Assets::class];

    public $layoutOptions = [];

    public function run()
    {
        $shoppingCartItems = $this->shoppingCartItems;

        foreach($shoppingCartItems as $key => $item)
        {
            $shoppingCartItems[$key] = array_merge($this->defaultShoppingCartItemOptions, $this->shoppingCartItemOptions, $item);
        }

        $shoppingCartOptions = array_merge($this->defaultShoppingCartOptions, $this->shoppingCartOptions);

        return $this->render('main-layout', [
            'content' => $this->content,
            'breadcrumbs' => $this->breadcrumbs,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'cardTitle' => $this->cardTitle,
            'enableCard' => $this->enableCard,
            'footerMenu' => $this->footerMenu,
            'userMenu' => $this->userMenu,
            'accountMenu' => $this->accountMenu,
            'shoppingCart' => array_merge($shoppingCartOptions, ['items' => $shoppingCartItems]),
            'copyright' => str_replace('{year}', date('Y'), $this->copyright),
            'layoutOptions' => array_merge($this->defaultLayoutOptions, $this->layoutOptions)
        ]);
    }

}