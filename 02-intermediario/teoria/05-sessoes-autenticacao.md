# Aula 5 – Sessões, Cookies e Autenticação

## Objetivos
- Controlar sessões com segurança, regeneração de ID e tempo de expiração.
- Gerenciar cookies com flags `httponly`, `secure` e `samesite`.
- Implementar fluxo de autenticação completo com cadastro, login, logout e recuperação de senha.

## Conteúdo
1. **Sessões**
   - `session_start`, `session_regenerate_id`, `session_destroy`.
   - Armazenamento de dados sensíveis.
   - Session hijacking e hardening.
2. **Cookies**
   - `setcookie` e `setcookie` com array de opções.
   - Persistência de "lembrar-me" com tokens armazenados em banco.
3. **Autenticação**
   - Hash de senha com `password_hash`, `password_verify`.
   - Fluxo de reset de senha com tokens temporários.
4. **Autorização**
   - Middlewares simples para verificar roles.
   - Controle de acesso baseado em permissões.

## Atividades
- [ ] Implementar formulário de login utilizando PDO.
- [ ] Criar middleware que impede acesso a rotas protegidas.
- [ ] Configurar cookie `remember_me` com token rotativo.
