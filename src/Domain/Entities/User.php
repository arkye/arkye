<?php

namespace App\Domain\Entities;

use Carbon\Carbon;

class User
{

  public int $id;
  public ?Carbon $createdAt;
  public ?Carbon $updatedAt;
  public string $name;
  public string $email;
  public ?Carbon $emailVerifiedAt;
  public string $password;
  public ?string $remember_token;

}
