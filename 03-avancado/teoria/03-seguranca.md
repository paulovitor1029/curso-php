# Aula 3 – Segurança em Aplicações PHP

## Objetivos
- Identificar vulnerabilidades web comuns e aplicar mitigações.
- Implementar segurança em formulários, cookies e headers HTTP.
- Utilizar ferramentas de análise e checklist de segurança.

## Conteúdo
1. **SQL Injection**
   - Uso estrito de prepared statements.
   - Validação de entrada e escopo mínimo de permissões no banco.
2. **XSS e CSRF**
   - Escape com `htmlspecialchars` e bibliotecas de template seguras.
   - Geração e validação de tokens CSRF por sessão.
3. **Headers de Segurança**
   - `Content-Security-Policy`, `X-Frame-Options`, `X-Content-Type-Options`, `Referrer-Policy`.
4. **Autenticação e Autorização**
   - JWT, OAuth2, rate limiting, bloqueio por IP.
5. **Ferramentas**
   - OWASP ZAP, Symfony Security Checker, PHP Security Audit.

## Atividades
- [ ] Adicionar middleware de CSRF ao projeto mini ERP.
- [ ] Configurar cabeçalhos de segurança e HTTPS forçado.
- [ ] Montar checklist de revisão inspirado na OWASP Top 10.
