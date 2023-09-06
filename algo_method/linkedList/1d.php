<?php
// 連結リストの初期化
$nil = new stdClass();
$nil->nex = $nil;

// 連結リストへ先頭への要素の挿入
function insert($v, &$nil) {
    $v->nex = $nil->nex;
    $nil->nex = $v;
}

// 入力
$Q = (int) fgets(STDIN);
for ($query = 0; $query < $Q; $query++) {
    list($typ, $S) = explode(" ", trim(fgets(STDIN)));
    if ($typ == '0') {
        // ノードを作成して挿入する
        $v = new stdClass();
        $v->value = $S;
        insert($v, $nil);
    } else {
        // 先頭から k (=S) 個
        $v = $nil->nex;
        for ($i = 0; $i < intval($S) && $v !== $nil; $i++) {
            echo $v->value . ' ';
            $v = $v->nex;
        }
        echo PHP_EOL;
    }
}
