<?php
// 連結リストの各ノード
class Node {
    public $nex;  // 次がどのノードを指すか
    public $value;  // ノードに付随している値

    public function __construct($value = '') {
        $this->nex = null;
        $this->value = $value;
    }

    public function insert($nil) {
        $this->nex = $nil->nex;
        $nil->nex = $this;
    }
}

// 連結リストの初期化
$nil = new Node();
$nil->nex = $nil;

// 入力
$Q = (int) fgets(STDIN);
for ($query = 0; $query < $Q; $query++) {
    list($typ, $S) = explode(" ", trim(fgets(STDIN)));
    if ($typ == '0') {
        // ノードを作成して挿入する
        $v = new Node($S);
        $v->insert($nil);
    } else {
        // 先頭から k (=S) 個
        $v = $nil;
        for ($i = 0; $i < intval($S); $i++) {
            $v = $v->nex;
            if ($v === $nil) {
                break;
            }
            echo $v->value . ' ';
        }
        echo PHP_EOL;
    }
}
