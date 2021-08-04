<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LifeBook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Settings
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="user/account.php">Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php" tabindex="-1" aria-disabled="true">Logout</a>
        </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-info" href="#" tabindex="-1" aria-disabled="true"><?php echo $user['first_name'] ?></a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>