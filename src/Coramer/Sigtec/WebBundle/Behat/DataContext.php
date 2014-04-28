<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Coramer\Sigtec\WebBundle\Behat;

use Behat\Behat\Context\BehatContext;
use Behat\Gherkin\Node\TableNode;
use Behat\Symfony2Extension\Context\KernelAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Faker\Factory as FakerFactory;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * Data writing and reading context.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class DataContext extends BehatContext implements KernelAwareInterface
{
    /**
     * Faker.
     *
     * @var Generator
     */
    protected $faker;

    public function __construct()
    {
        $this->faker = FakerFactory::create();
    }

    /**
     * {@inheritdoc}
     */
    public function setKernel(KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @Given /^there are following users:$/
     */
    public function thereAreFollowingUsers(TableNode $table)
    {
        foreach ($table->getHash() as $data) {
            $this->thereIsUser(
                $data['email'],
                isset($data['password']) ? $data['password'] : $this->faker->word(),
                'ROLE_USER',
                isset($data['enabled']) ? $data['enabled'] : 'yes',
                isset($data['address']) && !empty($data['address']) ? $data['address'] : null,
                false
            );
        }
    }

    public function thereIsUser($username, $password, $role = null, $enabled = 'yes', $address = null, $flush = true)
    {
        if (null === $user = $this->getUserManager()->findOneBy(array('username' => $username))) {
            
            /* @var $user UserInterface */
            $user = $this->getUserManager()->create();
            $user->setUsername($username);
            $user->setEmail($this->faker->email);
            $user->setEnabled('yes' === $enabled);
            $user->setPlainPassword($password);

            if (null !== $role) {
                $user->addRole($role);
            }
            
            if ($flush) {
                $this->getUserManager()->save($user);
            }
        }

        return $user;
    }

    /**
     * @Given /^there are groups:$/
     * @Given /^there are following groups:$/
     * @Given /^the following groups exist:$/
     */
    public function thereAreGroups(TableNode $table)
    {
        $manager = $this->getEntityManager();
        $repository = $this->getRepository('group');

        foreach ($table->getHash() as $data) {
            $group = $repository->createNew();
            $group->setName(trim($data['name']));

            $roles = explode(',', $data['roles']);
            $roles = array_map('trim', $roles);

            $group->setRoles($roles);

            $manager->persist($group);
        }

        $manager->flush();
    }

    /**
     * @Given /^I have deleted the ([^"]*) "([^""]*)"/
     */
    public function haveDeleted($resource, $name)
    {
        $resource = $this->findOneByName($resource, $name);

        $manager = $this->getEntityManager();
        $manager->remove($resource);
        $manager->flush();
    }

    /**
     * @Given /^(\w+) with following data should be created:$/
     */
    public function objectWithFollowingDataShouldBeCreated($type, TableNode $table)
    {
        $data = $table->getRowsHash();

        $object = $this->findOneByName($type, $data['name']);
        foreach ($data as $property => $value) {
            $objectValue = $object->{'get'.\ucfirst($property)}();
            if (is_array($objectValue)) {
                $objectValue = implode(',', $objectValue);;
            }
            if ($objectValue !== $value) {
                throw new \Exception(sprintf('%s object::%s has "%s" value but "%s" expected', $type, $property, $objectValue, $value));
            }
        }
    }
    
    /**
     * Proporciona unos contactos
     * @Given /^there are following contacs:$/
     */
    public function thereAreFollowingContacs(TableNode $table)
    {
        $manager = $this->getEntityManager();
        $repository = $this->getRepository('contact');
        foreach ($table->getHash() as $data) {
            $contact = $repository->createNew();
            $contact
                    ->setFirstName($data['firstName'])
                    ->setLastName($data['lastName'])
                    ->setPhone($data['phone'])
                    ->setEmail($data['email'])
                    ->setGender($data['gender'])
                    ->setActive($data['active'])
                    ;
            if($data['groups']){
                $group = $this->findOneBy('contact_group', array('name' => $data['groups']));
                if($group){
                    $contact->addGroup($group);
                }
            }
            $manager->persist($contact);
        }
        $manager->flush();
    }
    
    /**
     * Genera compañias
     * @Given /^there are following companies:$/
     */
    public function thereAreFollowingCompanies(TableNode $table)
    {
        $manager = $this->getEntityManager();
        $repository = $this->getRepository('company');
        foreach ($table->getHash() as $data) {
            $company = $repository->createNew();
            $company
                    ->setRif($data['rif'])
                    ->setName($data['name'])
                    ->setEmail($data['email'])
                    ->setStatus($data['status'] === 'yes')
                    ;
                $user = $this->getUserManager()->findOneBy(array('username' => $data['user']));
                $company->setUser($user);
            $manager->persist($company);
        }
        $manager->flush();
    }
    
    /**
     * @Given /^there is company "([^"]*)"$/
     */
    function thereIsCompany($rif)
    {
        $manager = $this->getEntityManager();
        $repository = $this->getRepository('company');
        $company = $repository->createNew();
        $company
                ->setRif($rif)
                ->setName($this->faker->name)
                ->setEmail($this->faker->email)
                ->setStatus(true)
                ;
        
                $contact = new \Coramer\Sigtec\CompanyBundle\Entity\Contact();
                $contact->setFirstName('Rafael')->setLastName('Carrillo')->setCharge('Contador');
                $contact->setCompany($company);
                
                $user = $this->getUserManager()->findOneBy(array('username' => 'client'));
                $company->setUser($user);
            $manager->persist($company);
            $manager->persist($contact);
        $manager->flush();
        return $company;
    }
    
     /**
     * @Given /^there are following plants:$/
     */
    public function thereAreFollowingPlants(TableNode $table)
    {
        $manager = $this->getEntityManager();
        $repository = $this->getRepository('company_plant');
        foreach ($table->getHash() as $data) {
            $plant = $repository->createNew();
            $plant
                    ->setName($data['name'])
                    ->setEmail($data['email'])
                    ->setAddress($data['address'])
                    ;
                $company = $this->findOneBy('company', array('rif' => $data['company']));
                $plant->setCompany($company);
            $manager->persist($plant);
        }
        $manager->flush();
    }


    /**
     * Find one resource by name.
     *
     * @param string $type
     * @param string $name
     *
     * @return object
     */
    public function findOneByName($type, $name)
    {
        return $this->findOneBy($type, array('name' => trim($name)));
    }

    /**
     * Find one resource by criteria.
     *
     * @param string $type
     * @param array  $criteria
     *
     * @return object
     *
     * @throws \InvalidArgumentException
     */
    public function findOneBy($type, array $criteria)
    {
        $resource = $this
            ->getRepository($type)
            ->findOneBy($criteria)
        ;

        if (null === $resource) {
            throw new \InvalidArgumentException(
                sprintf('%s for criteria "%s" was not found.', str_replace('_', ' ', ucfirst($type)), serialize($criteria))
            );
        }

        return $resource;
    }

    /**
     * Get repository by resource name.
     *
     * @param string $resource
     *
     * @return ObjectRepository
     */
    public function getRepository($resource)
    {
        return $this->getService('coramer_sigtec_backend.repository.'.$resource);
    }

    /**
     * Get entity manager.
     *
     * @return ObjectManager
     */
    public function getEntityManager()
    {
        return $this->getContainer()->get('doctrine')->getManager();
    }

    /**
     * Returns Container instance.
     *
     * @return ContainerInterface
     */
    protected function getContainer()
    {
        return $this->kernel->getContainer();
    }

    /**
     * Get service by id.
     *
     * @param string $id
     *
     * @return object
     */
    protected function getService($id)
    {
        return $this->getContainer()->get($id);
    }
    
    /**
     * Get security context.
     *
     * @return SecurityContextInterface
     */
    protected function getSecurityContext()
    {
        return $this->getContainer()->get('security.context');
    }
    
    /**
     * Get current user instance.
     *
     * @return null|UserInterface
     *
     * @throws \Exception
     */
    protected function getUser()
    {
        
        $token = $this->getSecurityContext()->getToken();

        if (null === $token) {
            throw new \Exception('No token found in security context.');
        }

        return $token->getUser();
    }
    
    protected function getUserManager()
    {
        return $this->getContainer()->get('fos_user.user_manager');
    }
}
