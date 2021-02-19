<?php  $root = $_SERVER['DOCUMENT_ROOT'];
?>

<header class="">
  <nav class="navbar navbar-expand-md ">
    <div class="container-fluid">

     <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler me-2 mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">

        <div class="icon nav-icon-5">
          <span></span>
          <span></span>
          <span></span>
        </div>

    </button>
     <div class="collapse navbar-collapse d-md-flex justify-content-md-end" id="navbarTogglerDemo01">
      <ul class="navbar-nav list-inline">
        <li class=" list-inline-item px-1 nav-item <?php if ($page == "index") echo 'active';?>">
          <a class="nav-link text-decoration-none pb-1" href="../" <?php if ($page == "index") echo ' aria-current="page"';?>>Home</a>
        </li>
        <li class="list-inline-item px-1 nav-item <?php if ($page == "team") echo 'active';?> ">
          <a  class="nav-link text-decoration-none pb-1" href="../team" <?php if ($page == "team") echo ' aria-current="page"';?>>Team</a>
        </li>
        <li class="list-inline-item px-1 nav-item <?php if ($page == "manifesto") echo 'active';?> ">
          <a  class="nav-link text-decoration-none pb-1" href="../manifesto" <?php if ($page == "manifesto") echo ' aria-current="page"';?>>Manifesto</a>
        </li>
        <li class="list-inline-item px-1 nav-item <?php if ($page == "mission") echo 'active';?> ">
          <a  class="nav-link text-decoration-none pb-1" href="../mission" <?php if ($page == "mission") echo ' aria-current="page"';?>>Mission</a>
        </li>
      </ul>
    </div>
      </div>
  </nav>
</header>
