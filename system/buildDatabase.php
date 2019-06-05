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
            $name = $input->getArgument($this->commandArgumentName);
            $db = new DB();
            if($db->connect()){

                    $db->createTable();
                    $text = ">>>>>> create table success! <<<<<<\n";
                    $output->writeln($text);

            }else{
                $text = "<fg=red>>>>>>> Database connect fail! <<<<<<</>\n".$arrayEnv['host']." | ". $arrayEnv['user'] ." | ". $arrayEnv['password'] ." | ". $arrayEnv['database'];
                $output->writeln($text);

            }

            if($name){

            if($name == "home"){
                if($db->connect()){
                    if($db->getValue() != 0){
                         $text = "<fg=red>>>>>>> data already exists! <<<<<<</>\n";
                        $output->writeln($text);
                    }else{
                        $db->insertTableHome();
                        $text = "<fg=yellow>>>>>>> insert data success! <<<<<<</>\n";;
                        $output->writeln($text);
                    }
                    
                }else{
                    $text = "<fg=red>>>>>>> Database connect fail! <<<<<<</>\n".$arrayEnv['host']." | ". $arrayEnv['user'] ." | ". $arrayEnv['password'] ." | ". $arrayEnv['database'];
                    $output->writeln($text);
                }
            }else if($name == "migrate"){
                if($db->connect()){
                    $db->insertDataAll();
                    $text = "<fg=yellow>>>>>>> insert data success! <<<<<<</>\n";;
                    $output->writeln($text);
                }
            }else{
                 $text = "<fg=red>>>>>>> nothing to do! <<<<<<</>\n";
                    $output->writeln($text);
            }

        }

        
    }
}
