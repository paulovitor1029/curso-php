# Aula 6 – Upload de Arquivos, Imagens e APIs REST

## Objetivos
- Validar e armazenar uploads com segurança.
- Processar imagens (resize, crop) com bibliotecas PHP.
- Construir endpoints RESTful utilizando rotas amigáveis e respostas JSON padronizadas.

## Conteúdo
1. **Upload Seguro**
   - Verificação de tamanho (`ini_get('upload_max_filesize')`).
   - Checagem de MIME com `finfo_file`.
   - Diretórios de storage e nomeação única com `bin2hex(random_bytes(16))`.
2. **Manipulação de Imagens**
   - Biblioteca `intervention/image` ou `gd` nativa.
   - Redimensionamento, thumbnails e otimização.
3. **APIs REST**
   - Estrutura de rotas com FastRoute ou Slim.
   - Controllers retornando `json_encode` com `Content-Type: application/json`.
   - Padrão de resposta (dados, mensagem, erros, paginação).
4. **Boas Práticas**
   - Versionamento de API (`/api/v1`).
   - Documentação com OpenAPI/Swagger.

## Atividades
- [ ] Criar upload de avatar com redimensionamento para 300x300.
- [ ] Construir endpoint `POST /api/v1/posts` com validação e persistência.
- [ ] Documentar API com arquivo `openapi.yaml` simplificado.
