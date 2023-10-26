<?php

//password di almeno 8 caratteri
//almeno uno dei caratteri deve essere un numero
//almeno una lettera maiuscola
//almeno un carattere speciale

// $password = readline('Scrivi la tua password: ');

$password = 'ciao';

// echo "password inserita: $password"; 
//in js variabile.lenght()

//!password di almeno 8 caratteri - primo controllo
//! in php strlen($stringa) 
//conta il numero di caratteri della stringa
// $stringa ='ciao';
// echo strlen($stringa);

if (strlen($password) >= 8) {
    echo "Password accettata! \n";
} else {
    echo "Password non accettata! \n";
}


//! almeno uno dei caratteri deve essere un numero - SECONDO CONTROLLO
//! is_numeric controlla se il parametro passato è numerico
// if (is_numeric($password) == true) {
//     echo "password accettata";
// }

for ($i = 0; $i < strlen($password); $i++) {
    // echo $i;
    if (is_numeric($password[$i] = 'o')) {
        echo "numero trovato! \n";
        break;
    }
}


//! almeno una lettera maiuscola 
//! ctype_upper($stringa)

for ($i = 0; $i < strlen($password); $i++) {
    if (ctype_upper($password[$i])) {
        echo "maiuscola trovata! \n";
        break;
    }
}


//! carattere speciale

//! la funzione nativa in_array controlla se un elemento è presente in un array
//* sintassi = in_array(elementoDaCercare, arrayInCuiCercare){ cosa da fare}
//* stiamo ciclando sulla stringa $password: $password[$i] sarà di volta in volta ogni lettera di $password
//* quindi controlliamo se ogni lettera è presente nell'array dei caratteri speciali

$specials = ['!', '?', '*'];
for ($i = 0; $i < strlen($password); $i++) {
    //passowrd = ciao - c i a o !
    if (in_array($password[$i], $specials)) {
        echo "carattere speciale trovato! \n";
        break;
    }
}
