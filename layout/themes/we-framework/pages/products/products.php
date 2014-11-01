<div class="jumbotron">
    <h2>Products is Alive!</h2>
</div>

<div class="row marketing">
  <div class="col-lg-4">
  	<h4> Categoria dos Produtos</h4>
  	<ul>
		<li><a href="<?=base_url()?>products/produto-1">Product 1</a></li>    	
		<li><a href="<?=base_url()?>products/produto-2">Product 2</a></li>    	
		<li><a href="<?=base_url()?>products/produto-3">Product 3</a></li>    	
		<li><a href="<?=base_url()?>products/produto-4">Product 4</a></li>    	
    </ul>
  </div>

   <div class="col-lg-8">
   	<h4>Meus produtos!</h4>
    	<?php
		 	// Função para aparecer o conteúdo relacionado
			if(require_page('products'))
			{
				echo '<p>Imagens dos produtos em destaque...</p>';
			}
			require_page('products/produto-1', 'pages/products/produto-1.php');
			require_page('products/produto-2', 'pages/products/produto-2.php');
			require_page('products/produto-3', 'pages/products/produto-3.php');
			require_page('products/produto-4', 'pages/products/produto-4.php');
		?>
   </div>
</div>