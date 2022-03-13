<?php

use App\Models\User;

test('if a guest will not see a protected route')
    ->get('api/me')
    ->assertStatus(401);

test('if guests can register')
    ->post('api/register', [
        'name' => 'example',
        'email' => 'example@example.com',
        'password' => 'example',
        'password_confirmation' => 'example'
    ])->assertJsonStructure([
        'access_token', 'token_type', 'expires_in'
    ])->assertStatus(200);

test('if a not registered user cannot loggin')
    ->post('api/login', [
        'email' => 'random@random.com',
        'password' => 'password'
    ])->assertJsonStructure([
        'error'
    ])->assertStatus(401);

test('if a user can login', function () {
    $user = User::factory()->create();
    test()->post('api/login', [
        'email' => $user->email,
        'password' => 'password'
    ])->assertJsonStructure([
        'access_token', 'token_type', 'expires_in'
    ])->assertStatus(200);
});
