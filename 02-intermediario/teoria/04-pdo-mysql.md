# Aula 4 – PDO e MySQL

## Objetivos
- Conectar-se a bancos MySQL com PDO e DSNs configuráveis.
- Executar CRUD seguro com prepared statements.
- Trabalhar com transações, migrations e seeds básicos.

## Conteúdo
1. **Conexão e Configuração**
   - DSN (`mysql:host=localhost;dbname=curso_php;charset=utf8mb4`).
   - Tratamento de erros com `PDO::ATTR_ERRMODE`.
   - Pool de conexões simples com `PDO` singleton (com cuidado).
2. **Consultas**
   - `prepare`, `bindValue`, `execute`.
   - Fetch `FETCH_ASSOC`, `FETCH_CLASS`.
   - Paginação simples.
3. **Transações**
   - `beginTransaction`, `commit`, `rollBack`.
   - Boas práticas: try/catch e rethrow.
4. **Migrations e Seeds**
   - Estrutura básica utilizando scripts SQL ou `phinx`.
   - Inserção de dados iniciais.

## Atividades
- [ ] Criar tabela `posts` com migrations.
- [ ] Implementar repositório `PostRepository` com métodos `all`, `find`, `create`, `update`, `delete`.
- [ ] Escrever script de seed para criar usuário administrador padrão.
