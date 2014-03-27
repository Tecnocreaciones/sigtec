<?php

namespace Tecnocreaciones\Bundle\InstallBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use RuntimeException;

class InstallCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('tec:install')
            ->setDescription('Install the application')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $env = $input->getOption('env');
        $output->writeln(sprintf('<info>Installing App in environment "%s".</info>',$env));
        $output->writeln('');

        $this
            //->checkStep($input, $output)
            ->setupStep($input, $output)
        ;

        $output->writeln('<info>App has been successfully installed.</info>');
    }

    protected function checkStep(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Checking system requirements.</info>');

        $fulfilled = true;

        foreach ($this->getContainer()->get('sylius.requirements') as $collection) {
            $output->writeln(sprintf('<comment>%s</comment>', $collection->getLabel()));
            foreach ($collection as $requirement) {
                $output->write($requirement->getLabel());
                if ($requirement->isFulfilled()) {
                    $output->writeln(' <info>OK</info>');
                } else {
                    if ($requirement->isRequired()) {
                        $fulfilled = false;
                        $output->writeln(' <error>ERROR</error>');
                        $output->writeln(sprintf('<comment>%s</comment>', $requirement->getHelp()));
                    } else {
                        $output->writeln(' <comment>WARNING</comment>');
                    }
                }
            }
        }

        if (!$fulfilled) {
            throw new RuntimeException('Some system requirements are not fulfilled. Please check output messages and fix them.');
        }

        $output->writeln('');

        return $this;
    }

    protected function setupStep(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Setting up database.</info>');

        $dialog = $this->getHelperSet()->get('dialog');

        $this
            ->runCommand('doctrine:database:create', $input, $output)
            ->runCommand('doctrine:schema:create', $input, $output)
            //->runCommand('doctrine:phpcr:repository:init', $input, $output)
            ->runCommand('assetic:dump', $input, $output)
            ->runCommand('assets:install', $input, $output)
        ;
//        try {
//            $this
//                ->getApplication()
//                ->find('doctrine:phpcr:repository:init');
//            
//        } catch (\InvalidArgumentException $exc) {
//            echo $exc->getMessage();
//        }

        if ($dialog->askConfirmation($output, '<question>Load fixtures (Y/N)?</question>', false)) {
            $this->runCommand('doctrine:fixtures:load', $input, $output);
        }

        $output->writeln('');
        $output->writeln('<info>Administration setup.</info>');

        $userClass = $this->getContainer()->getParameter('tec_install.model.user.class');
        $user = new $userClass;
        
        $username = $this->getContainer()->getParameter('tec_install.credentials.username');
        $password = $this->getContainer()->getParameter('tec_install.credentials.password');
        $email = $this->getContainer()->getParameter('tec_install.credentials.email');
        $role = $this->getContainer()->getParameter('tec_install.credentials.role');
         
        $username = $dialog->ask($output, sprintf('<question>Username[%s]:</question>',$username),$username);
        $password = $dialog->ask($output, sprintf('<question>Password[%s]:</question>',$password),$password);
        $email = $dialog->ask($output, sprintf('<question>Email[%s]:</question>',$email),$email);
        $role = $dialog->ask($output, sprintf('<question>Role[%s]:</question>',$role),$role);
        $user->setUsername($username);
        $user->setPlainPassword($password);
        $user->setEmail($email);
        $user->setEnabled(true);
        $user->setRoles(array($role));

        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $em->persist($user);
        $em->flush();

        $output->writeln('');

        return $this;
    }

    private function runCommand($command, InputInterface $input, OutputInterface $output)
    {
        $this
            ->getApplication()
            ->find($command)
            ->run($input, $output)
        ;

        return $this;
    }
}
