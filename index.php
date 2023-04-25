<?php
function saque($pontuacao) {
  list($jogadorA, $jogadorB) = explode(':', $pontuacao);
  $sacandoA = true;
  for($i = 0; $i<40; $i++){
  
    if ($jogadorA + $jogadorB <= 4) {
      return "jogador a";
    } elseif ($jogadorB + $jogadorA <= 9 && $jogadorB + $jogadorA > 4) {
      return "jogador b";
    } elseif ($jogadorB + $jogadorA <= 14 && $jogadorB + $jogadorA > 9) {
        return "jogador b";
      }elseif ($jogadorB + $jogadorA <= 19 && $jogadorB + $jogadorA > 14) {
        return "jogador b";
      }elseif ($jogadorB + $jogadorA <= 24 && $jogadorB + $jogadorA > 19) {
        return "jogador b";
      }elseif ($jogadorB + $jogadorA <= 29 && $jogadorB + $jogadorA > 24) {
        return "jogador b";
      }elseif ($jogadorB + $jogadorA <= 34 && $jogadorB + $jogadorA > 29) {
        return "jogador b";
      }elseif ($jogadorB + $jogadorA <= 39 && $jogadorB + $jogadorA > 34) {
        return "jogador b";
      }
    }if($jogadorA > $jogadorB + 2 || $jogadorB > $jogadorA + 2 ){ 
        return "o jogo acabou";
      
    }if(($jogadorA + $jogadorB) % 2 == 0){
        return "jogador b";

    }if(($jogadorA + $jogadorB) % 2 == 1){
        return "jogador a";
    }
    
  
}

echo saque ("0:0" );
echo ("<br />");
echo saque ("3:2");
echo ("<br />");
echo saque ("3:8");
echo ("<br />");
echo saque ("5:10");
echo ("<br />");
echo saque("21:20");
echo ("<br />");
echo saque("21:24");

?>
