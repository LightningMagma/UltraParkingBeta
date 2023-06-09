<!doctype html>
<html>
<head>
    <title>PHP work</title>
    <!--<link rel="stylesheet" type="text/css" href="<?php echo site_url('/app/Views/estilo/style.css');?>" media="screen" />
     Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<style>
        body {
            background: #ddd;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
		}
        header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
		
		h1 {
			margin: 0;
			font-size: 36px;
			font-weight: bold;
		}
        main {
			padding: 20px;
			max-width: 800px;
			margin: 0 auto;
		}
		
		h2 {
			font-size: 24px;
			font-weight: bold;
			margin-top: 40px;
		}
		
		p {
			margin-top: 20px;
		}
        footer {
			background-color: #ccc;
			color: #333;
			padding: 20px;
			text-align: center;
		}
		
		footer p {
			margin: 0;
			font-size: 14px;
		}

        form {
			padding: 20px;
			max-width: 400px;
			margin: 0 auto;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			background-color: #f6f6f6;
		}
		
		label {
			display: block;
			margin-top: 20px;
			font-size: 18px;
			font-weight: bold;
		}
        input[type="text"],
		input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-top: 5px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			box-sizing: border-box;
		}
        input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			font-size: 18px;
			font-weight: bold;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #ccc;
			color: #333;
		}
        input[type="text"],
		input[type="email"],
		textarea {
			width: 100%;
			padding: 10px;
			margin-top: 5px;
			margin-bottom: 20px;
			border-radius: 5px;
			border: 1px solid #ccc;
			font-size: 16px;
			box-sizing: border-box;
		}
		
		textarea {
			height: 150px;
		}

    /* Estilos para la barra de navegación */
    nav {
        background-color: #111;
        overflow: hidden;
    }
    
    nav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    nav a:hover {
        background-color: #008f39;
        color: black;
    }
    
    .active {
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>
<body class="text-center">
    
	<!-- Barra de navegación -->
	<nav>
		<a href="<?php echo site_url('home');?>">Inicio</a>
		<a href="<?php echo site_url('login');?>">Login</a>
		<a href="<?php echo site_url('signin');?>">Sign in</a>
		<a href="<?php echo site_url('cont');?>">Contáctenos</a>
	</nav>