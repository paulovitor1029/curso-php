# Aula 4 – Manipulação de Arquivos e Fluxos

## Objetivos
- Ler e escrever arquivos texto (CSV, JSON).
- Trabalhar com diretórios, permissões e uploads básicos.
- Garantir tratamento de erros com `try/catch`.

## Conteúdo
1. **Manipulação de Arquivos**
   - `file_get_contents`, `file_put_contents`, `fopen`/`fclose`.
   - Modos de abertura (`r`, `w`, `a`) e bloqueios com `flock`.
   - Serialização com `json_encode`, `json_decode`.
2. **Uploads Simples**
   - Estrutura do `$_FILES`.
   - Validação de tipo e tamanho.
   - Movimentação com `move_uploaded_file`.
3. **Tratamento de Erros**
   - Exceções básicas (`RuntimeException`).
   - Uso de `try/catch/finally` e logging simples.

## Atividades Práticas
- [ ] Criar um script CLI que exporta e importa contatos em CSV.
- [ ] Implementar rotina de backup automático com timestamp.
- [ ] Validar upload de imagens com extensão e tamanho.
- [ ] Criar logger simples que salva erros em arquivo.
