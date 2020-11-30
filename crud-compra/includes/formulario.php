<main>

  <section>
    <a href="index.php">
      <button class="btn btn-success">Voltar</button>
    </a>
  </section>
  <h2 class="mt-3">LOJA</h2>

  <form method="post">
    <div class="form-group">
        <label>Roupa</label>
        <input type="text" class="form-control" name = titulo>
    </div>
    <div class="form-group">
        <label>Preço</label>
        <input type="text" class="form-control" name = descricao>
    </div>
    <div class="form-group">
        <label>Situaçã do produto</label>
        <div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="s" checked> Estoque 
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input type="radio" name="ativo" value="n" checked> Loja
            </label>
          </div>
        </div> 
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-success">Enviar</button>
    </div>
  </form>
</main>