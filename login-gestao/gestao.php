<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
    
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<link rel="stylesheet" href="gestao.css">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
        <div class="jumbotron jumbotron-fluid bg-success h-25">
          <div class="d-flex justify-content-end">
            <a href="../index.php" class="btn btn-primary">Voltar</a>
          </div>
              <h1 class="mt-4 text-center text-light" >Gestão</h1>
        </div>
				<div class="d-flex justify-content-center">
					<table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ação</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Edson Emanoel</td>
                            <td>Edson@gmail.com</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit alterar"></i></a>    
                                <a href="#" data-toggle="modal" data-target="#excluir"><i class="far fa-trash-alt excluir"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Edson Emanoel</td>
                            <td>Edson@gmail.com</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit alterar"></i></a>    
                                <a href="#" data-toggle="modal" data-target="#excluir"><i class="far fa-trash-alt excluir"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Edson Emanoel</td>
                            <td>Edson@gmail.com</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit alterar"></i></a>    
                                <a href="#" data-toggle="modal" data-target="#excluir"><i class="far fa-trash-alt excluir"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Edson Emanoel</td>
                            <td>Edson@gmail.com</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit alterar"></i></a>    
                                <a href="#" data-toggle="modal" data-target="#excluir"><i class="far fa-trash-alt excluir"></i></a>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Edson Emanoel</td>
                            <td>Edson@gmail.com</td>
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i class="far fa-edit alterar"></i></a>    
                                <a href="#" data-toggle="modal" data-target="#excluir"><i class="far fa-trash-alt excluir"></i></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
				</div>
                <div class="d-flex justify-content-center mt-5">
                    <nav>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                          <li class="page-item"><a class="page-link" href="#">5</a></li>
                          <li class="page-item"><a class="page-link" href="#">10</a></li>
                          <li class="page-item"><a class="page-link" href="#">15</a></li>
                          <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
                        </ul>
                    </nav>
                </div>
			</div>
		</div>
	</div>
  <!-- Modal Update-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Atualizar Registro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control input_user" placeholder="Nome Completo">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control input_user" placeholder="E-mail">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="" class="form-control input_pass" value="" placeholder="***********">
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="" class="form-control input_pass" value="" placeholder="***********">
                </div>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <a href="login.html">
                        <button
                        type="button"
                        name="button"
                        class="btn btn-success login_btn mr-2"
                        data-dismiss="modal"
                        >Salvar</button>
                    </a>
                    <a href="login.html">
                        <button
                        type="button"
                        name="button"
                        class="btn btn-danger login_btn mr-2"
                        data-dismiss="modal"
                        >Cancelar</button>
                    </a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div> <!-- Fim Modal Update-->

  <!-- Modal Excluir-->
  <div class="modal fade" id="excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <span class="alert alert-danger">Deseja Realmente apagar!</span>
            <button type="button" class="btn btn-danger"data-dismiss="modal"><i class="far fa-trash-alt"></i></button>
            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="far fa-arrow-alt-circle-left"></i></button>
        </div>
      </div>
    </div>
  </div>


      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
