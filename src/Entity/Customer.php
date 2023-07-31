<?php

namespace Entity;

class Customer extends BaseUser
{
    public function __construct(string $id, string $name, string $email)
    {
        parent::__construct($id, $name, $email, Role::Customer);
    }
}
