# Aula 6 – Boas Práticas e Organização

## Objetivos
- Estruturar projetos com separação por camadas simples.
- Aplicar padrões PSR-1, PSR-12 e PSR-4.
- Documentar código com PHPDoc básico e READMEs.

## Conteúdo
1. **Estrutura de Pastas**
   - `public/`, `src/`, `tests/`, `vendor/`.
   - Organização de arquivos utilitários e configurações.
2. **Padrões de Código**
   - PSR-1 (nomenclatura), PSR-12 (estilo) e PSR-4 (autoload).
   - Uso de `composer dump-autoload` e namespaces mínimos.
3. **Documentação**
   - PHPDoc para funções e classes.
   - READMEs com instruções de setup e execução.
4. **Ferramentas de Qualidade**
   - `phpcs`, `phpstan` nível 0-2.
   - Integração com Git hooks (`pre-commit`).

## Atividades Práticas
- [ ] Reorganizar projeto de estudos com estrutura recomendada.
- [ ] Configurar `composer.json` com autoload PSR-4 e namespace `App\\`.
- [ ] Documentar funções com PHPDoc e gerar relatório do `phpcs`.
- [ ] Criar checklist de revisão de código pessoal.
