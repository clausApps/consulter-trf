<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Site;

class SiteSeeder extends Seeder
{
    public function run(): void
    {
        $sites = collect(range(1, 6))->map(function ($i) {
            return [
                'nome' => "TRF{$i}",
                'url' => "https://www.trf{$i}.jus.br",
                'login_field' => 'usuario',
                'password_field' => 'senha',
            ];
        });

        $sites->each(fn ($data) => Site::create($data));
    }
}
