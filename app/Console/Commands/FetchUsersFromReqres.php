<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\UserApi;

class FetchUsersFromReqres extends Command
{
    protected $signature = 'fetch:reqres-users';
    protected $description = 'Ambil user dari reqres.in dan simpan ke database';

    public function handle()
    {
        for ($page = 1; $page <= 2; $page++) {
            $response = Http::get("https://reqres.in/api/users?page=$page");

            foreach ($response['data'] as $user) {
                UserApi::updateOrCreate(
                    ['api_id' => $user['id']],
                    [
                        'email' => $user['email'],
                        'first_name' => $user['first_name'],
                        'last_name' => $user['last_name'],
                        'avatar' => $user['avatar']
                    ]
                );
            }
        }

        $this->info('Data user berhasil diambil dari reqres.in');
    }
}
