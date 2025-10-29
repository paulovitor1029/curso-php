# Aula 1 – Ambiente de Desenvolvimento PHP Moderno

## Objetivos de Aprendizagem
- Entender os requisitos mínimos para executar PHP 8+.
- Comparar opções de servidores locais (XAMPP, Laragon, Docker + PHP-FPM).
- Configurar Composer e gerenciar dependências básicas.
- Criar scripts utilizando o servidor embutido do PHP.

## Conteúdo
1. **Instalação do PHP 8+**
   - Download oficial no [php.net/downloads](https://www.php.net/downloads).
   - Verificação com `php -v`.
   - Seleção de extensões essenciais: `pdo_mysql`, `openssl`, `mbstring`, `intl`.
2. **Servidores locais**
   - XAMPP / Laragon: instalação GUI, controle de Apache/MySQL, diretório `htdocs`.
   - Docker: uso de imagens oficiais `php:8.2-apache` e `mysql:8` com `docker-compose`.
   - Servidor embutido: `php -S localhost:8000 -t public`.
3. **Composer**
   - Instalação global.
   - Criando `composer.json` com `composer init`.
   - Executando autoload PSR-4 e scripts customizados.
4. **Ferramentas Auxiliares**
   - IDEs recomendadas: VS Code, PHPStorm.
   - Extensões úteis: PHP Intelephense, PHPUnit, Docker.
   - Configurações de linting com `phpcs` e `phpcbf`.

## Atividades Práticas
- [ ] Instalar o PHP 8.2 e confirmar versão.
- [ ] Subir um container Docker com PHP, Apache e MySQL utilizando o `docker-compose.yml` modelo.
- [ ] Criar um projeto com Composer e executar `composer dump-autoload`.
- [ ] Configurar uma IDE com inspeções automáticas de código.

## Leituras Recomendadas
- [Documentação Oficial do PHP](https://www.php.net/manual/pt_BR/).
- Guia "Primeiros Passos" em `recursos/guias/instalacao-ambiente.md`.
