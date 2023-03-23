<ul>
  <?php
    require_once("artikl.php");
 foreach($artikli as $artikl) 
 {
   echo '<td><h3><b>'.$artikl->get_naziv().'</b></h3><br/>
         <img src="'.$artikl->get_url().'"><br/>
         <p>'.$artikl->ispis_cijene().'</p><br/>
         <button onclick="addToCart('.$artikl->get_id().')">Add to cart</button></td>';
  }  
      ?>
</ul>
