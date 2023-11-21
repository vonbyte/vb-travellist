<?php

namespace Tests\Feature\User;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\TestsModelSpecification;

class UserSpecificationTest extends TestCase
{
    use TestsModelSpecification, RefreshDatabase;

    protected function setUp(): void
    {
        $this->factory = User::factory();
        $this->className = User::class;
        $this->fields = [
            'name',
            'password',
            'email',
            'remember_token'
        ];
        $this->requiredFields = [
            'name',
            'password',
            'email'
        ];
        parent::setUp();
    }

    /**
     * @test
     */
    public function it_has_the_needed_attributes()
    {
        $this->assertFields();
        }

    /**
     * @test
     */
    public function it_is_written_to_the_database()
    {
        $this->assertIsInDatabase(['name' => 'Tanja Bräther']);
}

    /**
     * @test
     */
    public function it_cannot_be_written_to_the_db_without_required_fields()
    {
        $this->assertRequiredFields();
    }
}
