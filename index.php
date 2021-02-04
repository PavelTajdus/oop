<?php
// 12. Objektové programování
// Pojem třída, objekt, metoda, atribut. Konstruktor a destruktor. Dědičnost. Statické volání.


// Autoloading tříd
spl_autoload_register(function (string $className): void {
    include 'src/' . $className . '.php';
});

Greeting::welcome();
Greeting::$name = "Pavel";

$clanek = new Page("Můj první článek");
$kontakt = new Contact("Kontakt");

$clanek->title = "Můj super název článku";
$clanek->text = 'Třídy umožňují funkci zapsat přímo do svého těla s definovanou přístupností (stejně jako u properties) a říkají tomu metody. Proměnná $this se chová trochu "magicky". Je v ní totiž uložena aktuální instance objektu, ve kterém se zrovna nacházíme. Pokud chceme v rámci metody přečíst hodnotu z property nebo zavolat jinou metodu, stačí to provést právě nad proměnnou $this.';

// echo $clanek->short_description();
// Třídy umožňují funkci zapsat přímo do svého těla s definovanou přístupností (stejně jako u properties) a říkají tomu metody. Proměnná $this se chová...

$dalsi_clanek = new Page("Další článek");

$moje_volvo = new Car("Volvo", 2014);
$moje_bmw = new Car("BMW", 2000);
$moje_audi = new Car("Audi", 2020);

// var_dump($moje_audi);
// object(Car)#6 (2) { ["brand"]=> string(4) "Audi" ["year"]=> int(2020) }

?>
<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $clanek->title ?></title>
    <meta name="description" content="<?= $clanek->short_description() ?>">
</head>

<body>
    <h1><?= $clanek->title ?></h1>
    <p><?= $clanek->text ?></p>
</body>

</html>