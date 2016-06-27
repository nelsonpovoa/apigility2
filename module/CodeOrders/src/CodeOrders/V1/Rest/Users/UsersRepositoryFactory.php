<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 26-06-2016
 * Time: 23:34
 */

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class UsersRepositoryFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dbAdapter = $serviceLocator->get('DbAdapter');
        $usersMapper = new UsersMapper();
        $hydrator = new HydratingResultSet($usersMapper, new UsersEntity());

        $tableGateway = new TableGateway('oauth_users', $dbAdapter, null, $hydrator);

        $usersRepository = new UsersRepository($tableGateway);

        return $usersRepository;
    }

}