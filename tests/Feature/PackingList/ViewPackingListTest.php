<?php

namespace Tests\Feature\PackingList;

use App\Models\PackingList;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tests\Traits\HasAuthUsers;
use Tests\Traits\TestsEntityCrudViews;

class ViewPackingListTest extends TestCase
{
    use TestsEntityCrudViews, RefreshDatabase, HasAuthUsers;

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
    public function it_shows_a_link_on_the_dashboard_that_calls_the_create_form_landingpage()
    {

        $url = route('packinglist.new');
        $this->get(route('dashboard'))
            ->assertSeeInOrder([
                $url,
                trans('packinglists.links.new')
            ]);
    }

    /**
     * @test
     */
    public function it_shows_an_empty_form_on_the_create_form_landingpage()
    {
        $this->assertEmptyFormIsShown('packinglist.new','packinglist.form','name');
        }
}
