<?php
Class Queue {

    private $list = [];

    /**
     * 配列の末尾にデータを追加
     *
     * @param string $item
     */
    public function add(string $item): void
    {
        array_push($this->list, $item);
    }

    /**
     * 配列の先頭からデータを取り出す
     *
     * @return string|null
     */
    public function get(): ?string
    {
        return array_shift($this->list);
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
