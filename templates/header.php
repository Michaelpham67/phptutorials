<head>

	<title>Ninja Pizza</title>

	<!-- Linking an external CSS from Materialize CSS website (CDN) under Getting Started -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <style type="text/css"> 

	.brand{	<!-- setting the CSS for the classes and labeling them as !important to have higher precedence -->
	  	background: #ed5740 !important;
	  }

	.brand-btn{
		background: #ed5740 !important;
	}

  	.brand-text{
  		color: #ed5740 !important;
  	}

  	.brand-logo{
  		color: #ed5740 !important;
  	}

  	.nopizza{
  		height: 8vh;
  		width: 11vw;
  		margin: 20px auto;
  		padding: 20px;
  	}

  	.pizza{
  		width: 100px;
  		margin: 40px auto -30px;
  		display: block;
  		position: relative;
  		top: -30px;
  	}

  	.pizza-text{
  		color: #808080;
  	}

  	form{
  		height: 40vh;
  		width: 30vw;
  		margin: 20px auto;
  		padding: 20px;
  	}

  </style>
</head>

<body class="grey lighten-4">

	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="left brand-logo brand-text">Ninja Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add.php" class="btn brand-btn z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>

  </nav>