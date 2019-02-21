<?php

namespace WorkerBundle\Workers;

class WorkerManager
{
    /**
     * @var WorkerDiscovery
     */
    private $discovery;


    public function __construct(WorkerDiscovery $discovery)
    {
        $this->discovery = $discovery;
    }

    /**
     * Returns a list of available workers.
     *
     * @return array
     */
    public function getWorkers()
    {
        return $this->discovery->getWorkers();
    }

    /**
     * Returns one worker by name
     *
     * @param $name
     * @return array
     *
     * @throws \Exception
     */
    public function getWorker($name)
    {
        $workers = $this->discovery->getWorkers();
        if (isset($workers[$name])) {
            return $workers[$name];
        }

        throw new \Exception('Worker not found.');
    }

    /**
     * Creates a worker
     *
     * @param $name
     * @return WorkerInterface
     *
     * @throws \Exception
     */
    public function create($name)
    {
        $workers = $this->discovery->getWorkers();
        if (array_key_exists($name, $workers)) {
            $class = $workers[$name]['class'];
            if (!class_exists($class)) {
                throw new \Exception('Worker class does not exist.');
            }
            return new $class();
        }

        throw new \Exception('Worker does not exist.');
    }
}

