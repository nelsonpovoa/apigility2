<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 26-06-2016
 * Time: 23:29
 */

namespace CodeOrders\V1\Rest\Users;


use Zend\Db\TableGateway\TableGateway;
use Zend\Db\TableGateway\TableGatewayInterface;

class UsersRepository
{

    /**
     * @var TableGatewayInterface
     */
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway) {
        $this->tableGateway = $tableGateway;
    }

    public function findAll(){
        return $this->tableGateway->select();
    }
}