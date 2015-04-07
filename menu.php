<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php?arquivo=home.php">Site Simples em PHP</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li <?php if($_GET["arquivo"] === 'home.php') : ?> class="active" <?php endif; ?>><a href="index.php?arquivo=home.php">Home</a></li>
				<li <?php if($_GET["arquivo"] === 'empresa.php') : ?> class="active" <?php endif; ?>><a href="index.php?arquivo=empresa.php">Empresa</a></li>
				<li <?php if($_GET["arquivo"] === 'produtos.php') : ?> class="active" <?php endif; ?>><a href="index.php?arquivo=produtos.php">Produtos</a></li>
				<li <?php if($_GET["arquivo"] === 'servicos.php') : ?> class="active" <?php endif; ?>><a href="index.php?arquivo=servicos.php">Serviços</a></li>
				<li <?php if($_GET["arquivo"] === 'contato.php') : ?> class="active" <?php endif; ?>><a href="index.php?arquivo=contato.php">Contato</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>