<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DashboardTest extends TestCase
{

    public function test_an_unauthenticated_user_cannot_access_this_page()
    {
    	$this->visit('/dashboard')
    		->seePageIs('/login');
    }
}
