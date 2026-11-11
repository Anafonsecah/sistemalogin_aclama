PROJETO: SISTEMA_LOGIN
======================

ESTRUTURA
---------
sistema_login/
  conexao.php
  login.php
  dashboard.php
  logout.php
  style.css
  banco.sql
  criar_usuario.php

COMO EXECUTAR NO XAMPP
----------------------
1. Abra o XAMPP e inicie Apache e MySQL.
2. Copie a pasta sistema_login para:
   C:\xampp\htdocs\sistema_login
3. Abra http://localhost/phpmyadmin
4. Importe o arquivo banco.sql (ou copie e execute seu conteúdo na aba SQL).
5. Acesse uma vez:
   http://localhost/sistema_login/criar_usuario.php
6. Se aparecer a mensagem de sucesso, APAGUE criar_usuario.php da pasta.
7. Abra:
   http://localhost/sistema_login/login.php

DADOS DO USUÁRIO DE TESTE
-------------------------
Usuário: admin
Senha:   123456

REQUISITOS IMPLEMENTADOS
------------------------
- Formulário de login com usuário e senha.
- Estilização com Bootstrap 5 e CSS próprio.
- Consulta ao MySQL usando PDO e prepared statement.
- Verificação de senha com password_verify().
- Senha armazenada com password_hash().
- Sessão com session_start() e regeneração do ID após login.
- Redirecionamento para dashboard após autenticação.
- Mensagem para credenciais inválidas.
- Dashboard protegida contra acesso sem login.
- Exibição do nome do usuário autenticado.
- Logout e encerramento da sessão.

OBSERVAÇÃO
----------
O arquivo criar_usuario.php serve apenas para configurar a conta inicial.
Não o mantenha disponível depois de criar o usuário. Para um projeto real,
use HTTPS, proteção CSRF e configurações de sessão mais restritivas.
