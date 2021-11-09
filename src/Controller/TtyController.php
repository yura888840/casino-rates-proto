<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Process\Process;
use Symfony\Component\Routing\Annotation\Route;


class TtyController  extends AbstractController
{
    /**
     * @Route("/vim", name="vim_edit")
     */
    public function vim()
    {

        $process = new Process(['vim']);
        $process->setTty(true);
        $process->run();

// As the output is connected to the terminal, it is no longer possible
// to read or modify the output from the process!
        dump($process->getOutput()); // null
    }
}
