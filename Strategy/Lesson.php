<?php

class Lesson
{
    //课程数量
    private $_num;

    //策略属性,保存具体策略角色对象引用
    private $_stragety;

    public function __construct(int $_num, $stragety)
    {
        $this->_num = $_num;
        $this->_stragety = $stragety;
    }

    /**
     * 课程花费
     */
    public function cost()
    {
        return $this->_stragety->cost($this->_num);
    }

    /**
     * 获取名字
     *
     * @return mixed
     */
    public function getClass()
    {
        return $this->_stragety->getType();
    }

}