<head>

	<title>Ninja Pizza</title>

	<!-- Linking an external CSS from Materialize CSS website (CDN) under Getting Started -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <style type="text/css"> 

	 .brand{	<!-- setting the CSS for the classes and labeling them as !important to have higher precedence -->
	  	background: #00aaff !important;
	  }
  	.brand-text{
  		color: #00aaff !important;
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
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
      </ul>
    </div>

  </nav>