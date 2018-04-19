<?php if(!class_exists('Rain\Tpl')){exit;}?><head>
	<title></title>
	<link rel="stylesheet" href="/vendor/libraryitego/WebContent/view/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/vendor/libraryitego/WebContent/view/bootstrap/css/estilo.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">
</head>
<body>
	
	

	<div class="container topo">

	<div class="row">
		
	<div class="col-sm">	
		<img src="/vendor/libraryitego/WebContent/view/img/logoitego.png" class="rounded float-left espaco-topo espaco-bottom" alt="Logo do ITEGO">
	</div>
	<div class="col-sm">
		<img src="/vendor/libraryitego/WebContent/view/img/logotopo.png" class="rounded float-right espaco-topo espaco-bottom" alt="Logo do topo">
	</div>
 
	</div>
</div>
<div class="container topo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary topo">
  <a class="navbar-brand" href="/index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php $counter1=-1;  if( isset($menu) && ( is_array($menu) || $menu instanceof Traversable ) && sizeof($menu) ) foreach( $menu as $key1 => $value1 ){ $counter1++; ?>
      <li class="nav-item <?php echo htmlspecialchars( $value1["dropdown"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <a class="nav-link <?php echo htmlspecialchars( $value1["toggle"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" href='<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>' data-toggle="<?php echo htmlspecialchars( $value1["dropdown"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" ><?php echo htmlspecialchars( $value1["item"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
        <?php if( $value1["selected"] ){ ?>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php $counter2=-1;  if( isset($value1["submenu"]) && ( is_array($value1["submenu"]) || $value1["submenu"] instanceof Traversable ) && sizeof($value1["submenu"]) ) foreach( $value1["submenu"] as $key2 => $value2 ){ $counter2++; ?>
              <a class="dropdown-item" href="<?php echo htmlspecialchars( $value2["sublink"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value2["subitem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
            <?php } ?>
          </div>
        <?php } ?>
      </li>
      <?php } ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</body>