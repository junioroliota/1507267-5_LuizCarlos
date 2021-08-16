<?php
	include('dados\dados.php');
?>
<!DOCTYPE html>
<html lang="pt-brz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.3/css/bulma.min.css">
    <title>Trufas Que Delicia</title>
</head>
<body>

  <section class="selection">
    <div class="container">
      <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pages\pagina1.html">Quem Somos</a></li>
          <li><a href="pages\pagina2.html">Contato</a></li>
          <li><a href="https://www.google.com.br/maps/place/Rua+Frei+Estanislau+Schaette+-+Blumenau,+SC/@-26.9115729,-49.1050946,16z/data=!4m5!3m4!1s0x94df1eb5ebe524c3:0x8ce2e4d130adef5f!8m2!3d-26.9115062!4d-49.1030846?hl=pt-BR%3E"target="_blank">Localização</a></li>
          <li class="is-active"><a href="index.html" aria-current="page"></a></li>
        </ul>
      </nav>

      <div class="container">
        <div class="columns">
          <div class="column" >
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  Trufas Que Delicia
                </p>
              </header>
              <hr>
            </div>

            <?php
              foreach($produtos as $indice => $valor){
            ?>
                <div class="columns">
                  <div class="column is-2">
                      <figure class="image is-148x148">
                        <header>
                          <img class="is-rounded" src="<?php echo $valor; ?>" >
                        </header>
                      </figure>
                  </div>
                  <div class="column is-8">
                    <p class="title is-4" <span class="tag is-dark"><?php echo $indice; ?> </span></p>
                    <p> Deliciosa Trufa Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, nisi. Nam magni, impedit, accusamus quisquam nulla fugit quaerat laudantium est qui odio aut iure soluta dolores architecto magnam corrupti corporis?</p>
                  </div>                                            
                    
                </div>
            <?php
              }
            ?>
          </div>      
        </div>    
      </div>    

     </div>
  </section>
    

  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Autor: Luiz Carlos Oliota Junior R.A. 1507267-5  Curso: SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</strong>
      </p>
    </div>
  </footer>      
    
</body>
</htm