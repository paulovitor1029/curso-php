# Exercícios – Módulo Avançado

## Arquitetura e Padrões
1. Refatore um módulo legado para separar camadas Domain/Application/Infrastructure.
2. Implemente padrão Observer para notificar múltiplos sistemas após criação de pedido.
3. Crie Decorator para adicionar cache a um repositório sem alterar implementação original.

## Segurança
1. Adicione proteção CSRF a todos os formulários do projeto mini ERP.
2. Configure Content Security Policy restritiva e registre exceções necessárias.
3. Implemente monitoramento de login suspeito (tentativas consecutivas, IP diferente, geolocalização).

## Integrações
1. Construa cliente HTTP resiliente com retry exponencial para API de pagamentos.
2. Implemente webhook que valida assinatura HMAC e publica evento em fila RabbitMQ.
3. Crie serviço que sincroniza dados com ERP externo e trata conflitos de versão.

## Testes e Performance
1. Escreva testes de carga com Artillery ou k6 para endpoints críticos.
2. Configure pipeline CI executando PHPUnit, Pest, PHPStan e PHP CS Fixer.
3. Ative OPcache preload e meça ganhos de performance.

## Desafio Final
- Desenvolva mini ERP com módulos de vendas, estoque e financeiro, incluindo dashboards interativos e relatórios exportáveis.
