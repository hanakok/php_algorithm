<?php
    require_once 'queue.php';

    // 配列にデータを追加します
    $que = new Queue();
    $que->add('いろは');
    $que->add('にほへ');
    $que->add('とちり');

    echo '======キュー======<br />';
    // データを追加した順番で取り出します
    foreach ($que->getList() as $key => $item) {
        echo '[' . $key . ']' . $que->get() . '<br />';
    }
