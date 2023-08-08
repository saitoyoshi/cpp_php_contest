<?php

class Node {
    public $nex;  // 次がどのノードを指すか
    public $value;  // ノードに付随している値

    public function __construct($value = '') {
        $this->nex = null;
        $this->value = $value;
    }
}

// 連結リストの初期化
$nil = new Node();
$nil->nex = $nil;

// 連結リストへ先頭への要素の挿入
function insert(&$nil, $v) {
    $v->nex = $nil->nex;
    $nil->nex = $v;
}

// 入力
$Q = intval(trim(fgets(STDIN)));
for ($query = 0; $query < $Q; $query++) {
    [$typ, $S] = explode(" ", trim(fgets(STDIN)));
    if ($typ == '0') {
        // ノードを作成する
        $v = new Node($S);
        insert($nil, $v);
    } else {
        // 先頭から k (=S) 個
        $v = $nil->nex;
        for ($i = 0; $i < intval($S); $i++) {
            if ($v == $nil) {
                break;
            }
            echo $v->value . " ";
            $v = $v->nex;
        }
        echo PHP_EOL;
    }
}
?>
