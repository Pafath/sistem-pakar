<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
  <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  <ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
        <span class="ml-2 d-none d-lg-inline text-white small">
          <?php
          if (isset($username)) {
            echo $username;
          } else {
            echo "User";
          }
          ?></span>
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <form action="<?= isset($username) ? '/auth/logout' : '/auth/login' ?>" method="POST">
          <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            <?= isset($username) ? "Logout" : "Login" ?>
          </button>
        </form>

      </div>
    </li>
  </ul>
</nav>
