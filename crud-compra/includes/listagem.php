<?php

  $mensagem = '';
  if(isset($_GET['status'])){
    switch ($_GET['status']) {
      case 'success':
        
      $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
      break;

      case 'error':
      $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
      break;
    }
  }

  $resultados = '';
  foreach($vagas as $vaga){
    $resultados .= '<tr>
          <td>'.$vaga->id.'</td>
             <td>'.$vaga->titulo.'</td>
             <td>'.$vaga->descricao.'</td>
             <td>'.($vaga->ativo == 's' ? 'Estoque' : 'Loja').'</td>
             <td>'.date('d/m/Y à\s H:i:s',strtotime($vaga->data)).'</td>
                <td>
               <a href="editar.php?id='.$vaga->id.'">
               <button type="button" class="btn btn-primary">Editar</button>
                        </a>
              <a href="excluir.php?id='.$vaga->id.'">
              <button type="button" class="btn btn-danger">Excluir</button>
              </a>
              </td>
              </tr>';
  }

  $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                            Nenhum produto foi vendido!
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

  <section>
          <a href="http://localhost/site/At.%20Pont%20Fr.html">
              <button class="btn btn-warning">HOME</button>
          </a> 
          <a href ="http://localhost/crud-compra/relatorio.php">
          <button type="button" class="btn btn-light">Relatório
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
          <path fill-rule="evenodd" d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z"/>
          </svg>
          </button>
          </a>
          <br><br>
    <a href="cadastrar.php">
      <button class="btn btn-success">Vender Produto</button>
    </a>
  </section>
  
  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>ROUPA</th>
            <th>PREÇO</th>
            <th>SITUAÇÃO</th>
            <th>DATA DE CADASTRO </th>
            <th>AÇÕES</th>
          </tr>
        </thead>
        <tbody>
            <?=$resultados?>
        </tbody>
    </table>

  </section>


</main>