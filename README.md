# Projeto de Teste de Desenvolvimento 

Este projeto se trata de um teste de desenvolvimento e foram utilizados as seguintes tecnologias:
### Ferramentas:
 - **Docker** (https://www.docker.com/) 
 - **Laravel** (https://laravel.com/) 
 - **Nginx** (https://nginx.org/en/) 
 - **Mysql** (https://www.mysql.com/)
 
 ### Temas Utilizados 
 -  **Anime**: [Free Bootstrap 4 HTML5 Gaming Anime Website Template](https://themewagon.com/themes/free-bootstrap-4-html5-gaming-anime-website-template-anime/) -
 -  **Soft Ui Dashboard**: [Soft UI Dashboard Laravel](https://www.creative-tim.com/product/soft-ui-dashboard-laravel)


Para iniciar o projeto no Docker, utilize os seguintes comandos: 
- Iniciar container
 `docker-compose up -d`
 
 - Para iniciar o projeto Laravel (instalar as dependências do Composer, copiar variáveis do `.env`, migrations e os seeds de teste), utilize:
   `docker-compose exec php sh init.sh`
