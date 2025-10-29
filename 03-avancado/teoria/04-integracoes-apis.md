# Aula 4 – Integração com APIs Externas

## Objetivos
- Consumir APIs REST e SOAP com Guzzle e ferramentas nativas.
- Implementar webhooks e filas para processamento assíncrono.
- Gerenciar autenticação OAuth2, API Keys e rate limiting.

## Conteúdo
1. **Clientes HTTP**
   - Configuração do Guzzle (middlewares, retry, timeouts).
   - Tratamento de erros e logging com Monolog.
2. **Webhooks**
   - Recebimento e validação de assinaturas (HMAC).
   - Reprocessamento em caso de falha.
3. **Mensageria**
   - Introdução ao RabbitMQ/Redis Streams.
   - Publicação/consumo de eventos.
4. **Monitoramento**
   - Dashboards de integrações e alertas.

## Atividades
- [ ] Criar cliente para API pública (ex.: GitHub) com cache de respostas.
- [ ] Implementar endpoint de webhook que valida assinatura.
- [ ] Publicar evento em fila após processamento de pedido.
