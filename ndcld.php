<?php
header("Content-Type: text/json");
if ($_GET["query"]) {
  $url = "http://www.kanzaki.com/works/2015/ndc-ld/sparql?query=".urlencode($_GET["query"])."&format=json";
  $cont = file_get_contents($url);
  if ($_GET["callback"]) {
    echo $_GET["callback"]."(";
  }
  echo $cont;
  if ($_GET["callback"]) {
    echo ")";
  }
  #echo "\n";
  #echo $url;
}
?>
