<?php

 class Company
{
    public $name;
    public $location;
    public $tot_employees;

    //Attributo statico 
    static public $avg_wage = 1500;
    static public $spesa_complessiva = 0;
  
    public function __construct($_name,$_location,$_tot_employees){
    
        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees; 

    }
    // Metodi 
    public function description(){
     if ($this->tot_employees > 0) {
         echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti. \n";
     }else {
        echo "L'ufficio $this->name con sede in $this->location non ha dipendenti.\n";
     }
     
    }

    public function spesa_annua (){
       $spesa_totale_annua = self::$avg_wage  * $this->tot_employees * 12;
       self::$spesa_complessiva += $spesa_totale_annua;
       echo "La spesa annua per $this->name: $spesa_totale_annua  \n";
    }
    public function spesa ($months){
        $spesa_totale = self::$avg_wage  * $this->tot_employees * $months;
      
        echo "La spesa annua per $this->name: $spesa_totale  \n";
     }

     static public function spesa_complessiva(){
      
        echo "La Spesa complessiva di tutte le aziende è di:" .self::$spesa_complessiva ."\n";
     }
}

//Istanziamento degli oggetti
$company1 = new Company("Aulab", "Italia", 50);
$company2 = new Company("XYZ Ltd.", "London", 500);
$company3 = new Company("123 Co.", "Tokyo", 0);
$company4 = new Company("Global Services", "Mumbai", 800);
$company5 = new Company("Innovate Solutions", "San Francisco", 1500);

//Invocazione dei metodi
$company1 -> description();
$company2 -> description();
$company3 -> description();
$company4 -> description();
$company5 -> description();


$company1 -> spesa_annua();
$company2 -> spesa_annua();
$company3 -> spesa_annua();
$company4 -> spesa_annua();
$company5 -> spesa_annua();

$company1 -> spesa(1);//calcola la spesa per 1 mese
$company2 -> spesa(4);//calcola la spesa per 4 mesi 
$company3 -> spesa(5);//calcola la spesa per 5 mesi
$company4 -> spesa(1);//calcola la spesa per 1 mese
$company5 -> spesa(6);//calcola la spesa per 6 mesi

Company::spesa_complessiva ();