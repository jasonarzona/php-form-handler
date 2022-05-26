<html>
  <head>
    <title>World's Smallest Form Handler</title>
  </head>
  <body>
    <h1>World's Smallest Form Handler</h1>
    
    <?php
// if whatever is in the parenthesis is true then run curly boii else run the second curly boii
// isset means is this data ready
    if(isset($_POST["FirstName"])){//show data
                                   
      echo $_POST["FirstName"];
                                   
    }else{//show form
          
      echo '
          <form method="post" action="">
          <p>First Name: <input type="text"name="FirstName" /></p>
          <p><input type="submit" /></p>
          </form>
            ';
    }
// echo "this is php"

    ?>

    
    
  </body>
</html>
