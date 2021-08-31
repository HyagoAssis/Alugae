# Sistema AlugaÊ

Projeto desenvolvido como avaliação para a disciplina de Modelagem de Sistemas, 2021.3.

- Desenvolvimento:
  - Front-end: HTML, CSS e JavaScript
  - Back-end: PHP e SQL
  - Framework: Laravel
 
- Alunos
  - Fernando Dellão Menini - MAT 201935005
  - Hyago Assis de Novais Oliveira - MAT 201865176A
  - Lucas Goldner Ribeiro - MAT 201965074AC
  - Mara de Lemos Gomes - MAT 201965237A
  
#### Como rodar
Necessário: Node, Composer, PHP e MySql instalado na máquina.

Após clonar o repositório:

- Instalar as dependências
	- composer install
	- npm install

- Criar o arquivo .env e copiar o conteúdo do arquivo .env.example para ele e mudando as informações sobre a base de dados. Usaremos o banco de dados com nome alugae, então não esqueça de criar essa base.

- Gerar chave de autenticação: php artisan key:generate
 
- Rodar a migration e seeder para criação da tabela de usuários padrão para que vocês possam logar como administrador: php artisan migrate:fresh --seed

- Login do administrador
  - admin@admin.com.br
  - 123456

