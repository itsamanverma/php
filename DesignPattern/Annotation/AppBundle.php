<?php

namespace AppBundle\Workers;

use WorkerBundle\Annotation\Worker;
use WorkerBundle\Workers\WorkerInterface;

/**
 * Class SlowWorker
 *
 * @Worker(
 *     name = "Slow Worker",
 *     speed = 5
 * )
 */
class SlowWorker implements WorkerInterface
{

    /**
     * {@inheritdoc}
     */
    public function work()
    {
        return 'I work really slowly';
    }
}
$workers = $manager->getWorkers();
$workers = array_filter($workers, function($definition) {
    return $definition['annotation']->getSpeed() >= 5;
});
foreach($workers as $definition) {
    /** @var WorkerInterface $worker */
    $worker = $manager->create($definition['annotation']->getName());
    $worker->work();
}
