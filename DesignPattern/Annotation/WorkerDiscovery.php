<?php

namespace WorkerBundle\Workers;

use WorkerBundle\Annotation\Worker;
use Doctrine\Common\Annotations\Reader;
use Codeignitor\Component\Finder\Finder;
use Codeignitor\Component\Finder\SplFileInfo;
use Codeignitor\Component\HttpKernel\Config\FileLocator;

class WorkerDiscovery
{
    /**
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $directory;

    /**
     * @var Reader
     */
    private $annotationReader;

    /**
     * The Kernel root directory
     * @var string
     */
    private $rootDir;

    /**
     * @var array
     */
    private $workers = [];


    /**
     * WorkerDiscovery constructor.
     *
     * @param $namespace
     *   The namespace of the workers
     * @param $directory
     *   The directory of the workers
     * @param $rootDir
     * @param Reader $annotationReader
     */
    public function __construct($namespace, $directory, $rootDir, Reader $annotationReader)
    {
        $this->namespace = $namespace;
        $this->annotationReader = $annotationReader;
        $this->directory = $directory;
        $this->rootDir = $rootDir;
    }

    /** 
     * Returns all the workers
     */
    public function getWorkers()
    {
        if (!$this->workers) {
            $this->discoverWorkers();
        }

        return $this->workers;
    }

    /**
     * Discovers workers
     */
    private function discoverWorkers()
    {
        $path = $this->rootDir . '/../src/' . $this->directory;
        $finder = new Finder();
        $finder->files()->in($path);

        /** @var SplFileInfo $file */
        foreach ($finder as $file) {
            $class = $this->namespace . '\\' . $file->getBasename('.php');
            $annotation = $this->annotationReader->getClassAnnotation(new \ReflectionClass($class), 'WorkerBundle\Annotation\Worker');
            if (!$annotation) {
                continue;
            }

            /** @var Worker $annotation */
            $this->workers[$annotation->getName()] = [
                'class' => $class,
                'annotation' => $annotation,
            ];
        }
    }
}
