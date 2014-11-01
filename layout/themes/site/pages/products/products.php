    <div class="after">
    
    <div class="inter">
    <h2 id="blue">Atenção Visitante</h2>
    <p>Não efetuamos venda pelo site, esta area destina-se a consulta e simulação de pedido para os distibuidores cadastrados.
-Não se esqueça de <a href="entrar.php" id="red">logar</a>.</p>
	</div>
    
    <div class="sidebar">
    <h2>Categorias</h2>
    <ul class="category">
    	<li><a href="<?=base_url()?>products/coracoes">Corações</a></li>
    	<li><a href="<?=base_url()?>products/alimentos">Alimentos</a></li>
    	<li><a href="<?=base_url()?>products/anjos">Anjos</a></li>
    	<li><a href="<?=base_url()?>products/animais">Animais</a></li>
    	<li><a href="">Datas Comemorativas</a></li>
    	<li><a href="">Egípcios</a></li>
    	<li><a href="">Esotéricos</a></li>
    	<li><a href="">Feminino</a></li>
    	<li><a href="">Flores e Folhas</a></li>
    	<li><a href="">Infantil</a></li>
    	<li><a href="">Masculino</a></li>
    	<li><a href="">Musicais</a></li>
    </ul>
    </div>

    <div class="content">
    <h1>Nossos Produtos</h1>
    	<?php
		 	// Função para aparecer o conteúdo relacionado
			if(require_page('products'))
			{
				
			}
			require_page('products/coracoes', 'pages/products/coracoes.php');
		?>
    </div>
    
    
    
    </div>
    
    <div class="clear"></div>

    <div class="bg-blue after"></div>

