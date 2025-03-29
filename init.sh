#!/bin/bash

echo "🚀 Iniciando preparação do ambiente Laravel..."

# Copiar .env
cp .env.example .env

# Gerar chave da aplicação
php artisan key:generate

# Rodar migrações e seeders
php artisan migrate --seed

echo "✅ Ambiente Laravel preparado com sucesso!"
