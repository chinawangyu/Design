<?php

/**
 * 手机号码服务
 */
class Phone extends EventBase
{
    private $account = '';

    public function __construct(String $account = null)
    {
        $this->account = $account;
    }

    public function update()
    {
        //处理一些业务逻辑
        echo "发送短信提醒$this->account\n";
    }
}