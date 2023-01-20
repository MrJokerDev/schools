<nav class="navbar navbar-expand-lg bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=ROOT?>/home"><?= Auth::getSchool_name() ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/users">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/mentors">Mentors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/students">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/schools">Preseasons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/staff">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/classes">Classes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/tests">Tests</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= Auth::getFirstname() ?> <?= Auth::getLastname() ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/dashboard">Dashboard</a></li>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
          </ul>
        </li>
        </ul>
      </form>
    </div>
  </div>
</nav>