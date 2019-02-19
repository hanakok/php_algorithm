<?php
class RingBuffer {

    /**
     * @var array
     */
    private $list = [];

    /**
     * リングバッファの大きさ
     *
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $start = 0;

    /**
     * @var int
     */
    private $end = -1;

    public function __construct(int $size)
    {
        $this->size = $size;
    }

    /**
     * 配列にデータを追加する
     *
     * @param string $item
     * @param int|null $index
     */
    public function add(string $item, int $index = null): void
    {
        if (is_null($index)) { // indexの指定がない場合は末尾に追加する
            $this->end = ($this->end + 1) % $this->size;
            $this->list[$this->end] =  $item;
            if ($this->start >= $this->end) {
                $this->start = $this->end + 1;
            }
        } else { // indexの指定がある場合
            $i = ($this->start + $index) % $this->size;
            $this->list[$i] =  $item;
        }
    }

    /**
     * 指定されたindexのデータを返す
     *
     * @param  int|null    $index
     * @return string
     */
    public function get(int $index = null): string
    {
        if (is_null($index)) {
            return array_shift($this->list);
        } else {
            $i = ($this->start + $index) % $this->size;
            return $this->list[$i];
        }
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
