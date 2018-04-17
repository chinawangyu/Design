<?php

/**
 * 邮件发送
 */
class Email extends  EventBase
{
    private $account = [];

    public function __construct(String $account = null)
    {
        $this->account = $account;
    }

    public function update()
    {
        //邮件逻辑逻辑处理1
        echo "发送提醒邮件$this->account\n";
    }
}