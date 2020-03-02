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

<nav class="navbar navbar-expand-lg navbar-light bg-secondary ">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Cadastro Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>

</header>   

<main>

<section class="">
<div class="col-md-6 offset-md-3 "> 
<form class="container bg-warning mt-5 col-md-6 offset-md-3">
    <div class="form-group pt-3">
    <label for="nomeProduto ">Nome do Produto:</label>
    <input type="text" class="form-control col-sm-12 " id="nomeProduto" placeholder="Digite o nome do Produto" required>
  </div>
  <div class="form-group ">
    <label for="descricao">Descrição:</label>
    <textarea class="form-control col-sm-12" id="descricao" rows="4" placeholder="Descrição"></textarea>
  </div>
  <div class="form-group">
    <label for="preco">Preço:</label>
    <input type="number" class="form-control col-sm-12" id="preco"  placeholder="Digite o Preço">
  </div>

  <img src="..." class="card-img-top" alt="...">

  <div class="form-group">
    <label for="fotoPorduto">Insira uma foto</label>
    <input type="file" class="form-control-file" id="fotoProduto" required>
  </div>

    

  <div class="pb-4">
  <button type="submit" class="btn btn-primary">Editar</button>
  </div>  
</form>
</div>
</section>

</main>





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
