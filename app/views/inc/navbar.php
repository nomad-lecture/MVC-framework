<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
 <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
              </li>
          </ul>

          <ul class="navbar-nav ml-auto ">
              <?php if (isset($_SESSION['user_id'])): ?>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Welcome <?php echo $_SESSION['user_name']; ?></a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout </a>
                  </li>
              <?php else: ?>
                  <li class="nav-item ">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
                  </li>
              <?php endif; ?>

          </ul>
    </div>

  </div>
</nav>
