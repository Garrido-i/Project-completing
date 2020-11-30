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
                      <td>'.($vaga->ativo == 's' ? 'Masculino' : 'Feminino').'</td>
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
                                                              Nenhum funcionário foi cadastrado!
                                                       </td>
                                                    </tr>';

?>
<main>

  <?=$mensagem?>

          <a href="http://localhost/site/At.%20Pont%20Fr.html">
              <button class="btn btn-warning">HOME</button>
          </a> 
    <br><br>

  <section>
    <a href="cadastrar.php">
      <button class="btn btn-success">Novo funcionário</button>
      
    </a>
    
  </section>

  <section>

    <table class="table bg-light mt-3">
        <thead>
          <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>SEXO</th>
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