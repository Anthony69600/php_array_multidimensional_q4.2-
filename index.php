<?php

$movies = [
'Indiana Jones and the Raiders of the Lost Ark'=> ['Harrison Ford','Karen Allen','Paul Freeman'],
'Indiana Jones and the Temple of Doom'=> ['Harrsion Ford','Kate Capshaw','Jonathan Ke Quan'],
'Indiana Jones and the Last Crusade'=> ['Harrison Ford','Sean Connery','Denholm Elliott']
];



foreach($movies as $key => $actors){            
    echo $key . ":" . "</br></br>" ;
    
    foreach($actors as $key2 => $name){
        echo "actor :" . " " . $name . "</br>";
    }
    echo "</br>";
}


?>
