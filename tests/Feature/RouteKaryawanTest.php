<?php

namespace Tests\Feature;

use App\Http\Controllers\Karyawan;
use App\Models\karyawanM;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteKaryawanTest extends TestCase
{
    use RefreshDatabase;

    public function testredirectAuth()
    {
        $response = $this->get('/');
        $response->assertStatus(302);
    }
    public function testredirect()
    {
        $response = $this->get('/karyawan/adddata');
        $response->assertStatus(302);
    }
    public function testredirectpost()
    {
        $response = $this->post('/karyawan/senddata');
        $response->assertStatus(302);
    }
    public function testredirectdetailsid()
    {
        $response = $this->get('/karyawan/datadetails/{id}');
        $response->assertStatus(302);
    }


    // public function test_karyawan()
    // {
    //     $user = Karyawan::create();

    //     $response = $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'password',
    //     ]);

    //     $this->assertAuthenticated();
    //     $response->assertRedirect(RouteServiceProvider::HOME);
    // }

    // public function test_users_can_not_authenticate_with_invalid_password()
    // {
    //     $user = User::factory()->create();

    //     $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'wrong-password',
    //     ]);

    //     $this->assertGuest();
    // }
}
