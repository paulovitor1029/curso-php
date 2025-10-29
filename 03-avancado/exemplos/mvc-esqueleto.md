# Estrutura MVC Recomendada

```
app/
  Domain/
    Entity/
    Repository/
    ValueObject/
  Application/
    UseCase/
    DTO/
  Infrastructure/
    Persistence/
    Http/
    Queue/
  Presentation/
    Http/
      Controller/
      Request/
      Response/
    Console/
config/
public/
resources/
  views/
  lang/
storage/
  cache/
  logs/
tests/
```

## Observações
- Mantenha lógica de negócio no domínio, evitando `fat controllers`.
- Use DTOs para transportar dados entre camadas.
- Configure contêiner de injeção (Symfony DI, PHP-DI) para resolver dependências.
- Organize rotas em arquivos separados por contexto (`routes/web.php`, `routes/api.php`).
