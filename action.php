<html>
  <head>
    <meta http-equiv="content-type" charset="utf-8">
      <title>Result</title>
  </head>

  <body>
    <h2>結果</h2>
      <?php
	if(isset($_POST["post"])) {
	  $post=$_POST["post"];
	  print("POSTメソッド: $post</br>");
	} 
	elseif(isset($_GET["get"])) {
	  $get=$_GET["get"];
	  print("GETメソッド: $get</br>");
	} else {
	  print("Error");
	}
      ?>
  </body>
</html>
