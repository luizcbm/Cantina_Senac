<nav class="bg hover-circulo">
  <h1>Olá <?php echo $_SESSION['nome'] ?>!!</h1>
  <div class="image">
    <img src="assets/images/Design sem nome.png">
  </div>

  <style>
    /* Style The Dropdown Button */
    .dropbtn {
      padding: 16px;
      font-size: 140%;
      border: none;
      cursor: pointer;
      font-weight: bold;
      background-color: red;
      color: white;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fa1414;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {
      background-color: red
    }

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {
      background-color: red;
    }
  </style>
  <div><a href="inicio.php" title="Inicio">Inicio</a>
    <a href="contato.php" title="Contato">Contato</a>
    <a href="login.php" title="Login">Login</a>
    <a href="sobre.php" title="Sobre">Sobre</a>
    <div class="dropdown">
      <button class="dropbtn">Cardapio</button>

      <div class="dropdown-content">
        <a href="refri.html">Bebidas</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
  </div>
</nav>