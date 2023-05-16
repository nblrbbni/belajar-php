<?php

class OOP
{
    public function publicMethod()
    {
        echo "Ini adalah OOP Metode Publik";
    }

    protected function protectedMethod()
    {
        echo "Ini adalah OOP Metode Protected";
    }

    private function privateMethode()
    {
        echo "Ini adalah OOP Metode Private";
    }

    public function AccessMethodOOP()
    {
        $this -> publicMethod(); // adek 1
        echo '<br>';
        $this -> protectedMethod(); // adek 2
        echo '<br>';
        $this -> privateMethode(); //adel 3
    }
}
$oop = new OOP();
$oop -> publicMethod();
echo '<br>';
$oop -> AccessMethodOOP();