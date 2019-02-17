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

        } else { // indexの指定がある場合

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
