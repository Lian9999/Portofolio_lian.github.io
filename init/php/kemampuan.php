<?php  
class Kemampuan extends CV
{
    public $skill1;
    public $skill2;
    public $skill3;
    public $skill4;

    function __construct( $skill1, $skill2, $skill3, $skill4, $skill5, $skill6, $skill7, $skill8, $skill9, $skill10, $skill11, $skill12, $skill13, $skill14, $skill15)	
    {
        $this->skill1 = $skill1;
        $this->skill2 = $skill2;
        $this->skill3 = $skill3;
        $this->skill4 = $skill4;
        $this->skill5 = $skill5;
        $this->skill6 = $skill6;
        $this->skill7 = $skill7;
        $this->skill8 = $skill8;
        $this->skill9 = $skill9;
        $this->skill10 = $skill10;
        $this->skill11 = $skill11;
        $this->skill12 = $skill12;
        $this->skill13 = $skill13;
        $this->skill14 = $skill14;
        $this->skill15 = $skill15;


    }
 
    function skill1()
    {
        return $this->skill1;
    }
    function skill2()
    {
        return $this->skill2;
    }
    function skill3()
    {
        return $this->skill3;
    }
    function skill4()
    {
        return $this->skill4;
    }
    function skill5()
    {
        return $this->skill5;
    }
    function skill6()
    {
        return $this->skill6;
    }
    function skill7()
    {
        return $this->skill7;
    }
    function skill8()
    {
        return $this->skill8;
    }
    function skill9()
    {
        return $this->skill9;
    }
    function skill10()
    {
        return $this->skill10;
    }
    function skill11()
    {
        return $this->skill11;
    }
    function skill12()
    {
        return $this->skill12;
    }
    function skill13()
    {
        return $this->skill13;
    }
    function skill14()
    {
        return $this->skill14;
    }
    function skill15()
    {
        return $this->skill15;
    }

}
$kemampuan = new Kemampuan("HTML", "CSS", "Javascript", "PHP", "Python", "C++", "SPSS", "R", "Scilab", "Bahasa Inggris", "Bahasa Jerman", "Bahasa Belanda", "Bahasa Italia", "Bahasa Jepang", "Bahasa Mandarin", "Planning Of Target");
?>