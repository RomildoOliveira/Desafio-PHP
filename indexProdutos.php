<?php
// Atribui o conteúdo do arquivo para variável $produto
$produtos = file_get_contents('produto.json');
 
// Decodifica o formato JSON e retorna um Objeto
$json = json_decode($produtos);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Desafio</title>
</head>
<body>

<header> 

<!-- Navbar opcional, ainda em contrunção -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Adicionar Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Usuário</a>
      </li>
    </ul>
  </div>
</nav>

</header>   


<div class="container my-5">
    <div class="row">
    <div class=" col">
    <h1>Lista de produtos</h1>
    </div>
    </div>
    </div>
    <table class = "table container">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Preço</th>    
                <th>Ações</th>             
            </tr>       
        </thead>
        <tbody>
            <?php foreach($produtos as $produto) : ?>
                <tr>
                    <td><?php echo $produto[0] ?></td>
                    <td><?php echo $produto[1] ?></td>
                    <td><?php echo $produto[2] ?></td>
 
                    <td>
                        <a href="showProduto.php">Mostrar Produto</a>
                    </td>
                </tr>

            <?php endforeach;?>
        </tbody>
    </table>




<!-- Footer -->
<footer class="footer font-small bg-secondary pt-3 fixed-bottom">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-light">

        <!-- Content -->
        <h5 class="text-uppercase">Desafio</h5>
        <p>Tentando fazer o desafio.</p>

  </div>


  <!-- Copyright -->
  <div class="footer-copyright text-center py-2">© 2020 Copyright
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
