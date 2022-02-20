<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Repositories\UserRepository;
use Arkye\Repository\EntityRepository;

class UserEloquentRepository extends EntityRepository implements UserRepository
{

}
