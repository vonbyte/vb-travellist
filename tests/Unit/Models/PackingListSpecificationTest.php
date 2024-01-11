<?php

namespace Tests\Unit\Models;

use App\Models\PackingList;
use PHPUnit\Framework\TestCase;
use Tests\Traits\TestsModelSpecification;

class PackingListSpecificationTest extends TestCase
{
    use TestsModelSpecification;

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
}
