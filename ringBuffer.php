<?php
class RingBuffer {

    /**
     * @var array
     */
    private $list = [];

    /**
     * @var int
     */
    private $start = 0;

    /**
     * @var int
     */
    private $end = 0;

    /**
     * 配列にデータを追加する
     *
     * @param string $item
     * @param int|null $index
     */
    public function add(string $item, int $index = null): void
    {
        if (is_null($index)) { // indexの指定がない場合は末尾に追加する
            $this->end = $this->end + 1;
            array_push($this->list, $item);
        } else { // indexの指定がある場合
            $i = $this->start + $indexl;
            array_splice($this->list, $i, 1, [$item]);
        }
    }

    /**
     * 指定されたindexのデータを返す
     *
     * @param  int    $index
     * @return string
     */
    public function get(int $index): string
    {
        $i = $this->start + $index;
        return array_slice($this->list, $index);
    }

    /**
     * 配列を返す
     *
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }
}
