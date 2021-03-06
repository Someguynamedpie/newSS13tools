<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
      data-toggle="collapse" data-target="#navbar"
      aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="fa fa-navicon fa-lg" style="color: white;"></i>
      </button>
      <a class="navbar-brand" href="<?php echo APP_URL;?>index.php">
        SS13 Tools
      </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
      <li><a href="<?php echo APP_URL;?>todo.php">Todos</a></li>
        <?php if ($user->legit): ?>
        <li><a href="<?php echo APP_URL;?>info.php">System Info</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-expanded="false">Icon Tools
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="<?php echo APP_URL;?>tools/listDMIs.php">List DMIs</a>
            </li>
            <li>
              <a href="<?php echo APP_URL;?>tools/generateallPNGs.php">
              Generate all mob PNGs</a>
            </li>
          </ul>
        </li>
        <?php endif; ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-expanded="false">Image Generators
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo APP_URL;?>generators/bio.php">Bio</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"
          role="button" aria-expanded="false">Stats
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li>
              <a href="<?php echo APP_URL;?>stats/listRounds.php">
                Round List
              </a>
            </li>
            <li><a href="<?php echo APP_URL;?>stats/deaths.php">Deaths</a></li>
          </ul>
        </li>
        <?php if ($user->valid):?>
          <li>
            <a href="<?php echo APP_URL;?>library/catalog.php">Library</a>
          </li>
        <?php endif;?>
      </ul>
      <?php if($user->legit):?>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><?php echo $user->label;?></a></li>
        </ul>
      <?php endif;?>
    </div><!--/.nav-collapse -->
  </div>
</nav>