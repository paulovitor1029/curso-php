# Aula 6 – Performance e Caching

## Objetivos
- Monitorar performance de aplicações PHP com Xdebug, Blackfire e Laravel Telescope.
- Implementar caching em diferentes camadas: aplicação, banco, HTTP.
- Otimizar queries, uso de memória e configuração de OPcache.

## Conteúdo
1. **Profiling**
   - Instalação do Xdebug para profiling.
   - Uso do Blackfire para comparativos.
2. **Caching**
   - Redis para cache de sessão, queries e objetos.
   - Estratégias `cache aside`, `write through`, `write behind`.
   - Cache HTTP com cabeçalhos `ETag`, `Cache-Control`.
3. **OPcache**
   - Configurações principais: `opcache.enable`, `opcache.memory_consumption`.
   - Pré-carregamento (`opcache.preload`).
4. **Boas Práticas**
   - Índices no banco, consultas N+1, lazy vs eager loading.

## Atividades
- [ ] Configurar Redis local e cachear lista de produtos.
- [ ] Gerar perfil com Xdebug e identificar gargalos.
- [ ] Implementar cabeçalhos HTTP de caching em API pública.
