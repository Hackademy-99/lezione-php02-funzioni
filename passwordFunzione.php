<?php

//password di almeno 8 caratteri
//almeno uno dei caratteri deve essere un numero
//almeno una lettera maiuscola
//almeno un carattere speciale

$password = readline('Scrivi la tua password: ');

// $password = 'ciao';

// echo "password inserita: $password"; 
//in js variabile.lenght()

//!password di almeno 8 caratteri - primo controllo
//! in php strlen($stringa) 
//conta il numero di caratteri della stringa
// $stringa ='ciao';
// echo strlen($stringa);



function checkLength($pwd) //parametro formale, segnaposto
{
    if (strlen($pwd) >= 8) {
        // echo "Password accettata! \n";
        return true;
    } else {
        // echo "Password non accettata! \n";
        return false;
    }
}




//! almeno uno dei caratteri deve essere un numero - SECONDO CONTROLLO
//! is_numeric controlla se il parametro passato è numerico
// if (is_numeric($password) == true) {
//     echo "password accettata";
// }

function checkNumber($pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        // echo $i;
        if (is_numeric($pwd[$i])) {
            // echo "numero trovato! \n";
            return true; //break
        }
    }
    return false;
}


//! almeno una lettera maiuscola 
//! ctype_upper($stringa)



function checkUpper($pwd)
{
    for ($i = 0; $i < strlen($pwd); $i++) {
        if (ctype_upper($pwd[$i])) {
            return true;
        }
    }
    return false; //! di default sarà false
}

//! carattere speciale

//! la funzione nativa in_array controlla se un elemento è presente in un array
//* sintassi = in_array(elementoDaCercare, arrayInCuiCercare){ cosa da fare}
//* stiamo ciclando sulla stringa $password: $password[$i] sarà di volta in volta ogni lettera di $password
//* quindi controlliamo se ogni lettera è presente nell'array dei caratteri speciali


function checkSpecials($pwd)
{
    $specials = ['!', '?', '*'];
    for ($i = 0; $i < strlen($pwd); $i++) {

        if (in_array($pwd[$i], $specials)) {
            return true;
        }
    }
    return false;
}



function checkPassword($pwd)
{
    $primaregola = checkLength($pwd);

    $secondaregola = checkNumber($pwd);

    $terzaregola = checkUpper($pwd);

    $quartaregola = checkSpecials($pwd);
    if ($primaregola && $secondaregola && $terzaregola && $quartaregola) {
        return true;
    } else {
        return false;
    }
}

var_dump(checkPassword($password));

