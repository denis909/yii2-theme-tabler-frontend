<?php

use frontend\theme\Assets;
use frontend\theme\ShoppingCart;
use frontend\theme\ShoppingCartItem;
use frontend\theme\Card;
use frontend\theme\UserMenu;
use frontend\theme\AccountMenu;
use frontend\theme\MainMenu;
use frontend\theme\FooterMenu;
use frontend\theme\Layout;

$assets = Assets::register($this);

?>
<?php $layout = Layout::begin($layoutOptions);?>
<div class="page">
  <div class="flex-fill">
    <div class="header py-4">
      <div class="container">
        <div class="d-flex">
          <a class="header-brand" href="./index.html">
            <img src="<?= $assets->baseUrl;?>/demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
          </a>
          <div class="d-flex order-lg-2 ml-auto">
            <?php
            /*
            <div class="nav-item d-none d-md-flex">
              <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
            </div>
            */
            ?>

            <?= frontend\theme\ShoppingCart::widget($shoppingCart);?>

            <div class="dropdown">
              <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                <span class="avatar" style="background-image: url(<?= $assets->baseUrl;?>/demo/faces/female/25.jpg)"></span>
                <span class="ml-2 d-none d-lg-block">
                  <span class="text-default">Jane Pearson</span>
                  <small class="text-muted d-block mt-1">Administrator</small>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                <?php if($userMenu):?>
                  <?= UserMenu::widget(['items' => $userMenu]);?>
                  <div class="dropdown-divider"></div>
                <?php endif;?>
                <?= AccountMenu::widget(['items' => $accountMenu]);?>
              </div>
            </div>
          </div>
          <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
            <span class="header-toggler-icon"></span>
          </a>
        </div>
      </div>
    </div>
    <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
      <div class="container">
        <div class="row align-items-center">
          <!--
          <div class="col-lg-3 ml-auto">
            <form class="input-icon my-3 my-lg-0">
              <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
              <div class="input-icon-addon">
                <i class="fe fe-search"></i>
              </div>
            </form>
          </div>
          -->
          <div class="col-lg order-lg-first">
            <?= MainMenu::widget(['items' => $mainMenu]);?>
          </div>
        </div>
      </div>
    </div>
    <div class="my-3 my-md-5">
      <div class="container">
        <?= Card::widget([
          'enabled' => $enableCard,
          'title' => $cardTitle,
          'content' => $content,
          'menu' => $actionMenu
        ]);?>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">    
        <div class="col-auto ml-lg-auto">
          <div class="row align-items-center">
            <div class="col-auto">
              <?= FooterMenu::widget(['items' => $footerMenu]);?>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-auto mt-3 mt-lg-0">
          <?= $copyright;?> Theme by <a href="https://codecalm.net" target="_blank">codecalm.net</a>
        </div>
      </div>
    </div>
  </footer>
</div>
<?php $layout::end();?>