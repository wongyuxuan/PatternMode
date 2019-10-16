<?php
namespace builder;

/**
 * 产品类接口
 *
 * Interface ProductInterface
 */
interface ProductInterface
{
    /**
     * 硬件构建
     * @return mixed
     */
    public function hardware();

    /**
     * 软件构建
     * @return mixed
     */
    public function software();
}