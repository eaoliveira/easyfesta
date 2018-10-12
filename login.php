<!DOCTYPE html>
<?php include("header.php"); ?>
<div class="login">
<div class="row">
<div class="col s2 m5 lg5"></div>
<div class="card-panel caixalogin transparent col s10 m6 lg6">
  <div class="row">
  <div class="col lg12 s12 m12 center"><p class="titulocaixa">Já é cadastrado? <br>Entre com suas informações de login e senha</p></div>
  </div>
  <div class="row">
    <div class="col s1 m1 lg1"></div>
    <form class="col s12 m12 lg12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="email " id="login" type="text" class="validate">
          <label for="login">Login</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
        <input placeholder="" id="senha" type="text" class="validate">
          <label for="senha">Senha</label>        </div>
      </div>
      <div class="row">
        <div class="input-field col s6"> <a href="" class="botao1 animatable fadeInDown">Login</a> </div>
        <div class="input-field col s6"> <a href="cadastro.php" class="botao1 animatable fadeInDown">Cadastrar</a> </div>

      </div>
    </form>
  </div>
  </div>
  </div>
</div>
<?php include("footer.php"); ?>