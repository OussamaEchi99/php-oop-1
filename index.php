<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php 
class Movie {

    public $title;

    public $movie_director;
    
    public $year;

    public $genre;

    public function getInfoMovie() {
        return $this->title . ' ' . $this->movie_director . ' ' . $this->year . ' ' . $this->genre;
    }

    public function __construct($_title, $_movie_director, $_year, $_genre) {
        $this->title = $_title;
        $this->movie_director = $_movie_director;
        $this->year = $_year;
        $this->genre = $_genre;
    }
}

$matrix_resurrection = new Movie('Matrix Resurrection', 'Lana Wachowski', 2021, 'Sci-fi/Azione');
$eternals = new Movie('Eternals', 'Chloé Zhao', 2021, 'Avventura/Azione');
?>

<div>
    <h2><?php echo $matrix_resurrection->title; ?></h2>
    <div>
        <span style="font-weight : bold">Movie Director:</span>
        <span><?php echo $matrix_resurrection->movie_director; ?></span>
    </div>
    <div>
        <span style="font-weight : bold">Year:</span>
        <span><?php echo $matrix_resurrection->year; ?></span>
    </div>
    <div>
        <span style="font-weight : bold">Genre:</span>
        <span><?php echo $matrix_resurrection->genre; ?></span>
    </div>
    <h3>Summarizing: <?php echo $matrix_resurrection->getInfoMovie(); ?> </h3>
</div>
<div>
    <h2><?php echo $eternals->title; ?></h2>
    <div>
        <span style="font-weight : bold">Movie Director:</span>
        <span><?php echo $eternals->movie_director; ?></span>
    </div>
    <div>
        <span style="font-weight : bold">Year:</span>
        <span><?php echo $eternals->year; ?></span>
    </div>
    <div>
        <span style="font-weight : bold">Genre:</span>
        <span><?php echo $eternals->genre; ?></span>
    </div>
    <h3>Summarizing: <?php echo $eternals->getInfoMovie(); ?> </h3>
</div>