Como usar:

1. instalar composer (composer install)
2. configurar o seu banco de dados (arquivo .env)
   1. comando para criar o arquivo: 'cp .env.example .env'
   2. rodar o  comando: 'php artisan key:generate'
   3. agora configure o seu banco
3. rodar as migrations (php artisan migrate)
4. instalar npm (npm install)
5. rodar o npm (npm run dev)
6. alterar no .env o 'FILESYSTEM_DISK' para 'public'
7. linkar o storage na pasta public (php artisan storage:link)
8. alterar no .env o 'BROADCAST_DRIVER' para 'pusher'
9. inserir ou alterar no .env as informações abaixo:
   1. PUSHER_APP_ID=local
   
   2. PUSHER_APP_KEY=local
   
   3. PUSHER_APP_SECRET=local
   
   4. PUSHER_HOST=127.0.0.1
   
   5. PUSHER_PORT=6001
   
   6. PUSHER_SCHEME=http
   
   7. PUSHER_APP_CLUSTER=mt1
10. rodar o webserver (php artisan websockets:serve)
11. rodar o artisan serve (php artisan serve)

- Agora é só acessar sua aplicação no endereço 'http://localhost:8000/' e criar uma conta!

- Para visualizar os eventos, acesse:
  - http://localhost:8000/laravel-websockets
  - http://localhost:8000/telescope
