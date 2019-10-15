<?php
namespace protoType;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 4:40 PM
 */
class DoSport
{
    private $sport;

    public function __construct()
    {
        echo '做运动了';
    }

    public function setSport(Sport $sport)
    {
        $this->sport = $sport;
    }

    public function play()
    {
        echo '蔡徐坤开始打' .$this->sport->sportName ;
        echo '<br/>';
    }

    public function __clone()
    {
        $this->sport = clone $this->sport;
    }
}