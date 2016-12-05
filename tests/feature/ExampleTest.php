<?php

class ExampleTest extends FeatureTestCase
{
    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Marco Perafan',
            'email' => 'admin@digitaldatos.net',
        ]);
        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Marco Perafan')
            ->see('admin@digitaldatos.net');
    }
