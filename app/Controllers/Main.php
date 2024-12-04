<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\hraci;

class Main extends BaseController
{
    var $hraci; // instance pro hrace

    public function __construct() //konstruktor
    {
        $this->hraci = new Hraci();
    }
    public function index()
    {
        echo view("index");
    }


    public function tabulka()
    {
        echo view("tabulka");
    }

    public function carousel()
    {
        echo view("carousel");
    }

    public function hraci()
    {
        echo view("hraci");
    }

    public function polaci()
    { 
        $polaci = $this->hraci->where("country", "pl")->orderBy("vyska", "desc")->findAll(); //$polaci jsou kde to budeme ukladat, this hraci a where se dostavame do databaze a pak si vybereme co vyhledat a všechno
        $data["hraci"] = $polaci; //získáme do jednoho atributu všechny údaje (ascending)
        echo view("polaci", $data); //vysledek vypiseme do view polaci
        
    }

    public function polaci2(){
        $polaci2 = $this->hraci->where("country", "pl")->orderBy("vyska", "desc")->findAll(); //$polaci jsou kde to budeme ukladat, this hraci a where se dostavame do databaze a pak si vybereme co vyhledat a všechno
        $data["hraci"] = $polaci2; //získáme do jednoho atributu všechny údaje (descending)
        echo view("polaci2", $data); //vysledek vypiseme do view polaci
    }
    
}