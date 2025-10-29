# Exercícios – Módulo Intermediário

## POO e Arquitetura
1. Modele um sistema de pedidos com classes `Cliente`, `Pedido`, `ItemPedido` e `Produto`. Utilize agregações e calcule totais e descontos.
2. Implemente interface `Notificador` com implementações `EmailNotificador` e `SmsNotificador`. Utilize injeção de dependência em um serviço `CadastroUsuarioService`.
3. Construa trait `Loggable` que delega logs para `Psr\Log\LoggerInterface`.

## Banco de Dados e PDO
1. Crie migrations para tabelas `usuarios`, `posts`, `categorias` e tabela pivô `post_categoria`.
2. Desenvolva repositório `UsuarioRepository` com métodos de busca paginada, filtro por papel e atualização de senha.
3. Implemente transação que cria post, categorias associadas e registra auditoria, revertendo tudo em caso de falha.

## Autenticação e Sessões
1. Monte fluxo de login com validação de senha forte (mínimo 8 caracteres, letras maiúsculas, minúsculas, números e símbolos).
2. Crie página de recuperação de senha com envio de e-mail (simulado) e tokens com expiração.
3. Desenvolva middleware que verifica `role` do usuário e redireciona para página "acesso negado".

## Uploads e APIs
1. Construa formulário de upload múltiplo de imagens, gerando thumbnails e armazenando metadados em banco.
2. Implemente API REST `POST /api/v1/auth` que gera JWT (utilize `firebase/php-jwt`).
3. Crie endpoint `GET /api/v1/posts` com paginação, filtros por categoria e ordenação.

## Desafios
- Desenvolva CLI `php bin/seed` que popula banco com dados falsos usando `fakerphp/faker`.
- Crie testes de integração com SQLite em memória para repositórios.
- Implemente caching simples utilizando Redis para lista de posts mais recentes.
