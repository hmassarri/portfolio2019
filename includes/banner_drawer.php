<!-- Top App Bar -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">

  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <span class="mdl-layout__title mdl-layout-spacer"></span>
      <h2>UIX & web</h2>
    </div>
    <div class="mdl-layout__header-row mdl-layout--large-screen-only">
      <div class="mdl-layout-spacer">
        <p class="mdl-layout__subtitle">UI.UX, wireframing & user testing, compositions, UX documentation,</br>
          fluid responsive design, HTML5 & CSS3/SASS, JavaScript & jQuery, PHP</p>
      </div>
    </div>


    <!-- Active Page -->
    <?php
      function pageName() {
        return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
      }
      $currentPage = pageName();
      //echo $currentPage;
    ?>

    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-layout--large-screen-only" style="background-color: #000000 !important;">
      <a href="<?php echo $root.'index.php'; ?>" class="mdl-layout__tab <?php echo $currentPage == 'index.php' ? 'is-active':NULL ?>">Home</a>
      <a href="<?php echo $root.'work.php'; ?>" class="mdl-layout__tab <?php
        if ($currentPage == 'work.php' || $currentPage == 'pykescorner.php') {
          echo 'is-active';
        }
        else { echo NULL; } ?>">Work</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Process</a>
      <a href="#fixed-tab-4" class="mdl-layout__tab">Blog</a>
      <a href="#fixed-tab-5" class="mdl-layout__tab">Contact</a>
    </div>

  </header>

  <div class="mdl-layout__drawer mdl-layout--small-screen-only">
    <div class="mdl-layout-title__background">
      <span class="mdl-layout-title"></span>
    </div>
    <nav class="mdl-navigation">
      <a href="<?php echo $root.'index.php'; ?>" class="mdl-navigation__link mdl--theme-primary is-active">Home</a>
      <a href="<?php echo $root.'work.php'; ?>" class="mdl-navigation__link mdl--theme-primary">Work</a>
      <a href="<?php echo $root.'contact.php'; ?>" class="mdl-navigation__link mdl--theme-primary">Contact</a>
    </nav>
    <div class="mdl-layout-spacer"></div>
  </div>
