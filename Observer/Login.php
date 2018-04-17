<?php

require './EventBase.php';
require './Email.php';
require './Phone.php';

/**
 * 观察者模式
 */
class Login
{
    private $_observers = [];

    //登陆操作
    public function doLogin(String $account)
    {
        echo "执行登陆逻辑\n";
        $this->notify();
    }

    //注册观察者   eventBase 为事件共同继承的
    public function attach(EventBase $observer)
    {
        $this->_observers[] = $observer;
    }

    //通知观察者
    public function notify()
    {
        foreach ($this->_observers as $observer) {
            $observer->update($this);
        }
    }
}

$account = '1354095170@qq.com';
$login = new Login();
$login->attach(new Email($account));
$login->attach(new Phone($account));
$login->doLogin($account);