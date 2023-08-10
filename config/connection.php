  <?php 
  
  $host = "localhost";
  $dbname = "agenda";
  $user = "root";
  $pass= "";


  try{
     
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    // Error mode active
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
  }catch(PDOException $e){
    //connection error
    $error = $e->getMessage();
    echo "Erro:$error";
  }
  

  
  ?>