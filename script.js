function dodajUKosaricu(id){
  const xhttp=new XMLHttpRequest();
  xhttp.onload=function(){
    alert("Artikl je dodan u košaricu");
  }
  xhttp.open("GET", "index.php?page=kosarica&action=dodaj&id="+id);
  xhttp.send();
}