<html>
  <head>
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/plantilla/Css/pdf.css">
  <?php header('Content-Type: text/html; charset=UTF-8'); ?>
  </head>

<body>

  <header>
      <table>
          <tr>
              <td id="header_logo">
                 
              </td>
              <td id="header_texto">
                  <div>CENTRO NACIONAL DE TUTORIALES MÉXICO Y ALREDEDORES</div>
                  <div>Consejo de alguna institución para el desarrollox</div>
                  <div>"La mejor de mí para ustedes"</div>
              </td>

              
          </tr>
      </table>
  </header>
  <footer>
      <div id="footer_texto">Aquí habrá algo relevante para el footer del documento, tiene border top 3px, fontsize de 9px y texto centrado</div>
  </footer>

  <?php for ($i=0; $i < $numero; $i++) {
    echo $i . "<br>";
  } ?>


  </body>
</html>