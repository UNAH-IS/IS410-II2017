<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png" />
    <title>9GAG en español - Diviértete</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">9GAG</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2>Memes Registrados</h2>
          <p>
            <div class="container-fluid">
              <div class="row" id="div-memes">
                <!--
                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                  <div class="well">
                    <strong>Usuario 1</strong>
                    <p>Esta es la descripción del meme.</p>
                    <img src="img/memes/meme_01.jpg" class="img-responsive">
                    <span class="badge">Puntos: 12345</span>
                    <span class="badge">Comentarios: 2</span>
                    <p>
                      <hr>
                      <h4>Comentarios:</h4>
                      <div>
                        <b>Usuario x</b>
                        <p class="commentario">Este es el comentario</p>  
                      </div>
                      <div>
                        <b>Usuario x</b>
                        <p  class="commentario">Este es el comentario</p>  
                      </div>
                    </p>
                  </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                  <div class="well">
                    <strong>Usuario 2</strong>
                    <p>Esta es la descripción del meme.</p>
                    <img src="img/memes/meme_02.jpg" class="img-responsive">
                    <span class="badge">Puntos: 12345</span>
                    <span class="badge">Comentarios: 2</span>
                    <p>
                      <hr>
                      <h4>Comentarios:</h4>
                      <div>
                        <strong>Usuario x</strong>
                        <p class="commentario">Este es el comentario</p>  
                      </div>
                      <div>
                        <strong>Usuario x</strong>
                        <p  class="commentario">Este es el comentario</p>  
                      </div>
                    </p>
                  </div>
                </div>

                <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
                  <div class="well">
                    <strong>Usuario 3</strong>
                    <p>Esta es la descripción del memedfgdfgdfgdfgdf.</p>
                    <img src="img/memes/meme_08.jpg" class="img-responsive">
                    <span class="badge">Puntos: 6666</span>
                    <span class="badge">Comentarios: 6666</span>
                    <p>
                      <hr>
                      <h4>Comentarios:</h4>
                      <div>
                        <b>Usuario x</b>
                        <p class="commentario">Este es el comentario</p>  
                      </div>
                      <div>
                        <b>Usuario x</b>
                        <p  class="commentario">Este es el comentario</p>  
                      </div>
                    </p>
                  </div>
                </div>
                -->
              </div>
            </div>
          </p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2>Registrar un meme</h2>
          <form method="GET" action="procesar.php">
            <table>
              <tr>
                <td>Descripcion Meme: <input id="txt-descripcion" name="txt-descripcion" type="text" class="form-control"></td>
              </tr>
              <tr>
                  <td>
                    <br>Usuario que registra el meme:<br>
                    <label>Goku<input id="rbt-goku" type="radio" value="Goku" name="rbt-foto"><img src="img/goku.jpg" class="img-responsive img-circle"></label>
                    <label>Gohan<input id="rbt-gohan" type="radio" value="Gohan" name="rbt-foto"><img src="img/gohan.jpg" class="img-responsive img-circle"></label>
                    <label>Trunks<input id="rbt-trunks" type="radio" value="Trunks" name="rbt-foto"><img src="img/trunks.jpg" class="img-responsive img-circle"></label>
                    <label>Vegeta<input id="rbt-vegeta" type="radio" value="Vegeta" name="rbt-foto"><img src="img/vegeta.jpg" class="img-responsive img-circle"></label>
                  </td>
                </tr>
                <tr>
                  <td>
                    Puntuación:
                    <input id="txt-puntuacion" name="txt-puntuacion" type="text" class="form-control">
                  </td>
                </tr>
                <tr>
                  <td>
                    Imagenes disponibles:
                    <select id="slc-imagen" name="slc-imagen" class="form-control">
                      <option>Seleccione una imagen</option>
                      <option value="img/memes/meme_01.jpg">Meme 1</option>
                      <option value="img/memes/meme_02.jpg">Meme 2</option>
                      <option value="img/memes/meme_03.jpg">Meme 3</option>
                      <option value="img/memes/meme_04.jpg">Meme 4</option>
                      <option value="img/memes/meme_05.jpg">Meme 5</option>
                      <option value="img/memes/meme_06.jpg">Meme 6</option>
                      <option value="img/memes/meme_07.jpg">Meme 7</option>
                      <option value="img/memes/meme_08.jpg">Meme 8</option>
                      <option value="img/memes/meme_09.jpg">Meme 9</option>
                      <option value="img/memes/meme_10.jpg">Meme 10</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>
                    <br>Comentarios:
                    <input id="txt-usuario1" type="text" name="txt-usuario1" class="form-control" placeholder="Usuario 1"><input type="text" id="txt-comentario1" name="txt-comentario1" placeholder="Comentario 1" class="form-control"><br>
                    <input id="txt-usuario2" type="text" name="txt-usuario2" class="form-control" placeholder="Usuario 2"><input type="text" id="txt-comentario2" name="txt-comentario2" placeholder="Comentario 2" class="form-control"><br>
                    <input id="txt-usuario3" type="text" name="txt-usuario3" class="form-control" placeholder="Usuario 3"><input type="text" id="txt-comentario3" name="txt-comentario3" placeholder="Comentario 3" class="form-control"><br>
                    <input id="txt-usuario4" type="text" name="txt-usuario4" class="form-control" placeholder="Usuario 4"><input type="text" id="txt-comentario4" name="txt-comentario4" placeholder="Comentario 4" class="form-control"><br>
                    <input id="txt-usuario5" type="text" name="txt-usuario5" class="form-control" placeholder="Usuario 5"><input type="text" id="txt-comentario5" name="txt-comentario5" placeholder="Comentario 5" class="form-control"><br>
                  </td>
                </tr>
                <tr>
                  <td>
                    <br><br>
                    <!--Este boton enviara la informacion de forma sincrona, recargara la página completamente-->
                    <input type="submit" name="btn-registrar" value="Guardar Meme" class="btn btn-primary">
                    <input type="button" name="btn-registrar-ajax" value="Guardar Meme" class="btn btn-primary" onclick="guardarRegistro();">
                    <div id="div-respuesta"></div>
                  </td>
                </tr>
              </table>            
          </form>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/controlador.js"></script>
  </body>
</html>
