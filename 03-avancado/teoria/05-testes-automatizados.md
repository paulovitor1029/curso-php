# Aula 5 – Testes Automatizados com PHPUnit e Pest

## Objetivos
- Configurar ambientes de teste com PHPUnit e Pest.
- Escrever testes unitários, de integração e end-to-end.
- Utilizar mocks, stubs e fakes com Mockery ou PHPUnit.
- Medir cobertura e integrar com pipelines CI.

## Conteúdo
1. **Configuração**
   - `composer require --dev phpunit/phpunit pestphp/pest`.
   - Estrutura de `tests/Unit`, `tests/Feature`.
2. **Testes Unitários**
   - Arrange-Act-Assert.
   - Testes parametrizados (data providers).
3. **Testes de Integração**
   - Banco em memória (SQLite), containers efêmeros.
4. **Cobertura e Qualidade**
   - `phpunit --coverage-html build/coverage`.
   - Integração com GitHub Actions.

## Atividades
- [ ] Configurar Pest e criar teste para caso de uso `CriarPedido`.
- [ ] Criar testes de integração para repositórios com SQLite.
- [ ] Integrar pipeline CI que executa testes e static analysis.
