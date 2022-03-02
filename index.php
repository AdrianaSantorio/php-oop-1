<?php

class Movie
{

    public $title;
    public $year;
    public $genre;
    //public $sequel;
    public $synopsis;
    public $director;
    public $budget;
    public $box_office;
    public $profit;

    public function __construct($title, $year, $genre, $synopsis, $director, $budget, $box_office)
    {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
        $this->synopsis = $synopsis;
        $this->director = $director;
        $this->budget = $budget;
        $this->box_office = $box_office;
        $this->profit = $this->setProfit();
    }

    public function setProfit()
    {
        $profit = ($this->box_office - $this->budget);

        if ($profit > 0) {
            return $profit;
        } else {
            return "Il film non ha generato profitto";
        };
    }
};

$tfotr = new Movie('Il Signore degli anelli - La compagnia dell\' anello', '2001', 'fantasy', 'In ancient times the Rings of Power were crafted by the Elven-smiths, and Sauron, the Dark Lord, forged the One Ring, filling it with his own power so that he could rule all others. But the One Ring was taken from him, and though he sought it throughout Middle-earth, still it remained lost to him. After many ages it fell, by chance, into the hands of the Hobbit, Bilbo Baggins. On his eleventy-first birthday, Bilbo disappeared, bequeathing to his young nephew, Frodo, the Ruling Ring, and a perilous quest: to journey across Middle-earth, deep into the shadow of the Dark Lord and destroy the Ring by casting it into the Cracks of Doom.', 'Peter Jackson', 93000000, 8977000000);
$ttt = new Movie('Il signore degli anelli - Le due torri', '2002', 'fantasy', 'The surviving members of the Fellowship have split into three groups. Frodo and Sam face many perils on their continuing quest to save Middle-earth by destroying the One Ring in the fires of Mount Doom. Merry and Pippin escape from the Orcs and must convince the Ents to join the battle against evil. Aragorn, Gimli and Legolas encounter a mysteriously transformed Gandalf and battle Saruman\'s army at Helm\'s Deep.', 'Peter Jackson', 94000000, 947500000);

var_dump($tfotr);
var_dump($ttt);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2><?= $tfotr->title ?></h2>
    <span><?= $tfotr->year ?></span>
</body>


</html>