# Projetos – Módulo Intermediário

## Projeto Principal: Blog com Login e Painel Administrativo

### Descrição
Construa um blog completo com gerenciamento de posts, categorias, usuários e painel administrativo protegido. Utilize POO, PDO e boas práticas aprendidas neste módulo.

### Requisitos Funcionais
- Autenticação de usuários com papéis (`admin`, `editor`, `autor`).
- CRUD de posts com rich text (utilize editor WYSIWYG simples).
- Gestão de categorias e tags.
- Upload de imagem destacada para cada post.
- Página pública listando posts paginados, busca e filtro por categoria.
- Painel administrativo com dashboard (posts por status, total de visualizações, últimos comentários).
- API pública `GET /api/v1/posts` retornando JSON com posts publicados.

### Requisitos Não Funcionais
- Código organizado em `public`, `src`, `config`, `resources`, `tests`.
- Rotas definidas via FastRoute ou Slim.
- Templates com Twig ou Plates.
- Logs de erros com Monolog.
- Testes automatizados de pelo menos um caso crítico (login ou criação de post).

### Roadmap Sugerido
1. Configuração de ambiente, banco de dados e migrations.
2. Implementação de autenticação, sessão e controle de acesso.
3. CRUD de posts e categorias com validação de formulários.
4. Upload e manipulação de imagens destacadas.
5. Criação de API pública com autenticação opcional via token.
6. Dashboard com gráficos simples (utilize Chart.js ou biblioteca similar).
7. Testes automatizados e documentação final.

### Entregáveis
- Código-fonte versionado com commits descritivos.
- README com instruções de instalação e configuração.
- Scripts `composer` para `lint`, `test`, `serve`.
- Dump SQL ou migrations para recriar banco.

## Projetos Extras
1. **Galeria de Fotos Responsiva** – Upload múltiplo, thumbnails, likes e comentários.
2. **API de Tarefas** – CRUD com autenticação JWT e testes com Pest.
3. **Dashboard de Vendas** – Integração com API externa simulada e gráficos dinâmicos.
