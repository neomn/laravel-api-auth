<?php

namespace neomn\laraauthapi\tests\Feature;

use neomn\laraauthapi\tests\TestCase;

class SampleTest extends TestCase
{
    public function test_example_two()
    {
        $response = $this->get('/auth/login');
//        $response->assertJso('/auth/login');
    }
}