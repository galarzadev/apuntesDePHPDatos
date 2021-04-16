<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('ed@coe.com'));

echo "<br>";

//VALORES
function greet($name)
{
    return "Hola, $name";
}

echo greet('Italo');
echo "<br>";
//referencias
$course = 'PHP';
function path(&$course) // & por referencia
{
    $course = 'Laravel';
    echo $course;
}

path($course);
echo "<br>";
echo $course;
echo "<br>";

//predeterminado
function greet2 ($name = 'El Italo')
{
    return "Hola $name";
    //se pyuede retornar un array [] y retornerlo con vasr_dump
    //exit(); detiene la ejecución del sistema
}

echo greet2();
echo "<br>";
echo greet2('Sergio');
echo "<br>";

//10closure
/*Los Closures también se llaman callbacks porque son las funciones que son llamadas de regreso al terminar de ejecutar el código de otra función que te la pidió*/

$greet10 = function ($name) //variable que requiere logica.
{
    return "Hola, $name <br>";
};

echo $greet10('Sergio10');
function greet102(Closure $lang, $name) //closure porque esperamos una funcion anonima forzosamente
{
    return $lang($name);
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};

echo greet102 ( $es, 'Prenceja') . "<br>";

$courses11 = ['javascript', 'laravel', 'php', 'vuejs'];

echo "<pre>";
var_dump($courses11);
echo "<br>";

$courses111 = [
    'javascript',
    'laravel',
    10 => 'php',
    'vuejs',
    'PYTHN'];

echo "<pre>";
var_dump($courses111);
echo "<br>";

//12 ARRAY COMPLEJO
$courses12 = [
    'frontend'=>'javascript',
    'framework'=>'laravel',
    'backend' => 'php'
];

foreach ($courses12 as $course) {
    echo "$course <br>";
}

function upper12 ($course, $key)
{
    echo strtoupper($course) . ": $key<br>";  
}

array_walk($courses12, 'upper12');

/*
array_key_exist('frontend', $courses); //true
in_array('javascript', $courses); //true
array_keys($courses12);//umprimer todos
array_values($courses12);
*/

$courses13 = [
    1000 =>'javascript', 
    14000 =>'laravel', 
    542 =>'php', 
    100 =>'vuejs'
];
// rsort($courses13);
// sort($courses13); //k usa el existente, sort y ksort/krsort las cambia las key
ksort($courses13);
echo "<pre>";
var_dump($courses13);
echo "array sluce y chunk<br>";

Var_dump (array_slice($courses13, 3));
Var_dump (array_chunk($courses13, 2));//agrupe los elementos de a 2

/*
array_shift($courses13) // elimina el pimero y lo retorna
array_pop($courses13) // elimina el ultimo y lo retorna
array_unshift() // agrega el pimero y lo retorna
array_push() // agrega el ultimo y lo retorna
//array_flip() // intercambia keys y valores
*/
$courses14 = ['javascript', 'php', 'mongodb'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
echo "<br>";
var_dump(array_diff($wishes, $courses14)); //que hay en wishes que no esta en courses


//union
echo "<pre>";
echo "<br>";
var_dump($wishes + $courses14); //si tienen los mismos key, wishes sobreescribe al otro, si no si se suma
echo "<pre>";
echo "<br>";
var_dump(array_merge($wishes, $courses14)); //guarda los reetidos tambien, pero en caso de keys letras, el segyundi reemplaza al priimero
var_dump(array_merge_recursive($wishes, $courses14)); //hace arrays dentro del array, agrupados por claves iguales

$courses15 = ['javascript', 'php', 'laravel'];
$cartegories = ['frontend', 'backend', 'frontend'];
echo "<pre>";
echo "aaaaaaaaaaaa<br>";
var_dump(array_combine($courses15, $cartegories));//deben tener la musma cant de elementos.  courses15 entra como keys