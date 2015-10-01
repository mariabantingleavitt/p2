<?php
//Maria Banting-Leavitt
require_once('ripcurl.class.php');
  $rip = new ripcurl();
//  Declare Variables  //
  $count = 0;

  $html = $rip->ripRun("http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html", 1);

     $pageurl = "http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html";
     echo "Page $page URL: $pageurl<br>";
     $pagehtml = $rip->ripRun($pageurl, 1);
        //  Get Links  //
     $words = $rip->ripInBetween('<li>','</li>',null,$pagehtml);

     foreach($words as $word){
        echo "'$word', ";
        ++$count;
     }  // end foreach //

  echo "<br><b>Finished with $count words.</b>";
?>
