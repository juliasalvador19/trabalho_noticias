<?php
  session_start(); 

  class Form {
    function __toString() {

      if (!isset($_SESSION['noticias'])) {
        $_SESSION['noticias'] = array();
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titulo = $_POST['titulo']; 
        $conteudo = $_POST['conteudo'];
        $imagem = $_POST['imagem'];
        $data = $_POST['data'];
    
        $nova_noticia = array(
            'titulo' => $titulo,
            'conteudo' => $conteudo,
            'imagem' => $imagem,
            'data' => $data
        );
    
        array_push($_SESSION['noticias'], $nova_noticia);
        header('Location: '.$_SERVER['PHP_SELF'].'?sucesso=1');
        exit;
      }

      if (isset($_SESSION['noticias']) && !empty($_SESSION['noticias'])) {
        $cadastrar = '';

        foreach ($_SESSION['noticias'] as $noticia) {
          $cadastrar .= '<h2>'. $noticia['titulo'] .'</h2>
                         <p>'. $noticia['conteudo'].'</p>
                         <p><img src= '. $noticia['imagem'].' alt='.$noticia['imagem'].' ></p>
                         <p>'. $noticia['data'].'</p>
                         <hr>';
        }
      } else {

        $cadastrar = '<p>Não há notícias cadastradas!</p>';
      }

      $cadastrar .= "<h1>Cadastro de Notícias</h1>
                    <form method='post' action=''>
                      <label for='titulo'>Título:</label><br>
                      <input type='text' id='titulo' name='titulo' placeholder='Informe o título...' autocomplete='off' required><br><br>

                      <label for='conteudo'>Conteúdo:</label><br>
                      <textarea id='conteudo' name='conteudo' placeholder='Informe o conteúdo...' autocomplete='off' required></textarea><br><br>

                      <label for='imagem'>Imagem:</label><br>
                      <input type='text' id='imagem' name='imagem' placeholder='Informe a URL da imagem...' autocomplete='off' required><br><br>

                      <label for='data'>Data:</label><br>
                      <input type='date' id='data' name='data' autocomplete='off' required><br><br>

                      <input type='submit' value='Publicar'>
                    </form>";

      return $cadastrar;        
    }
  }
?>