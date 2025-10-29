# Aula 1 – Arquitetura MVC e Camadas

## Objetivos
- Estruturar aplicação PHP com camadas Domain, Application, Infrastructure e Presentation.
- Entender responsabilidades de Models, Views e Controllers.
- Implementar rotas, controllers finos e serviços reutilizáveis.

## Conteúdo
1. **Camadas**
   - Domain (regras de negócio), Application (casos de uso), Infrastructure (banco, APIs), Presentation (HTTP, CLI).
2. **MVC**
   - Separação entre Controller, View e Model.
   - Template engines (Twig, Blade).
3. **Fluxo HTTP**
   - Entrada -> Roteador -> Controller -> Service -> Repository -> Banco/API -> View/JSON.
4. **Ferramentas**
   - FastRoute, Symfony HttpFoundation, Twig.

## Atividades
- [ ] Criar esqueleto de projeto com diretórios `src/Domain`, `src/Application`, `src/Infrastructure`, `src/Presentation`.
- [ ] Implementar caso de uso `CriarPedido` invocado via controller.
- [ ] Separar lógica de view utilizando Twig.
