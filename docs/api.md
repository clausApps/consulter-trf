# API Pública (v1)

## Autenticação

Use `Authorization: Bearer {API_TOKEN}`

## Endpoints

### [GET] /api/processos
Lista todos os processos do usuário autenticado.

### [GET] /api/processos/{id}
Exibe detalhes de um processo.

### [POST] /api/processos/{id}/andamento
Adiciona um andamento ao processo.

### [POST] /api/processos/{id}/compartilhar
Compartilha processo com outro usuário (permite visualizar ou editar).

## Formatos de Resposta

JSON com chaves:
- `numero`
- `dados_extras`
- `arquivos`
- `andamentos`
