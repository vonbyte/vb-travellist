<?php

namespace Tests\Feature\PackingList;

use App\Models\PackingList;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Traits\HasAuthUsers;
use Tests\Traits\TestsEntityCrud;

class ManagePackingListTest extends TestCase
{
    use RefreshDatabase,HasAuthUsers, TestsEntityCrud;

    protected function setUp(): void
    {
        parent::setUp();
        $this->runUserCreation();
        $this->actingAs($this->user);
        $this->className = PackingList::class;
        $this->factory = PackingList::factory();
    }

    /**
     * @test
     */
    public function it_can_create_a_packinglist()
    {
        $this->assertEntityCreated('packinglist.store');

        }
}
