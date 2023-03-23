<div>
  <h1 style="text-align: center;">Ducan</h1>
  <div  class="hh">
    <?php 
      require_once("Artikl.php");
      foreach($artikli as $artikl) {
        echo 
        '
        <div class="cc">    
          <div>
            <img src="'.$artikl->get_url().'"> <br>
<hr>
            <span><b>Naziv:</b> '. $artikl->get_naziv() .'</span> <br>
            <span><b>Cijena:</b> '. $artikl->ispis_cijena() .'</span> <br><br>
          <button class="zzz" onclick="dodajUKosaricu('. $artikl->get_id().')">Dodaj u kosaricu</button>
          </div>
        </div>
        
        ';
      }
    ?>
<style>
  .hh {
    display: flex;
    justify-content:center;
    gap: 20px;
  }

  .hh img {
    width: 200px;
    height: 200px;
    margin: 10px;
    
  }

  .cc {
    border: 2px solid black;
    margin: 30px;
    text-align: center;
  }

  .zzz {
  background-color:#1565c0;
  border: none;
  color: white;
  padding: 7px 15px;
  margin:5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
    cursor:pointer;
  }
</style>
  </div>
</div>
