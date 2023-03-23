<header style="position: sticky; left: 0; top: 0;">
  <div class="bs-component">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="margin-bottom: 1%;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Покупки</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="../index.php">Home
                <span class="visually-hidden">(current)</span>
              </a>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Покупки</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../purchase_add.php/?type_id=1">Добавить</a>
                <a class="dropdown-item" href="../purchases_list.php/?type_id=1">Список</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">отчет</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Платежи</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../purchase_add.php/?type_id=1">Добавить</a>
                <a class="dropdown-item" href="../purchases_list.php/?type_id=1">Список</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">отчет</a>
              </div>
            </li>
          </ul>
          <form class="d-flex">
            <a href="./logout.php" class="nav-link active">выход</a>
            <!--input class="form-control me-sm-2" type="search" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button-->
          </form>
        </div>
      </div>
    </nav>
  </div>
</header>
