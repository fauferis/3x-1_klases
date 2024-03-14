<?php

class trysxsk {
    public $start;
    public $end;
    public $haha = [];

    public function __construct($start, $end) { // naujas komentaras - pradzia / pabaiga...
        $this->start = $start;
        $this->end = $end;
    }

    public function collatz_interval() {
        $result = [];

        foreach (range($this->start, $this->end) as $n) {
            $num_int = [$n];
            $iterations = 1;
            $maxSize = 1;
            $minSize = $n;

            if ($n < 1) {
                $result[] = ['seka' => [], 'iterations' => 0, 'maxSize' => 0, 'minSize' => 0];
                continue;
            }

            while ($n > 1) {
                if ($n % 2 == 0) {
                    $n = $n / 2;
                } else {
                    $n = 3 * $n + 1;
                }

                array_push($num_int, $n);
                $iterations++;
                $maxSize = max($maxSize, $n);
                $minSize = min($minSize, $n);
            }

            $result[] = ['seka' => $num_int, 'iterations' => $iterations, 'maxSize' => $maxSize, 'minSize' => $minSize];
            $this->histograma($iterations);
        }

        return $result;
    }

    public function histograma($iterations) {
        if (isset($this->haha[$iterations])) {
            $this->haha[$iterations]++;
        } else {
            $this->haha[$iterations] = 1;
        }
    }

    public function histogram_atvz() {
        foreach ($this->haha as $iterac => $kart) {
            echo "<b> $iterac </b> iteracijos-(u) pasikartojo <b> $kart </b> kartus-(u) <br>";
        }
    }
}

?>
