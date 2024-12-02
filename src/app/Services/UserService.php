<?php

namespace App\Services;

use App\Interfaces\UserInterface;

class UserService
{

    public function __construct(protected UserInterface $userInterface) 
    {
    }

    public function create($data){
        return $this->userInterface->create($data);
    }
    
}

