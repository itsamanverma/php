<?php

namespace WorkerBundle\Workers;
/**
 * @Worker(
 *     name = "The unique Worker name",
 *     speed = 10
 * )
 */
interface WorkerInterface
{
    /**
     * Does the work
     *
     * @return NULL
     */
    public function work();
}