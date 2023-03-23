

<div class="f-h">
        
  <form method="POST">
      <h1>Kontakt</h1>
      <b>Name: </b><br><input type="text" name="ime" required><br><br>
      <b>Surname: </b><br><input type="text" name="prezime" required><br><br>
      <b>E-mail: </b><br><input type="text" name="email" required><br><br>
      <b>Phone number: </b><br><input type="text" name="telefon" required><br><br>
      <b>Message: </b><br><input type="text" name="poruka" required><br><br>
      <input class="btn btn-primary" type="submit" value="Send">
  </form>
</div>


<div class='g'>
  <style>
    .g {
      display: flex;
      justify-content: center;
    }
    
  </style>
  <div>
<?php 

  function ispisi($ime, $prezime, $telefon, $email, $poruka) {
      echo "<div>Ime:$ime<br>";
      echo "Prezime: $prezime<br>";
      echo "Telefon: $telefon <br>";
      echo "Email: $email <br>";
      echo "Poruka: $poruka <br></div>";
  }
  if($_GET["page"] == "kontakt") {
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ime=filter_var($_POST["ime"], FILTER_SANITIZE_STRING);
    $prezime=filter_var($_POST["prezime"],FILTER_SANITIZE_STRING);
    $telefon=filter_var($_POST["telefon"],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST["email"],FILTER_SANITIZE_STRING);
    $poruka=filter_var($_POST["poruka"], FILTER_SANITIZE_STRING);
    if(!preg_match("/^\+3859\d\/\d{3}-\d{3,4}$/", $telefon)){
      echo "<b>Neispravan broj mobitela.<b><br/>";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo "<b>Krivo ste upisali email.<b><br/>";
    } else {
      ispisi($ime, $prezime, $telefon, $email, $poruka);
    }


    
   }
  }
  ?>
  </div>
</div>


<style>
  .f-h {
    display: flex; 
    justify-content:center;
    text-align: center;
  }
</style>
