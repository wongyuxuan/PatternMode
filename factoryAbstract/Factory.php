<?php
namespace factoryAbstract;

/**
 * Created by PhpStorm.
 * User: wong
 * Date: 2019/10/15
 * Time: 11:30 AM
 */
interface Factory
{
    public function createUser();

    public function createArticle();
}