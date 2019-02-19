<?php
    //// キュー
    require_once 'queue.php';
    // 配列にデータを追加します
    $queue = new Queue();
    $queue->add('いろは');
    $queue->add('にほへ');
    $queue->add('とちり');

    echo '======キュー======<br />';
    // データを追加した順番で取り出します
    foreach ($queue->getList() as $item) {
        echo $queue->get() . '<br />';
    }

    echo '<br />';

    //// スタック
    require_once 'stack.php';
    // 配列にデータを追加します
    $stack = new Stack();
    $stack->add('いろは');
    $stack->add('にほへ');
    $stack->add('とちり');

    echo '======スタック======<br />';
    // データを最近追加した順で取り出します
    foreach ($stack->getList() as $item) {
        echo $stack->get() . '<br />';
    }

    echo '<br />';

    //// リングバッファ
    require_once 'ringBuffer.php';
    // 配列にデータを追加します
    $size = 3;
    $buffer = new RingBuffer($size);
    $buffer->add('にほへ');
    $buffer->add('とちり');
    $buffer->add('いろは', 0);
    $buffer->add('ぬるを');

    echo '======リングバッファ======<br />';
    // データをインデックス順で取り出します
    foreach ($buffer->getList() as $item) {
        echo $buffer->get() . '<br />';
    }

    echo '<br />';
