<?php

//! FUNZIONI USER-FUNCTION - definite da noi
//! dichiarata
//* nome : iniziare o con una lettera o con _, iniziale minuscola
// function nome(parametri formali){
//     corpo della funzione = istruzioni
// return 
// }

function saluta($nome, $cognome)
{
    echo "Ciao! $nome $cognome \n";
}


//! richiamata /invocata

//nomeFunzione(parametri reali);
// saluta('Nocerino', 'Alessandro');


//! PARAMETRI

//! parametri formali!! segnaposto 
function sum($n, $n1, $n2)
{
    echo $n + $n1 + $n2;
}

//sum(78, 90, 12); //! parametri REALI 
//echo "\n";

//i parametri reali si associano a quelli formali in base alla loro posizione

//!parametro di default - un parametro predefinito = se non mi passi QUEL parametro allora prendi quello che ho scritto io
// function sum1($n , $n1, $n2 =0 )
// {
//     echo $n + $n1 + $n2;
// }


function sum1($n, $n1 = 8, $n2)
{
    echo $n + $n1 + $n2;
}


// sum1(4,5);
// sum1(2,3,6);
//sum1(2,3); //! si associano per POSIZIONAMENTO

//! SCOPE - VISIBILITA'
//la porzione di codice in cui è visibile una variabile

// globale
// let x = 2;
//                             function print(){
//                                 console.log(x);
//                             }


//! LOCALE - visibile solo nella porzione di codice dove è dichiarata
$number = 5;
const NUM = 3; // SUPERGLOBALS

function printNumber($n)
{
    echo $n;
}
// printNumber(2);
// printNumber($number);

function printNumber2()
{
    $number = 4;
    echo $number;
}
// printNumber2();


function printConst()
{
    // NUM =6;
    echo NUM;
}
// printConst();


// function login( mail, password){
//     salva nome, mail, password;
// }
// login();
//! PASSAGGIO DEL PARAMETRO PER VALORE
//manipola una COPIA del valore della variabile passata come argomento reale

$x = 5;
// echo "il valore di x prima della funzione increment è $x \n";

function increment($n)
{
    $n = $n + 1;
    echo $n . "\n";
}
// increment($x);
// echo "il valore di x dopo della funzione increment è $x \n";


//! PASSAGGIO PER RIFERIMENTO
//& - un puntatore che fa riferimento alla locazione di memoria in cui è salvata la variabile
$y = 2;
// echo "il valore di y prima della funzione increment è $y \n";


function incrementRiferimento(&$n)
{
    $n = $n + 1;
    echo $n . "\n";
}
// incrementRiferimento($y);
// echo "il valore di y dopo della funzione increment è $y \n";


//! PARAMETRI VARIABILI

//* ... - SPREAD OPERATOR -> fa salvare i dati in ingresso in un array
function somma(...$numbers)
{
    $result = 0;
    foreach ($numbers as $number) {
        $result = $result + $number;
        //primo giro - result = 0 + 4 //4
        //secondo - result = 4 + 5  // 9
        //terzo - result = 9 + 2 //11
        // echo $result . "\n";
    }
    // echo $result;
    return $result;
}

function sommaReduce(...$numbers)
{
    $risultato = array_reduce($numbers, function ($result, $number) {
        //$numbers = [4,5,2];
        //accumulatore = valore di partenza in cui si sommano tutti i numeri
        //primo ciclo result = 0 
        //$number - il singolo numero volta per volta (prima 4, poi 5 e poi 2)
        return $result = $result + $number;
        //primo ciclo result = 0 +4 -> result =4 
        //secondo 

    });
    return $risultato;
}

sommaReduce(4, 5, 2);

//!array reduce in generale 
//! primo parametro = array da ridurre
//! secondo parametro = funzione di callback
//! la funzione di callback vuole due parametri: un accumulatore e il singolo elemento a ogni giro
//* l'accumulatore è valore di partenza in cui si sommano tutti i numeri (di default parte da 0)
//* il singolo elemento è man mano ogni elemento dell'array su cui stiamo lavorando
//* ESEMPIO : voglio sommare tutti gli elementi di un array

$arrayRidotto = array_reduce([1, 2, 3], function ($acc, $n) {
    return $acc = $acc + $n;
});
echo 'la somma di tutti i numeri presenti in arrayRidotto è: ' . $arrayRidotto . "\n";

// $sum = somma(4, 5, 2);

// echo $sum +4;
// echo $sum +2;

function sumEcho($x, $y)
{
    echo $x + $y . "\n";
}

function sumReturn($x, $y)
{
    return $x + $y;
}


var_dump($somma = sumEcho(4, 5));
var_dump($somma1 = sumReturn(4, 5));
