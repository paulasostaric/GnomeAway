<div>
  <h1 style="text-align: center;">Kosarica</h1>
  <div class='aa'>
    <?php 
          $ukupnaCijena = 0;
            if(isset($_COOKIE["kosarica"])) {  

            foreach ($kosarica as $id) {
                foreach ($artikli as $a) {
                    if($id == $a->get_id()) {
                        $ukupnaCijena += $a->get_cijena();
                        echo 
                        "
                          <div>
                            <section style='text-align:center; margin: 20px;'>
                                <img class='ggg' src='".$a->get_url()."'><br>
                                <b>Naziv: </b>" . $a->get_naziv() . " <br>
                                <b>Cijena: </b>" . $a->ispis_cijena() . "<br>
                            </section>
                          </div>
                        ";
                    }

                }
            }
            }
    ?>
  </div>
  <?php echo "<h2 style='text-align: center;'>Ukupna cijena je: ".number_format($ukupnaCijena, 2, ',', '.')." kn"."</h2>"; ?>
</div>

<style>
  .aa {
    display: flex;
    justify-content: center;
  }
  
  .ggg {
    width: 300px;
    height: 200px;
    border: 2px solid black;
  }
  
</style>
