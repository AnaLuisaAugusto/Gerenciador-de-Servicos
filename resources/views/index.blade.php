<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Serviços</title>

        @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'                
        ])

        <style>

            form{
                background-color: whitesmoke;
                width: 50%;
                height: 700px;
                margin-bottom: 70px;               
            }

        </style>

    </head>
    <body>

        <nav class="navbar bg-dark" data-bs-theme="dark" style="color:white;">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Sistema Web</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Consultar</a>
                            </li>        
                        </ul>
                    </div>

                </div>
            </nav>
            
        </nav>

        <br>
        <br>
        <br>

        <center><form class="row g-5">
            <div class="col-6">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input type="email" class="form-control" id="insira seu nome">
            </div>            
            <div class="col-6">
                <label for="inputAddress" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="format" placeholder="(xx) xxxx-xxxx)">
            </div>
            <div class="col-6">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="format" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-6">
                <label for="inputState" class="form-label">Origem:</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>celular</option>
                    <option>celular</option>
                </select>
            </div>
          
            
            <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>  
    </body>
</html>