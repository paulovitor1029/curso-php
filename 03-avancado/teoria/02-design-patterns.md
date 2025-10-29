# Aula 2 – Design Patterns Aplicados

## Objetivos
- Aplicar padrões GoF relevantes ao desenvolvimento PHP moderno.
- Entender quando utilizar Factory, Strategy, Observer, Adapter e Decorator.
- Criar arquiteturas flexíveis e testáveis.

## Conteúdo
1. **Factory Method e Abstract Factory**
   - Criação de objetos complexos sem expor lógica de instância.
2. **Strategy**
   - Intercambialidade de algoritmos (ex.: cálculo de frete, descontos).
3. **Observer**
   - Eventos e listeners para desacoplar notificações.
4. **Adapter e Decorator**
   - Integração com bibliotecas externas e extensão de comportamento.
5. **Aplicação em Projetos**
   - Uso em módulos de pagamento, notificação e relatórios.

## Atividades
- [ ] Implementar `PagamentoStrategyInterface` com estratégias Pix, Cartão e Boleto.
- [ ] Criar `RelatorioFactory` que instancia relatórios PDF, CSV ou HTML.
- [ ] Integrar eventos de `PedidoCriado` com observadores que disparam e-mails e atualizam estoque.
