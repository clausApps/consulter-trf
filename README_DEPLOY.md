# 🚀 Deploy do Consulter Prect na AWS

## 1. Requisitos

- Instância EC2 (Ubuntu)
- Docker + Docker Compose
- Acesso SSH
- Domínio (opcional)

## 2. Passos

```bash
sudo apt update
sudo apt install docker.io docker-compose nginx unzip -y

git clone https://seurepo.com/consulter-prect.git
cd consulter-prect
cp .env.example .env
composer install
```

## 3. Subir os containers

```bash
docker-compose up -d --build
```

## 4. HTTPS com Certbot (opcional)

```bash
sudo apt install certbot python3-certbot-nginx -y
sudo certbot --nginx -d seudominio.com -d www.seudominio.com
```
