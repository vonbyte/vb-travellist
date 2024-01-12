<?php

namespace Tests\Unit\Models;

use App\Models\PackingList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\TestsModelSpecification;

class PackingListSpecificationTest extends TestCase
{
    use TestsModelSpecification, RefreshDatabase;

    protected function setUp(): void
    {
        $this->className = PackingList::class;
        $this->factory = PackingList::factory();
        $this->fields = [
            "name",
            "startDate",
            "endDate",
            "description",
            "notes"
        ];

        $this->requiredFields = [
            "name"
        ];

        parent::setUp();
    }

    /**
     * @test
     */
    public function it_has_the_correct_attributes()
    {
        // Could be a mock
        // but I was lazy
        // use a laravel factory and check if fields are correctly set
        $this->assertFields();
    }

    /**
     * @test
     */
    public function it_can_be_written_to_the_database()
    {
        // isn't a common unit test approach, because of database integration
        $relations = [];
        $data = ['name' => 'My unique Packing list'];
        $this->assertIsInDatabase($data, $relations);
        }

    /**
     * @test
     */
    public function it_cannot_be_written_to_the_db_without_required_fields()
    {
        $relations = [];
        $this->assertRequiredFields($relations);

            }
}
