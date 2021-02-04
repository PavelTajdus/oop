<?php
class Car
{
    public $brand;
    public $year;

    public function __construct($znacka, $rok_vyroby)
    {
        $this->brand = $znacka;
        $this->year = $rok_vyroby;
    }

    public function __destruct()
    {
        // kód který se provede při zrušení objektu
    }
}
