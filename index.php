<!DOCTYPE html>
<?php include("header.php"); ?>

  <div id="home" class="home">
    <video autoplay muted loop id="myVideo">
      <source src="video/video1.mp4" type="video/mp4">
    </video>
    <div class="content">
      <div class="row">
        <div class="col s12">
          <!-- <center> -->
          <center>
            <h1>Quer encontrar <br>um local para sua festa?</h1>
          </center>
        </div>
        <div class="col s2"></div>
        <form class="col s8">
          <div class="input-field col s12">
            <i class="material-icons prefix">search</i>
            <input placeholder="exemplo: casamento em são paulo" id="pesquisar" type="text">
          </div>
          <!-- </center> -->
        </form>
      </div>

    </div>
  </div>
  <div class="melhores">
    <h2>Os melhores lugares em São Paulo para:</h2>
    <div class="owl-carousel">
      <div class="col s12 m6 lg4">
        <div class="card">
          <div class="card-image">
            <img src="images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l4">
        <div class="card">
          <div class="card-image">
            <img src="images/sample-1.jpg">
            <span class="card-title">Card Title</span>
          </div>
          <div class="card-content">
            <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
          </div>
          <div class="card-action">
            <a href="#">This is a link</a>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="como-funciona">
    <div class="row">
        <div class="col s1 m1 l1"></div>
      <div class="col s12 m6 l6">
        <div class="animatable moveUp"> <img class="imagem1" src="images/festa1.jpg" alt=""></div> 
      </div>
      <div class="col s12 m6 l5">
        <div class="animatable fadeInDown explicacao">
          <h1>Como Funciona?</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio incidunt autem doloremque aperiam
            consequatur inventore harum earum, eum saepe, repellendus facere explicabo iste voluptate perferendis eius
            esse aspernatur quod temporibus!</p>
            <a href="" class="botao1 animatable fadeInDown">Mostrar</a> 

        </div>
      </div>
    </div>
    <div class="row passos">
      <div class="col s12 m4 l4">
        <div class="card-panel transparent">
          <h4 class="animatable bounceIn"><img src="icons/bow-tie.png" alt=""></h4>
          <h4>Pacotes Completos</h4>
          <span class="black-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          <a href="" class="botao1 animatable fadeInDown">Mostrar</a> 
        </span>
        </div>
      </div>
      <div class="col s12 m4 l4">
        <div class="card-panel transparent">
            <h4 class="animatable bounceIn"><img src="icons/bow-tie.png" alt=""></h4>
          <h4>Só o Basico</h4>
          <span class="black-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
          </span>
         <a href="" class="botao1 animatable fadeInDown">Mostrar</a>
        </div>
      </div>
      <div class="col s12 m4 l4">
        <div class="card-panel transparent ">
            <h4 class="animatable bounceIn"><img src="icons/bow-tie.png" alt=""></h4>
          <h4>Diferentões</h4>
          <span class="black-text">I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively. I am similar to what is called a panel in other frameworks.
        </span>
        <a href="" class="botao1 animatable fadeInDown">Mostrar</a>  
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>