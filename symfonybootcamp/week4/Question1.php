<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;


class CreateUserCommand extends Command
{

    protected static $defaultName = 'app:find-minmax';

    public function __construct()
    {
        parent::__construct();
    }

    protected function configure()
    {
        $this
        ->setDescription('Find Max-Min app')

        ->addArgument('boyut',InputArgument::REQUIRED,'Array Length');
    }

    private function sort($boyut){
        $dizi = array();

        for ($i=0;$i<$boyut;$i++){
            array_push($dizi,rand(0,200));
        }
        $min = $dizi[0];
        $max = $dizi[0];
        for ($i=0;$i<count($dizi);$i++){
            if ($dizi[$i]<$min)
                $min = $dizi[$i];
            if ($dizi[$i]>$max)
                $max=$dizi[$i];
        }

        echo 'En Büyük Sayı: '. $max . "\n" .'En Küçük Sayı: '. $min;
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->sort($input->getArgument('boyut')));

        return 0;
    }
}
