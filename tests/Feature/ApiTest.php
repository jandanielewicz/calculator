<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiTest extends TestCase
{


    /** @test */
    public function test_can_add()
    {
        $this->getJson('/api/add/2/2.5')
            ->assertSuccessful()
            ->assertOk()
            ->assertJsonStructure(['status', 'result'])
            ->assertJsonFragment([ 'result' => 4.5])
        ;
    }

    /** @test */
    public function test_can_substract()
    {
        $this->getJson('/api/substract/2.5/2')
            ->assertSuccessful()
            ->assertOk()
            ->assertJsonStructure(['status', 'result'])
            ->assertJsonFragment([ 'result' => 0.5])
        ;
    }



    /** @test */
    public function test_can_divide()
    {
        $this->getJson('/api/divide/2.5/2')
            ->assertSuccessful()
            ->assertOk()
            ->assertJsonStructure(['status', 'result'])
            ->assertJsonFragment([ 'result' => 1.25])
        ;
    }



    /** @test
     * @expectedException \ErrorException
     */

    public function test_cannot_divide_by_0()
    {
        $this->getJson('/api/divide/2.5/0')
            ->assertStatus(500);
    }


    /** @test */
    public function test_canot_add_strings()
    {
        $this->getJson('/api/add/foo/bar')
            ->assertStatus(500);
    }


}
