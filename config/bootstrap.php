<?php

require dirname(dirname(__DIR__)) . '/yii2-fake-bootstrap4/BootstrapAsset.php';
require dirname(dirname(__DIR__)) . '/yii2-fake-bootstrap4/BootstrapPluginAsset.php';

Yii::$container->setDefinitions([
    'frontend\theme\AccountMenu' => 'denis909\themes\tabler\AccountMenu',
    'frontend\theme\ActiveForm' => 'denis909\themes\tabler\ActiveForm',
    'frontend\theme\Assets' => 'denis909\themes\tabler\Assets',
    'frontend\theme\Card' => 'denis909\themes\tabler\Card',
    'frontend\theme\CardMenu' => 'denis909\themes\tabler\CardMenu',
    'frontend\theme\DetailView' => 'denis909\themes\tabler\DetailView',
    'frontend\theme\FooterMenu' => 'denis909\themes\tabler\FooterMenu',
    'frontend\theme\GridView' => 'denis909\themes\tabler\GridView',
    'frontend\theme\Layout' => 'denis909\themes\tabler\Layout',
    'frontend\theme\ListView' => 'denis909\themes\tabler\ListView',
    'frontend\theme\MainLayout' => 'denis909\themes\tabler\MainLayout',    
    'frontend\theme\MainMenu' => 'denis909\themes\tabler\MainMenu',
    'frontend\theme\ShoppingCart' => 'denis909\themes\tabler\ShoppingCart',
    'frontend\theme\ShoppingCartItem' => 'denis909\themes\tabler\ShoppingCartItem',
    'frontend\theme\ShoppingCartMenu' => 'denis909\themes\tabler\ShoppingCartMenu',
    'frontend\theme\UserMenu' => 'denis909\themes\tabler\UserMenu'
]);