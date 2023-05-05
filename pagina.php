
<!DOCTYPE html>
<html lang="pt">



<body>
<?php include "heater.php"; ?>

  <section class="cabecalhoverde">
    <div class="limite">
      <div class="container_session">
        <figure class="">
          <img src="Imagens/Grupo 12.png" width="239,49px" height="50px">
        </figure>
        <figure class="">
          <img src="Imagens/Grupo 674.png" width="201,73px" height="61,38px">
        </figure>
      </div>
    </div>
  </section>
  <!-- fim da primeira section -->

  <!-- Começo da segunda section -->

  <section class="segundaSection">
    <div class="limite">
      <div class="titulo">
        <h2>
          Faça seu cadastro que <br>
          entraremos em contato com você
        </h2>
      </div>
      <!-- primeiro row -->
      <div class="row">
        <div class="col-lg-6 col-sm-12 d-flex justify-content-center">
          <figure class = "wrapperimg">
            <img src="imagens/shutterstock_1283110903.png" width ="100%";>
          </figure>
        </div>
        <div class="col-lg-6 col-md-12">
          <form action="">
            <fieldset class ="my-2">
              <div class="inputBox">
                <input id="email" name="email" type="email" placeholder="E-mail" class="inputUser" required>
              </div>
              <div class="inputBox">
                <input id="nome" name="nome" type="text" placeholder="Nome" class="inputUser" required>
              </div>
              <div class="inputBox">
                <input id="telefone" name="telefone" type="tel" placeholder="Senha" class="inputUser" required>
              </div>
              <div class="checkk1">
                <input id="concordo" name="check" type="checkbox" value="Concordo que li e aceito os termos e condições de uso descritos nesta Política de Privacidade.Eu concordo em receber comunicações e ofertas personalizadas de acordo com meus interesses" required>
                <label for="concordo" class="labellInput">Eu concordo em receber comunicações e ofertas personalizadas de acordo com meus interesses.</label>
              </div>
              <div class="checkk2">
                <input id="termos" name="check" type="checkbox" value="Concordo que li e aceito os termos e condições de uso descritos nesta Política de Privacidade." required>
                <label for="termos" class="labellInput">Concordo que li e aceito os termos e condições de uso descritos nesta <a href="#">Política de Privacidade.</a></label>
              </div>
              <br>
              <div class="botao1 d-flex justify-content-center">
                <button class="botao">Cadastrar</button>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
  </section>

  <!-- Fim da segunda section -->

  <!-- Começo da terceira section -->

  <section class="terceiraSection">
    <div class="limite">
      <div class="titulo2">
        <h2>
          Galeria de fotos
        </h2>
      </div>
      <div class="owl-carousel owl-theme owl-drag">
        <div><img src="imagens/Componente61.png"></div>
        <div><img src="imagens/Componente71.png"></div>
        <div><img src="imagens/Componente81.png"></div>
      </div>
      
      <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel({
            margin: 30,
            nav: true,
            autoplay: false,
            dots: true,
            loop: true,
            responsive: {
            0: {
              items: 1
            },
            768: {
              items: 2
            },
            1000: {
              items: 3
            }
            }
          });
          });
      </script>
  </section>


  
  <!-- Fim da terceira section -->
  
  <!-- Começo da quarta section -->
  <section class="quartaSection">
    <div class="limite">
      <div class="titulo3">
        <h2>Diferenciais</h2>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-lg-4 col-md-6 col-sm-12">
            <div class="Box">
              <img src="imagens/Grupo 681.png" width="60px" height="60px" class="img22">
            </div>
            <div class="titulo4">
              <h3>
                Central
              </h3>
            </div>
            <div class="paragrafo">
              <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui felis, commodo non elit ut, fermentum efficitur erat. </h6>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="Box">
            <img src="imagens/Grupo 680.png" width="51px" height="60px" class="img22">
          </div>
          <div class="titulo4">
            <h3>
              Proximidade
            </h3>
          </div>
          <div class="paragrafo">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui felis, commodo non elit ut, fermentum efficitur erat. </h6>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="Box">
            <img src="imagens/Grupo 682.png" width="59px" height="60px" class="img22">
          </div>
          <div class="titulo4">
            <h3>
              Segurança
            </h3>
          </div>
          <div class="paragrafo">
            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui felis, commodo non elit ut, fermentum efficitur erat. </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Começo da quinta section -->
  <section class="quintaSection">
    <div class="limite">
      <div class="titulo5">
        <h4>Status da obra</h4>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
            <div class='Box2'>
              <div class="Box3">
                <figure class="imagemPequena">
                  <img src="imagens/Layer 2.png" width="63px" height="50px">
                </figure>
                <figcaption class="strongU">
                  <strong>100%</strong>
                </figcaption>
                <div class="textoDebaixodastrong">
                  <h4 class="debaixoDastrong">
                    Infraestrutura
                  </h4>
               </div>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
          <div class="imagemBox1">
            <div class="Box2">
              <div class="Box4">
                <figure class="imagemPequena">
                  <img src="imagens/Grupo 664.png" width="50px" height="50px">
                </figure>
                <figcaption class="strongU">
                  <strong>92%</strong>
                </figcaption>
                <div class="textoDebaixodastrong">
                  <h4 class="debaixoDastrong">
                    Áreas comuns
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 py-3">
          <div class="Box2">
            <div class="Box5">
              <figure class="imagemPequena">
                <img src="imagens/Caminho 678.png" width="50px" height="50px">
              </figure>
              <div class="strongU">
                <strong>68%</strong>
              </div>
              <div class="textoDebaixodastrong">
                <h4 class="debaixoDastrong">
                  Praças e paisagismo
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Começo da setima mapa section -->
  <section class="setimaSection">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.3103892145717!2d-38.48276620329473!3d-3.7575140808173595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c7487c96b19833%3A0xb305e9eee2106b50!2sBeing%20Marketing!5e0!3m2!1spt-BR!2sbr!4v1633723789662!5m2!1spt-BR!2sbr" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <div class="Box6">
      <div class="tituloBox6">
        <div class="localizacaodiv">
          <h5 class="localizacao">Localização</h5>
        </div>
        <div class="texto1div">
          <p class="texto1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dui felis, commodo non elit ut, fermentum efficitur erat. </p>
        </div>
      </div>
    </div>
  </section>
  <?php include "footer.php"; ?>
</body>
</html>
