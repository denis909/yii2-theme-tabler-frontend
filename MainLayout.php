<?php

namespace denis909\themes\tabler;

class MainLayout extends \yii\base\Widget
{

    public $content;

    public $theme;

    public $breadcrumbs = [];

    public $mainMenu = [];

    public $actionMenu = [];

    public $footerMenu = [];

    public $copyright = 'Copyright © 2019 - {year} <a href="#">My Company</a>.';

    public $enableCard = true;

    public $cardTitle;

    public $userMenu = [];

    public $accountMenu = [];

    public $cart = [];

    public $cartOptions = [];

    public function run()
    {
        return $this->render('main-layout', [
            'theme' => $this->theme,
            'content' => $this->content,
            'breadcrumbs' => $this->breadcrumbs,
            'actionMenu' => $this->actionMenu,
            'mainMenu' => $this->mainMenu,
            'cardTitle' => $this->cardTitle,
            'enableCard' => $this->enableCard,
            'footerMenu' => $this->footerMenu,
            'userMenu' => $this->userMenu,
            'accountMenu' => $this->accountMenu,
            'cart' => $this->cart,
            'cartOptions' => $this->cartOptions,
            'copyright' => str_replace('{year}', date('Y'), $this->copyright)
        ]);
    }

}