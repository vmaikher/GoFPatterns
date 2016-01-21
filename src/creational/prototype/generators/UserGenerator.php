<?php

namespace patterns\creational\prototype\generators;

use patterns\creational\prototype\UserPrototype;

class UserGenerator
{
    protected $userPrototype;
    protected $generatedUsersCount = 0;

    /**
     * @param UserPrototype $userPrototype
     */
    public function setUserPrototype(UserPrototype $userPrototype)
    {
        $this->userPrototype = $userPrototype;
    }

    /**
     * @param int $count
     */
    public function generate($count)
    {
        if (!$this->userPrototype) {
            throw new \Exception('$userPrototype isn\'t set');
            return;
        }
        $users = array();

        for ($i = 0; $i < $count; $i++) {
            $user = clone $this->userPrototype;
            ++$this->generatedUsersCount;
            $user->setName('name' . $this->generatedUsersCount);
            $user->setLogin('user' . $this->generatedUsersCount);
            $user->setPassword('pass' . $this->generatedUsersCount);
            $users[] = $user;
        }

        return $users;
    }
}
