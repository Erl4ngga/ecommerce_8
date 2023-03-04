<?php

namespace Tests\Feature;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FrontEndTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_contact()
    {
        $response = $this->get('contact');

        $response->assertStatus(200);
    }
    public function test_product_list()
    {
        $user = User::factory()->create();
        $response = $this->actingAs($user)->get('product-list');
        $response->assertStatus(200);
    }
    public function test_faq()
    {
        $response = $this->get('contact');
        $response->assertStatus(200);
    }
    public function test_product_search()
    {
        $response = $this->get('product-search/index');
        $response->assertStatus(200);
    }
    public function test_about_us()
    {
        $response = $this->get('about-us');
        $response->assertStatus(200);
    }
    public function test_checkout()
    {
        $response = $this->get('checkout');
        $response->assertStatus(200);
    }
    public function test_user_login()
    {
        $response = $this->get('user/login');
        $response->assertStatus(200);
    }
    public function test_user_register()
    {
        $response = $this->get('user/register');
        $response->assertStatus(200);
    }


}
