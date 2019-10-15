<?php
namespace factoryAbstractWithSimpleFactory;

/**
 * 文章表接口
 *
 * Interface Article
 */
interface Article
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