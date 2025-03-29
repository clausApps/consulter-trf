# Estrutura do Projeto

## Diretórios Principais

- `app/Models` → Modelos de dados (MongoDB)
- `app/Http/Controllers` → Lógica das rotas e scraping
- `resources/views` → Telas Blade responsivas
- `routes/web.php` → Rotas da aplicação

## Entidades

- **Site**: Configura URLs e campos de scraping
- **Processo**: Armazena número, dados extraídos, arquivos
- **Log**: Registra ações do usuário no sistema
- **Andamento**: Status e comentários de processos
- **User**: Login e permissões

## Sessão e Login no TRF6

- Etapa 1: Envio de usuário/senha via cURL
- Etapa 2: Envio do código de autenticação
- Cookies salvos em `storage/app`
