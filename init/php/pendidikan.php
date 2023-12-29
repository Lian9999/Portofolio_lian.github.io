<?php  
class Pendidikan extends CV
{
    public $sma;

    function __construct($name, $sma)
    {
        parent::__construct($name);
        $this->sma = $sma;
    }
    function sma()
    {
        return $this->sma;
    }
}
$pendidikan = new Pendidikan("Muhammad Arlianto", "SMA PGRI 2 Palangka Raya");
?>