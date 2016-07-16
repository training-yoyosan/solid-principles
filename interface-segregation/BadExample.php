<?php

interface WorkerInterface
{
    public function work();
    public function sleep();
}

class HumanWorker implements WorkerInterface
{
    public function work()
    {
        return 'Human working.';
    }

    public function sleep()
    {
        return 'Human sleeping.';
    }
}

class AndroidWorker implements WorkerInterface
{
    public function work()
    {
        return 'Android working.';
    }

    public function sleep()
    {
        /*
            Problem: An android doesn't need to sleep, therefore this
            method is not needed, but is forced upon due to
            the interface contract.
         */
        return null; //
    }
}

class Captain
{
    public function manage(WorkerInterface $worker)
    {
        $worker->work();
        /*
            Problem: To avoid calling sleep on the Android object,
            we would need to break the Open-Closed Principle by
            adding an instanceof check.
         */
        $worker->sleep();
    }
}