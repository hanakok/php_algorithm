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

        for($i=0; $i<$size; $i++) {
            for ($j=0; $j<$size; $j++) {
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
