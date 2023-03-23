<?php
  session_start();
function getBrojacPosjeta(){
    return file_get_contents("brojac_posjeta.txt");
  }
  function addBrojacPosjeta(){
    if(!isset($_SESSION['views'])){
      $brojac_posjeta = getBrojacPosjeta() + 1;
      $_SESSION['views']="yes";
      file_put_contents("brojac_posjeta.txt", $brojac_posjeta, LOCK_EX);
    }
  }
  addBrojacPosjeta();
  if($_GET["page"]=="kosarica"){
    $kosarica=array();
    if(isset($_COOKIE["kosarica"])){
      $kosarica=json_decode($_COOKIE["kosarica"]);
    }
    if($_GET["action"]=="dodaj" && isset($_GET["id"])){
      $kosarica[]=$_GET["id"];
      setcookie("kosarica", json_encode($kosarica), time()+3600);
    }
  }
  if($_GET['page'] == "kontakt" && !isset($_SESSION["username"]))
    die(header("Location: index.php?page=ne_kontakt"));

  if($_SERVER["REQUEST_METHOD"]=="POST" && $_GET["page"]=="prijava"){
    
    $user=$_POST["username"];
    $psv=$_POST["password"];
    $password=password_hash("admin", PASSWORD_BCRYPT);
    
    //$2y$10$AM2weHrQ9ZPLGGyXMDZU2ONi81Ssam0tChpev6AjQfAyHIH2fpK8m


    if($user=="admin" && password_verify($psv,'$2y$10$AM2weHrQ9ZPLGGyXMDZU2ONi81Ssam0tChpev6AjQfAyHIH2fpK8m')){
      $_SESSION["username"] = $user;
      die(header("Location: index.php?page=uspjesna"));
    }else{
      die(header("Location: index.php?page=neuspjesna"));
    }
  }
  else if($_GET["page"]=="odjava")
  {
    session_unset();
    if(ini_get("session.use_cookies"));
    //var_dump(session_name());
    {
    $setcookie(session_name(),'',time()-3600,
    $params["path"], $params["domain"],
    $params["secure"],$params["httponly"]);
  }
    session_destroy();
    header("LOcation:".$_SERVER["HTTP_REFERER"]);
}
  
?>
<html>
  <head>
    <title>Airsoft</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header><?php require_once("header.html");?></header>
    <main>
      <?php
        $page= $_GET['page'];
        if($page==""){
          require_once("pocetna.php");
        }
        else if($page=="kontakt"){
          require_once("kontakt.html");
        }
        else if($page=="ne_kontakt"){
          require_once("ne_kontakt.html");
        }
        else if($page=="adresa"){
          require_once("adresa.html");
        }
        else if($page=="shop"){
          require_once("shop.html");
        }
        else if($page=="kosarica"){
          require_once("kosarica.php");
        }
        else if($page=="prijava"){
          require_once("prijava.html");
        }else if ($page=="uspjesna") {
          require_once("uspjesna.html");
        }else if ($page=="neuspjesna"){
          require_once("neuspjesna.html");
        }else if ($page=="slike"){
          require_once("slike.php");
        }
      ?>
    </main>
    <footer><?php require_once("footer.php");?></footer>
  </body>
  <script src="script.js"></script>
</html>