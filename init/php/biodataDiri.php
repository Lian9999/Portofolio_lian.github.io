<?php  
class BiodataDiri extends CV
{
    public $location;
    public $email;
    public $contactme;

    function __construct($name, $location, $email, $contactme)
    {
        parent::__construct($name);
        $this->location= $location;
        $this->contactme=$contactme;
        $this->email=$email;
    }

    function name()
    {
        return $this->name;
    }
    function location()
    {
        return $this->location;
    }
    function email()
    {
        return $this->email;
    }
    function contactme()
    {
        return $this->contactme;
    }

}
$biodataDiri = new BiodataDiri("Muhammad Arlianto", "Palangka Raya", "arlianto9999@gmail.com",  "085705542193");
?>