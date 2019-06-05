<?php
namespace minapp\system;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use minapp\system\DB;


class buildDatabase extends Command
{
    protected $commandName = 'database';
    protected $commandDescription = "Create database";

    protected $commandArgumentName = "name";
    protected $commandArgumentDescription = "What database do you want to create with?";

    protected $commandOptionName = "db"; // should be specified like "app:model myModel --db"
    protected $commandOptionDescription = 'If set, it will create a table based on the model';    

    protected function configure()
    {
        $this
            ->setName($this->commandName)
            ->setDescription($this->commandDescription)
            ->addArgument(
                $this->commandArgumentName,
                InputArgument::OPTIONAL,
                $this->commandArgumentDescription
            )
            ->addOption(
               $this->commandOptionName,
               null,
               InputOption::VALUE_NONE,
               $this->commandOptionDescription
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
     {
        // $name = $input->getArgument($this->commandArgumentName);
            $strJsonFileContents = file_get_contents(__DIR__."/env.json");
            $arrayEnv = json_decode($strJsonFileContents, true);
            $db = new DB($arrayEnv['host'],$arrayEnv['user'],$arrayEnv['password'],$arrayEnv['database']);
            if($db->connect()){

            }else{
                $text = ">>>>>> Database connect fail!<<<<<<\n".$arrayEnv['host']." | ". $arrayEnv['user'] ." | ". $arrayEnv['password'] ." | ". $arrayEnv['database'];
                $output->writeln($text);

            }
        
    }
}
