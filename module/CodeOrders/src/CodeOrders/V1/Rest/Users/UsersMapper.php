<?php
/**
 * Created by PhpStorm.
 * User: nelson
 * Date: 26-06-2016
 * Time: 23:07
 */

namespace CodeOrders\V1\Rest\Users;


use Zend\Stdlib\Hydrator\HydratorInterface;

class UsersMapper extends UsersEntity implements HydratorInterface
{
    /**
     * @param array $data
     * @param object $object
     */
    public function hydrate(array $data, $object)
    {
        $object->id = $data['id'];
        $object->username = $data['username'];
        $object->password = $data['password'];
        $object->first_name = $data['first_name'];
        $object->last_name = $data['last_name'];
        $object->role = $data['role'];

        return $object;
    }

    /**
     * @param $object
     * @return array
     */
    public function extract($object) {
        return [
            'id' => $object->id,
            'username' => $object->username,
            'password' => $object->password,
            'first_name' => $object->first_name,
            'last_name' => $object->last_name,
            'role' => $object->role
        ];
    }
}