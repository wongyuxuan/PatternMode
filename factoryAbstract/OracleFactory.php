<?php
namespace factoryAbstract;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:34 AM
 */
class OracleFactory implements Factory
{
    public function createUser()
    {
        return new OracleUser();
    }

    public function createArticle()
    {
        return new OracleArticle();
    }
}