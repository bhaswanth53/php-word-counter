<?php
namespace WordCounter;

class Base {
    protected $text;
    protected $result;
    protected $sortBy;
    protected $desc;
    protected $minLen;

    public function __construct()
    {
        $this->text = "";
        $this->result = [];
        $this->sortBy = "number:desc";
        $this->desc = true;
        $this->minLen = 2;
    }

    public function setText($string)
    {
        $this->text = $string;
    }

    public function sortByNumber($order = "desc") {
        $this->sortBy = "number:{$order}";
    }

    public function sortByWord($order = "asc") {
        $this->sortBy = "word:{$order}";
    }

    public function setminLen($minLen) {
        $this->minLen = $minLen;
    }
}
