<?php
Class BubbleSort {

    /**
     * バブルソートを行う
     *
     * @param  array
     * @return array
     */
    public function sort(array $array): array
    {
        $size = count($array);

        // 配列を先頭から最後まで見るループ
        // 植木算なので$size-1回で良い
        for($i=0; $i<$size-1; $i++) {
            // 実際に比較を行う処理
            // キーなし落ち防止のため、$j=1からはじまるので、ループ回数は実質植木算
            for ($j=1; $j<$size; $j++) {
                if ($array[$j-1] > $array[$j]) {
                    $tmp = $array[$j];
                    $array[$j] = $array[$j-1];
                    $array[$j-1] = $tmp;
                }
            }
        }

        return $array;
    }
}
