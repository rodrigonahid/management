<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!--Fontawesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Sign up</title>
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card-group">
                    <div class="card p-4">
                        <h2 class="text-center text-primary">Entrar</h1>
                        <hr>
                        <form action="#" method="post" >
                            <div id="signin-input">
                                <div class="input-group">
                                    <span class="input-group-text"><i class="far fa-envelope fa-lg"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-key fa-lg"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Senha" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="input-group d-flex">
                                    <div class="flex-fill">
                                        <label>
                                            <input type="checkbox" class="form-check-input" value="">
                                        Lembre de mim
                                        </label>
                                    </div> 
                                    <div>
                                        <a href="forgotpwd.php">Esqueceu a senha?</a>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <input id="signin-submit" type="submit" name="signin-submit" value="Log In" class="btn btn-primary">
                                    
                                </div>
                                <div>
                                    <a href="signup.php">Ou registre-se</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
  </body>
</html>