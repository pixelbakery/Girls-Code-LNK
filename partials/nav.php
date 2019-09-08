<nav class="navbar navbar-expand-lg  navbar-light my-0 py-0">
  <a class="navbar-brand" href="#">Tale of Two Designers</a>
  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-collapse collapse" id="navbarsExample09" style="">
    <ul class="navbar-nav ml-auto">
      <li class="<?php echo isPage("story",$current); ?>">
        <a class="nav-link  " href="/index.php">The Story </a>
      </li>
      <li class="<?php echo isPage("about",$current); ?>">
        <a class="nav-link <?php echo isPage("about", $current); ?>" href="#">About </a>
      </li>
      <li class="nav-item  <?php echo isPage("process",$current); ?>">
        <a class="nav-link" href="#">Process </a>
      </li>
    </ul>
  </div>
</nav>
