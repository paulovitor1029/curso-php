# Projeto – Sistema de Cadastro de Usuários

## Visão Geral
Crie um sistema CRUD simples para gerenciar usuários, persistindo dados em arquivo CSV ou JSON. O objetivo é consolidar os fundamentos do PHP procedural e boas práticas básicas.

## Requisitos
- Cadastro de usuário com campos: `nome`, `email`, `telefone`, `data_nascimento`.
- Listagem de usuários cadastrados com formatação tabular no terminal ou tabela HTML simples.
- Atualização e remoção de registros.
- Validações: formato de e-mail, telefone com DDD e maioridade (>=18 anos).
- Persistência em arquivo (`data/usuarios.csv` ou `data/usuarios.json`).
- Logs de operações (criação, edição, exclusão) em arquivo separado (`logs/app.log`).

## Entregáveis
1. **Planejamento**
   - Mapa mental ou checklist das funcionalidades.
   - Definição de fluxo (ex.: desenho com draw.io).
2. **Implementação**
   - Scripts organizados em `public/index.php` e `src/`.
   - Funções reutilizáveis para leitura/escrita em arquivo.
   - Tratamento de erros e mensagens amigáveis.
3. **Validação**
   - Testar cenários de inclusão, alteração, exclusão e busca.
   - Conferir logs e conteúdo do arquivo de dados.
4. **Documentação**
   - README com instruções de execução e pré-requisitos.
   - Checklist de boas práticas preenchido.

## Roadmap Sugestivo
1. Configurar estrutura básica de pastas (`public`, `src`, `data`, `logs`).
2. Implementar funções de persistência (`lerUsuarios`, `salvarUsuarios`).
3. Criar interface CLI ou página HTML simples com formulários.
4. Adicionar validações e mensagens de erro.
5. Implementar atualização e remoção.
6. Refinar UX e revisar padrões PSR-12.

## Critérios de Qualidade
- Código comentado apenas quando necessário (explique *por quê*, não *o quê*).
- Variáveis autoexplicativas e funções curtas.
- Arquivo de dados protegido fora do diretório público.
- Logs com data/hora e ação executada.

## Extensões Sugeridas
- Adicionar busca por nome ou email.
- Implementar exportação para CSV.
- Criar testes automatizados básicos (PHPUnit) para funções de persistência.
