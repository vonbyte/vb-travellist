<?php


namespace Tests\Traits;


use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

/**
 * Trait TestsModelSpecification
 * @package Tests\Traits
 */
trait HasAuthUsers
{
    /**
     * @var User
     */
    protected $admin;

    /**
     * @var User
     */
    protected $user;
    /**
     * @var User
     */
    protected $guest;

    public function setup(): void
    {
        parent::setUp();

        $this->runUserCreation();
    }

    protected function runUserCreation(): void
    {
        $this->admin = User::factory()->forRole(['name' => 'admin'])->create();
        $this->user = User::factory()->forRole(['name' => 'user'])->create();
    }
}
