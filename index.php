<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hello World</title>
  <link rel="manifest" href="./manifest.json">
  <meta name="theme-color" content="white"/>
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="fullscreen">
  <div class="container">
    <?php
    echo "PHP Works in this page... <br /><br />"
    ?>
      <center>
        Username: <input type='text' name='user' />
        <br />
        Passowrd: <input type='password' name='passowrd' />
        <br /><br />
        <input type='button' value='Save' onclick="window.open('http://www.google.com')" />
        
        </center>
  </div>
	
	
 <!-- <script src="js/main.js"></script>-->
	<script>
		if ('serviceWorker' in navigator) {
    		navigator.serviceWorker
             .register('sw.js');
  		}
		
    </script>
</body>
</html>