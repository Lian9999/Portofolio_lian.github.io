<?php  
class PengalamanKerja extends CV
{
    public $work;
    public $year;
    public $position;
    function __construct($name, $work, $year, $position)
    {
        parent::__construct($name);
        $this->work = $work;
        $this->year = $year;
        $this->position = $position;
    }
    function name()
    {}
    function work()
    {
        return $this->work;
    }
    function year()
    {
        return $this->year;
    }
    function position()
    {
        return $this->position;
    }
}
$experience1 = new PengalamanKerja("Muhammad Arlianto", "PT. Bisma Dharma Kencana", "2018-2020", "Database & Data Science Sawit");
$experience2 = new PengalamanKerja("Muhammad Arlianto", "Hotel Bahalap", "2020-2021", "Database & Data Science Customer");
$experience3 = new PengalamanKerja("Muhammad Arlianto", "BOSF MAWAS", "2021-2022", "Database & Data Science Conservation");
$experience4 = new PengalamanKerja("Muhammad Arlianto", "Klinik Hanfris", "2022-2023", "Database & Data Science Pasien");
?>