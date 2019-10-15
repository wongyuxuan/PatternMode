<?php
namespace factoryAbstract;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:27 AM
 */
class OracleArticle implements Article
{
    public function insert()
    {
        echo '向oracle中插入article';
    }

    public function select()
    {
        echo '从oracle中查询article';
    }
}