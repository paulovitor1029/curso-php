# Aula 1 – Fundamentos de POO em PHP

## Objetivos
- Entender conceitos de classe, objeto, propriedades e métodos.
- Aplicar encapsulamento, visibilidade e construtores.
- Utilizar `static`, constantes de classe e métodos mágicos essenciais.

## Conteúdo
1. **Classes e Objetos**
   - Definição de classe com propriedades tipadas.
   - Instanciação e uso de `__construct`.
2. **Visibilidade**
   - `public`, `protected`, `private`.
   - Getters/setters conscientes e acesso direto.
3. **Métodos Especiais**
   - `__toString`, `__get`, `__set` (quando evitar).
   - Métodos estáticos e constantes de classe.
4. **Boas Práticas**
   - SRP (Single Responsibility Principle).
   - Objetos imutáveis e `DateTimeImmutable` como inspiração.

## Atividades
- [ ] Modelar classe `Usuario` com validações em construtor.
- [ ] Criar `Pedido` com métodos para adicionar itens e calcular total.
- [ ] Implementar `Config` utilizando padrão singleton controlado (somente para compreensão, evitar em produção).

## Referências
- Documentação: [Classes e Objetos](https://www.php.net/manual/pt_BR/language.oop5.php)
- Livro recomendado: *Clean Code* (capítulos sobre objetos e funções).
