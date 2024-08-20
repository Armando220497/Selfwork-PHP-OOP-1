<?php

class Company
{
    public $name;
    public $location;
    public $tot_employees;
    public $duemilaventidue;
    public $duemilaventitre;
    public $duemilaventiquattro;

    public static $totalExpenses = 0;

    public function __construct($nome, $state, $dipendenti = 0, $data1 = 0, $data2 = 0, $data3 = 0)
    {
        $this->name = $nome;
        $this->location = $state;
        $this->tot_employees = $dipendenti;
        $this->duemilaventidue = $data1;
        $this->duemilaventitre = $data2;
        $this->duemilaventiquattro = $data3;


        self::$totalExpenses += $this->calculateTotalAnnual();
    }

    public function introduceCompany()
    {
        if ($this->tot_employees > 0) {
            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " ha ben " . $this->tot_employees . " dipendenti\n";
        } else {
            echo "L’ufficio " . $this->name . " con sede in " . $this->location . " non ha dipendenti\n";
        }
    }

    public function calculateAnnualExpense()
    {
        echo "La spesa annuale di " . $this->name . " è di $" . $this->duemilaventidue . " nel 2022, $" . $this->duemilaventitre . " nel 2023 e $" . $this->duemilaventiquattro . " nel 2024\n";
    }

    public function calculateTotalAnnual()
    {
        return $this->duemilaventidue + $this->duemilaventitre + $this->duemilaventiquattro;
    }

    public static function printTotalExpenses()
    {
        echo "La spesa totale di tutte le aziende è di: $" . self::$totalExpenses . "\n";
    }
}


$company1 = new Company('Aulab', 'Italia', 50, rand(1000, 10000), rand(1000, 10000), rand(1000, 10000));
$company2 = new Company('Redmi', 'Cina', 40, rand(1000, 10000), rand(1000, 10000), rand(1000, 10000));
$company3 = new Company('Sony', 'Giappone', 30, rand(1000, 10000), rand(1000, 10000), rand(1000, 10000));
$company4 = new Company('Volkswagen', 'Germania', 0, rand(1000, 10000), rand(1000, 10000), rand(1000, 10000));
$company5 = new Company('Zara', 'Spagna', 0, rand(1000, 10000), rand(1000, 10000), rand(1000, 10000));


$company1->introduceCompany();
$company1->calculateAnnualExpense();
$company1->calculateTotalAnnual();

$company2->introduceCompany();
$company2->calculateAnnualExpense();
$company2->calculateTotalAnnual();

$company3->introduceCompany();
$company3->calculateAnnualExpense();
$company3->calculateTotalAnnual();

$company4->introduceCompany();
$company4->calculateAnnualExpense();
$company4->calculateTotalAnnual();

$company5->introduceCompany();
$company5->calculateAnnualExpense();
$company5->calculateTotalAnnual();

Company::printTotalExpenses();
