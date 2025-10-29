# Aula 3 – Composer, Autoload e Padrões PSR

## Objetivos
- Configurar `composer.json`, scripts e autoload PSR-4.
- Utilizar pacotes populares (Dotenv, Guzzle, Intervention Image).
- Aplicar PSR-1, PSR-4, PSR-12 e PSR-3 (logs) em projeto real.

## Conteúdo
1. **Composer**
   - `composer init`, `require`, `update`, `remove`.
   - Scripts (`composer run lint`).
2. **Autoload**
   - PSR-4 e `autoload-dev` para testes.
   - Repositórios privados e path repositories.
3. **Padrões de Projeto**
   - Estrutura sugerida: `src/Domain`, `src/Application`, `src/Infrastructure`.
   - Injeção de dependências via construtor.
4. **Ferramentas**
   - `symfony/var-dumper`, `vlucas/phpdotenv`.
   - Configuração de `monolog/monolog` para logs PSR-3.

## Atividades
- [ ] Criar `composer.json` com autoload `App\\`.
- [ ] Instalar e configurar `vlucas/phpdotenv` para gerenciar variáveis de ambiente.
- [ ] Escrever script CLI (`bin/console`) utilizando autoload e dependências externas.
