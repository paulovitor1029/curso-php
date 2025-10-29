# Aula 2 – Herança, Interfaces e Traits

## Objetivos
- Modelar hierarquias de classes com herança e composição.
- Utilizar interfaces para contratos e inversão de dependência.
- Aplicar traits para compartilhar comportamentos horizontais.

## Conteúdo
1. **Herança**
   - `extends`, `parent::`, `final`.
   - Quando preferir composição.
2. **Interfaces**
   - Declaração com `interface` e implementação com `implements`.
   - Interface Segregation Principle (ISP).
3. **Traits**
   - Uso de `use` para compartilhar métodos.
   - Conflitos de método e resolução com `insteadof`.
4. **Namespaces**
   - Organização lógica em `App\Domain`, `App\Infra`, etc.
   - Convenção PSR-4.

## Atividades
- [ ] Criar hierarquia `Pagamento` -> `PagamentoCartao`, `PagamentoPix` com interface `ProcessadorPagamento`.
- [ ] Implementar trait `Auditavel` que registre data/hora de criação e atualização.
- [ ] Reorganizar classes em namespaces condizentes.
