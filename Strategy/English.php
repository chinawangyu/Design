<?php

class English
{
    /**
     * 课程类型
     *
     * @return string
     */
    public function getType()
    {
        return '英语课程';
    }

    /**
     * 花费
     *
     * @param $num
     * @return float|int
     */
    public function cost($num)
    {
        return $num * 5;
    }
}