# Desafio
Projeto desenvolvido em  Laravel. Nesse repositório encontram-se o modelo do banco usado bem como todo o código desenvolvido.
Foi utilizado o mysql do phpmyadmin porém pode-se utilizar qualquer banco de sua preferencia, apenas deve-se acertar a conexão 
da configuração do .env e as configurações do arquivo /app/config/database.php.
# Instruções para usar
Ao clonar deve-se criar o database arca e executar os seguintes comandos
1- php artisan migrate (esse comando irá criar todas as tabelas do banco) 
2- php artisan db:seed (que ira popular o banco com os dados)
3- php artisan serve (Irá executar todo o projeto, geralemente na localhost porta 8000)

