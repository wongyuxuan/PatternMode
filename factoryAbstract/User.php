<?php
namespace factoryAbstract;

/**
 * 用户表接口
 *
 * Interface User
 */
interface User
{
    /**
     * 插入
     *
     * @return mixed
     */
    public function insert();

    /**
     * 查询
     *
     * @return mixed
     */
    public function select();
}