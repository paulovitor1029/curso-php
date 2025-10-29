# Aula 2 – Fundamentos da Sintaxe PHP

## Objetivos de Aprendizagem
- Dominar tipos de dados primitivos, operadores e interpolação de strings.
- Utilizar condicionais (`if`, `switch`) e laços (`for`, `while`, `foreach`).
- Compreender escopo de variáveis e constantes.
- Aplicar boas práticas de formatação (PSR-12).

## Conteúdo
1. **Estrutura básica de um script**
   - Arquivo `.php`, tag `<?php` e diretórios públicos.
   - Exibição de dados com `echo`, `print` e `var_dump`.
2. **Variáveis e Constantes**
   - Convenções de nomenclatura (`camelCase`, `UPPER_SNAKE_CASE`).
   - Tipagem dinâmica e cast explícito.
   - Constantes com `define` e `const`.
3. **Operadores**
   - Aritméticos, lógicos, de comparação, atribuição.
   - Operador de coalescência nula (`??`) e spaceship (`<=>`).
4. **Estruturas de Controle**
   - `if/elseif/else`, `switch`, operadores ternários.
   - Loops `for`, `while`, `do-while`, `foreach` com arrays.
5. **Boas Práticas**
   - Indentação com 4 espaços.
   - Linhas curtas (<120 caracteres).
   - Comentários `//` e `/** */` documentando intenção.

## Atividades Práticas
- [ ] Construir um menu CLI com `switch` e loops.
- [ ] Calcular IMC e classificar faixas utilizando condicionais.
- [ ] Gerar tabuada dinâmica com `for` e formatação de string.
- [ ] Reescrever scripts aplicando padrões PSR-12 com `phpcbf`.

## Checklist de Boas Práticas
- [ ] Use `declare(strict_types=1);` quando possível.
- [ ] Evite misturar HTML e PHP puro antes de aprender templates.
- [ ] Utilize mensagens claras em português ou inglês consistente.
