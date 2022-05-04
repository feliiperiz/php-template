<!DOCTYPE html>
<html lang="en">

<?php
    require_once 'header.php';
?>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form>
            <h1>Formulário de Login</h1>
            <div>
              <input type="text" class="form-control" placeholder="Usuário" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Senha" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Login</a>
              <a class="reset_pass" href="#">Esqueceu sua senha?</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Novo no Site?
                <a href="#signup" class="to_register"> Criar Conta </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 todos os direitos reservados. Gentelella Alela! é um template Bootstrap 3. Privacidade e termos.</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Criar conta</h1>
            <div>
              <input type="text" class="form-control" placeholder="Usuário" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Senha" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Enviar</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Já é um usuário?
                <a href="#signin" class="to_register"> Login </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 todos os direitos reservados. Gentelella Alela! é um template Bootstrap 3. Privacidade e termos.</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>