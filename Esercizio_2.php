<?php

/*traccia 1:

Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

    $users = [
     ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB']
    ];*/

// $users = [

//         [

//         'name' => "Davide",

//         'surname' => "Cariola",

//         'gender' => "M",

//         ],
//         [

//             'name' => "Marco",
    
//             'surname' => "Chierica",
    
//             'gender' => "M",
    
//         ],
//         [

//             'name' => "Andrea",
    
//             'surname' => "Vissichio",
    
//             'gender' => "NB",
    
//         ],
//         [

//             'name' => "Caterina",
    
//             'surname' => "Perrucci",
    
//             'gender' => "F",
    
//         ],


//     ];

// foreach($users as $user){

//     if ($user['gender'] == 'M'){

//         echo"Buongiorno Sig. $user[name] $user[surname]";

//         echo "\n";

//     }else if($user['gender'] == 'F'){

//         echo"Buongiorno Sig.ra $user[name] $user[surname]";

//         echo "\n";

//     }else{

//        echo "Buongiorno $user[name] $user[surname]";

//        echo "\n";

//   };

// }


/*traccia 2:

Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array*/

// $num = [
//     "numeri" => [1, 2, 3, 4 , 5 , 6 , 7 , 8 , 9],
//     "media" =>[ $numeri*10/10] ,
// ];

// foreach($num as $number){

//     if($number['media'] == 0){

//         echo "$number[media]";

//     }else{

//         echo"tutti i numeri sono dispari";

//         echo "\n";

//     }

// }


/*traccia 3:
Scrivere un programma che stampi in console tutti i numeri da uno a cento. 
Se il numero è multiplo di 3 stampare “PHP” al posto del numero; 
se multiplo di 5 stampare “JAVASCRIPT”; 
se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".*/

$i = 0;

while($i < 100){
    switch($i > 100 ){
        case floor($i / 3) && floor($i / 5);
        
            echo $i;
    
            echo "\n";

            echo"HACKADEMY";
    
            $i++;
    
        
        case $i % 3 == 0;

            echo $i;
    
            echo "\n";

            echo"PHP";
    
            $i++;
    
        
        case $i % 5 == 0;

            echo $i;
    
            echo "\n";

            echo"JAVASCRIPT";

            $i++;
            
        default:

            echo $i;
    
            echo "\n";
    
            $i++;
        
    }
}
    // if($i / 3  && $i / 5 == 0){
    //     echo"HACKADEMY";

    //     echo "\n";

    //     $i++;

    // }
    // elseif($i / 3  == 0){
    //     echo"PHP";

    //     echo "\n";

    //     $i++;

    // }
    // elseif($i / 5 == 0){
    //     echo $i;echo"JAVASCRIPT";

    //     echo "\n";

    //     $i++;
        
    // }
    // else{
    //     echo $i;

    //     echo "\n";

    //     $i++;
    // }
    // echo $i;

    // echo "\n";

    // $i++;

//}









    