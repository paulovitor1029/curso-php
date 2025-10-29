# Guia de Instalação do Ambiente PHP

## Requisitos
- PHP 8.2+
- Composer
- Docker Desktop (opcional, recomendado)
- Git

## Passos
1. **Instalar PHP**
   - Windows: utilizar [Chocolatey](https://chocolatey.org/) (`choco install php`).
   - macOS: utilizar [Homebrew](https://brew.sh/) (`brew install php`).
   - Linux: utilizar gerenciador de pacotes (`apt`, `dnf`) ou `phpenv`.
2. **Configurar Variáveis de Ambiente**
   - Adicionar diretório do PHP ao `PATH`.
   - Criar arquivo `php.ini` e habilitar extensões: `pdo_mysql`, `mbstring`, `intl`, `openssl`.
3. **Instalar Composer**
   - Download em [getcomposer.org](https://getcomposer.org/download/).
   - Verificar instalação com `composer --version`.
4. **Configurar Docker (opcional)**
   - Instalar Docker Desktop.
   - Criar arquivo `docker-compose.yml` com serviços `php-fpm`, `nginx`, `mysql`, `redis`.
5. **Editor/IDE**
   - Recomendado: VS Code (extensões PHP Intelephense, PHPUnit, Docker) ou PHPStorm.
6. **Ferramentas de Qualidade**
   - Instalar `phpcs`, `phpstan`, `pestphp/pest` globalmente ou por projeto.

## Teste do Ambiente
```bash
php -v
composer -V
php -m | grep -E "pdo_mysql|mbstring|intl"
```

Se todas as verificações retornarem resultados corretos, o ambiente está pronto para os módulos seguintes.
