<?php
class Stack {
    private $nil;

    public function __construct() {
        $this->nil = new Node();
        $this->nil->nex = $this->nil;
    }

    public function insert($v) {
        $v->nex = $this->nil->nex;
        $this->nil->nex = $v;
    }

    public function erase() {
        $front = $this->nil->nex;
        if ($front === $this->nil) {
            return 'Error';
        } else {
            $ret = $front->value;
            $this->nil->nex = $front->nex;
            unset($front);
            return $ret;
        }
    }
}

class Node {
    public $nex;
    public $value;

    public function __construct($value = '') {
        $this->nex = null;
        $this->value = $value;
    }
}

$stack = new Stack();
$Q = intval(fgets(STDIN));

for ($i = 0; $i < $Q; $i++) {
    $query = explode(" ", trim(fgets(STDIN)));
    $query_type = intval($query[0]);

    if ($query_type === 0) {
        $S = $query[1];
        $v = new Node($S);
        $stack->insert($v);
    } else {
        echo $stack->erase() . PHP_EOL;
    }
}
