<?php

$N = (int) fgets(STDIN);
$list = new CircularList();
for ($i = 1; $i <= $N; $i++) {
    $list->insert($i);
}


class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

class CircularList {
    private $head;
    private $tail;
    public function __construct() {
        $this->head = null;
        // $this->tail = null;
    }
    public function insert($data) {
        $newNode = new Node($data);
        if ($this->head === null) {
            $this->head = $newNode;
            $this->tail = $newNode;
        } else {
            $this->tail->next = $newNode;
            $this->tail = $newNode;
        }
        $this->tail->next = $this->head;
    }
    public function remove($data) {
        if ($this->head === null) {
            return;
        }
        $prev = null;
        $current = $this->head;
        do {
            if ($current->data === $data) {
                if ($prev === null) {
                    $this->head = $current->next;
                    $this->tail->next = $this->head;
                } else {
                    $prev->next = $current->next;
                    if ($current === $this->tail) {
                        $this->tail = $prev;
                    }
                }
                return;
            }
            $prev = $current;
            $current = $current->next;
        } while ($current !== $this->head);
    }
}
