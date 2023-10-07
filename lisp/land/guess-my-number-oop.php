<?php

class Game {
    private $small;
    private $big;
    private $top;
    private $bottom;

    public function __construct($small=1,$big=100) {
        $this->bottom = $this->small = $small;
        $this->top = $this->big = $big;
    }
    public function guessMyNumber() {
        $guess = (int)floor(($this->small + $this->big) / 2);
        return $guess;
    }
    public function smaller() {
        $this->big = $this->guessMyNumber()-1;
        return $this->guessMyNumber();
    }
    public function bigger() {
        $this->small = $this->guessMyNumber()+1;
        return $this->guessMyNumber();
    }
    public function startOver($top,$bottom) {
        $this->big = $top;
        $this->small = $bottom;
        return $this->guessMyNumber();
    }
    public function start() {
        while (1) {
            echo '(' . $this->guessMyNumber(). ')';
            echo ">>>";
            $input = trim(fgets(STDIN));
            if ($input === "s") {
                $this->smaller() . PHP_EOL;
            } elseif ($input === "c") {
                $this->startOver($this->top,$this->bottom) . PHP_EOL;;
            } elseif ($input === "q" || $input === "e") {
                exit;
            } else {
                $this->bigger() . PHP_EOL;
            }
        }
    }
}
// コンストラクタの第1引数が下限、第2引数が上限となる
// 省略された場合、1,100を与えたのと同様
$game = new Game();
$game->start();
