<?php foreach ($smartphones as $smartphone): ?>
  <div class="card">
    <div class="card-img">
      <img src="data:image/png;base64,<?php echo base64_encode($smartphone['imagem']); ?>" alt="">
    </div>
    <div class="card-info">
      <h3 class="mt-2 card-title">
        <?php echo $smartphone['nome']; ?>
      </h3>
      <div class="ratings d-flex justify-content-left mt-1">
        <?php echo exibirEstrelas(4.8); ?>
        <span class="ml-2">
          <?php echo $numeroAvaliacoes; ?> avaliações
        </span>
      </div>
      <div class="price-section d-flex flex-column mt-3 justify-content-left">
        <span class="strike-text">R$
          <?php echo $smartphone['preco_original']; ?>
        </span>
        <h6 class="font-weight-bold price-original">R$
          <?php echo $smartphone['preco_promocional']; ?>
        </h6>
      </div>
      <div class="d-flex flex-column mt-3">

        <button class="btn btn-outline-primary btn-sm add-to-cart-btn" type="button"
          data-product-id="<?php echo $smartphone['id']; ?>">
          Adicionar ao carrinho <i class="fa-solid fa-cart-shopping"></i>
        </button>
      </div>
    </div>
  </div>
<?php endforeach; ?>