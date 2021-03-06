<?php namespace Laggards\laravelchartjs\Contracts;

/**
 * Interface ChartjsInterface
 * @package Laggards\Laravelchartjs
 */
interface Chartjs
{
    /**
     * This method is a contract for all charts implements
     * Prepare the data that was received to be compatible with the requirements of chartjs
     *
     * @param $canvas
     * @param array $data
     * @param $options
     * @return mixed
     */
    public function render($canvas, array $data, array $options = null);
}