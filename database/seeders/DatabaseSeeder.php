<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Site;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuário administrador
        User::create([
            'name' => 'Admin',
            'email' => 'admin@consulter.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        // Usuários de exemplo
        collect([
            ['name' => 'João Advogado', 'email' => 'joao@consulter.com', 'role' => 'advogado'],
            ['name' => 'Maria Compradora', 'email' => 'maria@consulter.com', 'role' => 'comprador'],
            ['name' => 'Carlos Usuário', 'email' => 'carlos@consulter.com', 'role' => 'usuario'],
        ])->each(fn($u) => User::create([
            'name' => $u['name'],
            'email' => $u['email'],
            'password' => Hash::make('12345678'),
            'role' => $u['role'],
        ]));

        // Sites TRF de exemplo
        collect([
            [
                'nome' => 'TRF6 - Consulta Processual',
                'url_login' => 'https://eproc1g.trf6.jus.br/eproc/controlador.php?acao=login',
                'url_base' => 'https://eproc1g.trf6.jus.br',
                'metodo_autenticacao' => '2fa',
                'campos_extraidos' => json_encode(['nome', 'advogado', 'vara', 'endereco']),
            ],
            [
                'nome' => 'TRF1 - Eproc',
                'url_login' => 'https://processual.trf1.jus.br/eproc',
                'url_base' => 'https://processual.trf1.jus.br',
                'metodo_autenticacao' => 'basico',
                'campos_extraidos' => json_encode(['nome', 'cpf', 'processo', 'data_distribuicao']),
            ]
        ])->each(fn($site) => Site::create($site));


\DB::table('processos')->insert([
        'numero' => '8799178-86.4.2020.28.3132',
        'nome_autor' => 'Sarah Fernandes',
        'advogado' => 'Leandro Silveira',
        'vara' => '9ª Vara Federal',
        'valor_causa' => 283818,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]);
\DB::table('processos')->insert([
        'numero' => '7281943-70.4.2021.48.1637',
        'nome_autor' => 'Mirella Cardoso',
        'advogado' => 'Diogo Gomes',
        'vara' => '10ª Vara Federal',
        'valor_causa' => 469080,
        'user_id' => 2,
        'created_at' => now(),
        'updated_at' => now()
    ]);
\DB::table('processos')->insert([
        'numero' => '2554835-94.4.2022.78.2640',
        'nome_autor' => 'Maria Luiza Moura',
        'advogado' => 'Beatriz Carvalho',
        'vara' => '10ª Vara Federal',
        'valor_causa' => 93232,
        'user_id' => 3,
        'created_at' => now(),
        'updated_at' => now()
    ]);
\DB::table('processos')->insert([
        'numero' => '1698402-80.4.2022.15.2188',
        'nome_autor' => 'Rafael Mendes',
        'advogado' => 'Luiz Otávio Azevedo',
        'vara' => '5ª Vara Federal',
        'valor_causa' => 499053,
        'user_id' => 4,
        'created_at' => now(),
        'updated_at' => now()
    ]);
\DB::table('processos')->insert([
        'numero' => '5433847-44.4.2021.30.7766',
        'nome_autor' => 'Daniel das Neves',
        'advogado' => 'Ryan da Mota',
        'vara' => '7ª Vara Federal',
        'valor_causa' => 99887,
        'user_id' => 1,
        'created_at' => now(),
        'updated_at' => now()
    ]);
\DB::table('andamentos')->insert([
            'processo_id' => 1,
            'descricao' => 'Vero pariatur sit cupiditate maiores.',
            'data' => '2024-11-30',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 1,
            'descricao' => 'Quos perferendis soluta iure eos ab.',
            'data' => '2024-08-24',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 1,
            'descricao' => 'Sint voluptatem ab quas pariatur labore sit.',
            'data' => '2024-10-15',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 2,
            'descricao' => 'Impedit consectetur ipsam.',
            'data' => '2024-04-13',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 2,
            'descricao' => 'Dolorum itaque porro vero odio quo similique.',
            'data' => '2024-12-07',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 2,
            'descricao' => 'Voluptatum corporis distinctio tempora.',
            'data' => '2025-03-22',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 3,
            'descricao' => 'Enim officia alias eveniet eos.',
            'data' => '2025-01-06',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 3,
            'descricao' => 'Veniam eum iste nihil ratione quisquam.',
            'data' => '2024-07-07',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 3,
            'descricao' => 'Animi distinctio repudiandae.',
            'data' => '2024-12-06',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 4,
            'descricao' => 'Nisi aliquid maiores doloribus iure vero.',
            'data' => '2024-06-08',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 4,
            'descricao' => 'Expedita nobis velit enim.',
            'data' => '2025-02-23',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 4,
            'descricao' => 'Vero quis nemo autem aspernatur vero quis enim.',
            'data' => '2024-04-01',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 5,
            'descricao' => 'Error nisi cupiditate perferendis.',
            'data' => '2025-03-16',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 5,
            'descricao' => 'Iste quod iure.',
            'data' => '2024-12-06',
            'created_at' => now(),
            'updated_at' => now()
        ]);
\DB::table('andamentos')->insert([
            'processo_id' => 5,
            'descricao' => 'Ab eius nesciunt inventore reprehenderit nesciunt minus.',
            'data' => '2024-12-02',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
