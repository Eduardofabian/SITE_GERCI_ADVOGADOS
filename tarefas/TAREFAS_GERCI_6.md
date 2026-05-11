# TAREFAS_GERCI_6 — Git + Deploy Hostinger
# Projeto: Gérci Libero da Silva e Advogados Associados
# Pasta: C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\
# Status: [ ] Pendente

---

## TAREFA 6.1 — GIT: versionar e subir para o GitHub

### Executar no terminal (PowerShell ou CMD) dentro da pasta do projeto:

```powershell
cd C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci
```

### Passo 1 — Criar .gitignore antes de tudo:
```powershell
New-Item .gitignore -ItemType File
```

Abrir o `.gitignore` e colar:
```
# Backups de tarefas
tarefas/bkp_*/

# Arquivos de sistema Windows
Thumbs.db
desktop.ini

# Arquivos temporários PHP
*.log

# Config local do Five Server (não vai pro servidor)
fiveserver.config.js

# Node (se usar futuramente)
node_modules/
```

### Passo 2 — Inicializar Git e conectar ao repositório:
```powershell
git init
git remote add origin https://github.com/Eduardofabian/SITE_GERCI_ADVOGADOS.git
git branch -M main
```

### Passo 3 — Primeiro commit:
```powershell
git add .
git commit -m "feat: site institucional Gérci Libero v4 — PHP + GSAP + paleta preto/azul/dourado"
git push -u origin main
```

### Estrutura que vai para o GitHub:
```
SITE_GERCI_ADVOGADOS/
├── index.php
├── contato-envia.php
├── fiveserver.config.js     ← ignorado pelo .gitignore
├── css/
│   └── style.css
├── js/
│   └── main.js
├── images/
│   ├── logo/LOGO_.png
│   ├── equipe/gerci.jpg
│   ├── equipe/leonardo.jpg
│   ├── hero/hero1.jpg
│   ├── hero/hero2.jpg
│   ├── hero/hero3.jpg
│   └── sobre/escritorio.jpg
└── tarefas/
    ├── TAREFAS_GERCI_5.md
    └── TAREFAS_GERCI_6.md
```

### Commits futuros (padrão a seguir):
```powershell
git add .
git commit -m "fix: descrição do que foi corrigido"
git push
```

Prefixos de commit:
- `feat:` → funcionalidade nova
- `fix:` → correção de bug
- `style:` → ajuste visual/CSS
- `content:` → atualização de texto ou imagem

---

## TAREFA 6.2 — HOSTINGER: contratar e configurar hospedagem

### Passo 1 — Contratar o plano
- Acessar: https://www.hostinger.com.br
- Plano recomendado: **Premium Web Hosting** (~R$11,99/mês no 1º ano)
  - Motivo: suporta PHP, MySQL, 100GB SSD, SSL grátis, e-mail profissional
- Durante a compra: **NÃO comprar domínio pela Hostinger** — o domínio já está no Google Domains

### Passo 2 — Apontar domínio Google → Hostinger
Após contratar, a Hostinger vai fornecer os nameservers. Geralmente:
```
ns1.dns-parking.com
ns2.dns-parking.com
```
No Google Domains (ou Google Admin onde está o domínio `gerciliberoadvogados.com`):
- Entrar em DNS → Servidores de nomes → Personalizado
- Trocar pelos nameservers da Hostinger
- Aguardar propagação: 2 a 48 horas

### Passo 3 — Subir os arquivos via FTP

**Dados de FTP** (pegar no painel da Hostinger após contratar):
- Host: `ftp.gerciliberoadvogados.com` (ou o IP fornecido)
- Usuário: fornecido pela Hostinger
- Senha: definida no cadastro
- Porta: 21

**Ferramenta recomendada:** FileZilla (gratuito)
- Download: https://filezilla-project.org/
- Conectar usando os dados acima
- Navegar até a pasta `public_html/` no servidor
- Arrastar TODOS os arquivos do projeto para dentro de `public_html/`

### Passo 4 — Configurar o contato-envia.php para produção

O `contato-envia.php` atual usa `mail()` nativo que não funciona bem em produção.
Na Hostinger, configurar o PHPMailer com SMTP do Google Workspace:

> **ATENÇÃO:** Criar a `TAREFAS_GERCI_7.md` para isso — é uma tarefa separada.
> Por enquanto o formulário redireciona para WhatsApp, então não é bloqueante.

### Passo 5 — Ativar SSL (HTTPS)
No painel da Hostinger:
- Hosting → Gerenciar → SSL
- Clicar em "Instalar SSL" (gratuito via Let's Encrypt)
- Aguardar 5-10 minutos

### Passo 6 — Testar em produção
- [ ] `https://gerciliberoadvogados.com` abre o site
- [ ] HTTPS com cadeado verde na barra do navegador
- [ ] Slider do hero funciona com as 3 imagens
- [ ] GSAP carrega normalmente (CDN funciona em produção)
- [ ] WhatsApp float abre com mensagem pré-definida
- [ ] Formulário de contato redireciona corretamente
- [ ] Mobile: testar no celular pelo domínio real

---

## TAREFA 6.3 — WORKFLOW GIT pós-deploy (padrão permanente)

Toda vez que fizer alteração no site:

```
1. Editar arquivo local
2. Testar no Five Server (http://127.0.0.1:5500)
3. git add . → git commit -m "descrição" → git push
4. Fazer upload do arquivo alterado via FTP (FileZilla) para public_html/
```

> Futuramente dá para automatizar o deploy via GitHub Actions,
> mas por enquanto FTP manual é o mais simples para o Hostinger básico.

---

## CHECKLIST FINAL

- [ ] Repositório criado: https://github.com/Eduardofabian/SITE_GERCI_ADVOGADOS
- [ ] Primeiro commit feito com todos os arquivos
- [ ] Plano Hostinger contratado
- [ ] Domínio apontado para Hostinger (nameservers trocados)
- [ ] Arquivos enviados para public_html/ via FTP
- [ ] SSL ativado (HTTPS)
- [ ] Site abre em https://gerciliberoadvogados.com
- [ ] Testado no celular

---

## PRÓXIMA TAREFA (TAREFAS_GERCI_7)

- Configurar PHPMailer + SMTP Google Workspace no contato-envia.php
- Para o formulário de contato funcionar em produção enviando e-mail real
