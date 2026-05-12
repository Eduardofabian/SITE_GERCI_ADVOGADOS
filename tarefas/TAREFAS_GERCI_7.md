# TAREFAS_GERCI_7 — Email PHPMailer + Cookie Banner + Favicon
# Projeto: Gérci Libero da Silva e Advogados Associados
# Pasta: C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\
# Testar: https://gerciliberoeadvogados.com
# Status: [ ] Pendente

---

## PASSO 0 — BACKUP

```powershell
mkdir tarefas\bkp_7
copy "index.php"           "tarefas\bkp_7\index.php"
copy "css\style.css"       "tarefas\bkp_7\style.css"
copy "js\main.js"          "tarefas\bkp_7\main.js"
copy "contato-envia.php"   "tarefas\bkp_7\contato-envia.php"
```

---

## TAREFA 7.1 — FAVICON (ícone no navegador)

### Contexto
O ícone pequeno que aparece na aba do navegador está faltando ou usando o padrão.
Precisamos usar a logo do escritório como favicon.

### Passo 1 — Gerar o favicon
Acessar: https://favicon.io/favicon-converter/
- Fazer upload da `LOGO_.png`
- Baixar o pacote ZIP gerado
- Extrair e pegar os arquivos:
  - `favicon.ico`
  - `favicon-16x16.png`
  - `favicon-32x32.png`
  - `apple-touch-icon.png`

### Passo 2 — Colocar os arquivos
Copiar todos para a raiz do projeto:
```
C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\favicon.ico
C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\favicon-16x16.png
C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\favicon-32x32.png
C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\apple-touch-icon.png
```

### Arquivo: `index.php`

#### Localizar (dentro do `<head>`, após o `<meta name="description">`):
```html
<title>Gérci Libero — Advogados Associados | Cascavel/PR</title>
```

#### Substituir por:
```html
<title>Gérci Libero — Advogados Associados | Cascavel/PR</title>
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="shortcut icon" href="favicon.ico">
```

---

## TAREFA 7.2 — COOKIE BANNER: corrigir botão não clicável

### Contexto
O banner de cookies aparece mas os botões "Aceitar" e "Recusar" não respondem
ao clique. Causa provável: o banner está atrás de outro elemento com z-index maior,
ou o `cookieBanner` está sendo ocultado antes do JS inicializar.

### Arquivo: `css/style.css`

#### Localizar:
```css
.cookie-banner {
  position: fixed; bottom: 0; left: 0; right: 0; z-index: 800;
```

#### Substituir por:
```css
.cookie-banner {
  position: fixed; bottom: 0; left: 0; right: 0; z-index: 9999;
```

#### Localizar também:
```css
.cookie-acoes { display: flex; gap: 10px; flex-shrink: 0; }
```

#### Substituir por:
```css
.cookie-acoes { display: flex; gap: 10px; flex-shrink: 0; position: relative; z-index: 10000; }
```

#### Adicionar ao final do style.css:
```css
/* Cookie banner — garantir clicabilidade */
.cookie-btn {
  pointer-events: all !important;
  cursor: pointer !important;
  position: relative;
  z-index: 10000;
}
```

### Arquivo: `js/main.js`

#### Localizar o bloco `initCookies` completo:
```javascript
  /* ══ COOKIE BANNER ════════════════════════ */
  (function initCookies() {
    const banner   = document.getElementById('cookieBanner');
    const aceitar  = document.getElementById('cookieAceitar');
    const rejeitar = document.getElementById('cookieRejeitar');
    if (!banner) return;

    if (!localStorage.getItem('gerci_cookies')) {
      setTimeout(() => banner.classList.add('vis'), 1500);
    }

    function fechar(v) {
      localStorage.setItem('gerci_cookies', v);
      banner.classList.remove('vis');
    }

    aceitar.addEventListener('click',  () => fechar('aceito'));
    rejeitar.addEventListener('click', () => fechar('rejeitado'));
  })();
```

#### Substituir por:
```javascript
  /* ══ COOKIE BANNER ════════════════════════ */
  (function initCookies() {
    const banner   = document.getElementById('cookieBanner');
    const aceitar  = document.getElementById('cookieAceitar');
    const rejeitar = document.getElementById('cookieRejeitar');
    if (!banner || !aceitar || !rejeitar) return;

    /* Mostrar apenas se ainda não aceitou/rejeitou */
    if (!localStorage.getItem('gerci_cookies')) {
      setTimeout(() => {
        banner.style.display = 'flex';
        banner.classList.add('vis');
      }, 1500);
    } else {
      banner.style.display = 'none';
    }

    function fechar(v) {
      localStorage.setItem('gerci_cookies', v);
      banner.classList.remove('vis');
      setTimeout(() => { banner.style.display = 'none'; }, 500);
    }

    aceitar.addEventListener('click',  function(e) {
      e.stopPropagation();
      fechar('aceito');
    });

    rejeitar.addEventListener('click', function(e) {
      e.stopPropagation();
      fechar('rejeitado');
    });
  })();
```

### Arquivo: `index.php`

#### Localizar o cookie banner no HTML:
```html
<div class="cookie-banner" id="cookieBanner">
```

#### Substituir por:
```html
<div class="cookie-banner" id="cookieBanner" style="display:none;">
```

---

## TAREFA 7.3 — PHPMAILER: formulário de contato via e-mail real

### Contexto
O `contato-envia.php` atual usa `mail()` nativo que não funciona na Hostinger.
Vamos usar PHPMailer com SMTP do Gmail/Google Workspace.

### Passo 1 — Instalar PHPMailer via Composer

No terminal, dentro da pasta do projeto:
```powershell
cd C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci
composer require phpmailer/phpmailer
```

Se não tiver Composer instalado:
- Baixar: https://getcomposer.org/Composer-Setup.exe
- Instalar e rodar o comando acima novamente

Isso vai criar a pasta `vendor/` com o PHPMailer.

### Passo 2 — Configurar senha de app do Google

Para usar o Gmail com PHPMailer é necessária uma "Senha de app":
1. Acessar: https://myaccount.google.com/security
2. Ativar **Verificação em duas etapas** (se ainda não estiver ativa)
3. Ir em **Senhas de app** (aparece após ativar 2FA)
4. Selecionar: App → Outro → digitar "Site Gérci"
5. Google vai gerar uma senha de 16 caracteres → **copiar e guardar**

### Passo 3 — Substituir contato-envia.php completo

#### Arquivo: `contato-envia.php`

#### Apagar todo o conteúdo e substituir por:
```php
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

/* ── Configurações — ALTERAR AQUI ── */
define('SMTP_USER', 'liberoadv.recepcao@gmail.com');  // e-mail remetente
define('SMTP_PASS', 'xxxx xxxx xxxx xxxx');            // senha de app (16 chars)
define('MAIL_DEST', 'liberoadv.recepcao@hotmail.com'); // e-mail destinatário
define('MAIL_FROM_NAME', 'Site Gérci Libero Advogados');

/* ── Capturar dados do formulário ── */
$nome     = isset($_POST['nome'])     ? htmlspecialchars(strip_tags(trim($_POST['nome'])))     : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars(strip_tags(trim($_POST['telefone']))) : '';
$email    = isset($_POST['email'])    ? htmlspecialchars(strip_tags(trim($_POST['email'])))    : '';
$area     = isset($_POST['area'])     ? htmlspecialchars(strip_tags(trim($_POST['area'])))     : '';
$mensagem = isset($_POST['mensagem']) ? htmlspecialchars(strip_tags(trim($_POST['mensagem']))) : '';

/* ── Validação mínima ── */
if (empty($nome) || empty($telefone)) {
  header('Location: index.php?enviado=erro');
  exit;
}

/* ── Montar e enviar e-mail ── */
$mail = new PHPMailer(true);

try {
  /* Configuração SMTP */
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = SMTP_USER;
  $mail->Password   = SMTP_PASS;
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port       = 587;
  $mail->CharSet    = 'UTF-8';

  /* Remetente e destinatário */
  $mail->setFrom(SMTP_USER, MAIL_FROM_NAME);
  $mail->addAddress(MAIL_DEST);
  if (!empty($email)) {
    $mail->addReplyTo($email, $nome);
  }

  /* Conteúdo */
  $mail->isHTML(true);
  $mail->Subject = "Novo contato pelo site: {$nome}";
  $mail->Body    = "
    <html><body style='font-family:Arial,sans-serif;color:#333;'>
      <h2 style='color:#1A4B8C;'>Novo contato pelo site</h2>
      <table style='width:100%;border-collapse:collapse;'>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Nome</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$nome}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Telefone</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$telefone}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>E-mail</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$email}</td></tr>
        <tr><td style='padding:8px;border-bottom:1px solid #eee;'><strong>Área</strong></td><td style='padding:8px;border-bottom:1px solid #eee;'>{$area}</td></tr>
        <tr><td style='padding:8px;'><strong>Mensagem</strong></td><td style='padding:8px;'>{$mensagem}</td></tr>
      </table>
    </body></html>
  ";
  $mail->AltBody = "Nome: {$nome}\nTelefone: {$telefone}\nE-mail: {$email}\nÁrea: {$area}\n\nMensagem:\n{$mensagem}";

  $mail->send();
  header('Location: index.php?enviado=ok');

} catch (Exception $e) {
  /* Log do erro — não expor ao usuário */
  error_log('PHPMailer erro: ' . $mail->ErrorInfo);
  header('Location: index.php?enviado=erro');
}
exit;
```

### Passo 4 — Subir vendor/ para a Hostinger

Após rodar o Composer, vai criar a pasta `vendor/` com ~3MB.
Subir via gerenciador de arquivos da Hostinger ou FTP:
- Entrar em `public_html/`
- Fazer upload da pasta `vendor/` inteira

> A pasta `vendor/` é grande — via FTP (FileZilla) é mais rápido que pelo
> gerenciador web da Hostinger.

### Passo 5 — Adicionar vendor/ ao .gitignore

No arquivo `.gitignore` do projeto, adicionar:
```
vendor/
composer.lock
```

---

## TESTAR APÓS APLICAR

- [ ] `https://gerciliberoeadvogados.com`
- [ ] Favicon aparece na aba do navegador (ícone da logo)
- [ ] Cookie banner aparece após 1.5s
- [ ] Botões "Aceitar" e "Recusar" respondem ao clique
- [ ] Banner some após clicar em qualquer botão
- [ ] Reabrir o site: banner não aparece mais (localStorage salvo)
- [ ] Testar em aba anônima: banner aparece novamente
- [ ] Preencher formulário de contato e enviar
- [ ] E-mail chega em liberoadv.recepcao@hotmail.com
- [ ] Página redireciona para ?enviado=ok com mensagem de sucesso

## ROLLBACK
```powershell
copy "tarefas\bkp_7\index.php"         "index.php"
copy "tarefas\bkp_7\style.css"         "css\style.css"
copy "tarefas\bkp_7\main.js"           "js\main.js"
copy "tarefas\bkp_7\contato-envia.php" "contato-envia.php"
```

---

## NOTAS

```
PHPMailer: instalar via Composer (gera pasta vendor/)
SMTP_USER: e-mail Google que vai enviar (precisa de senha de app)
SMTP_PASS: senha de 16 chars gerada em myaccount.google.com/security
MAIL_DEST: e-mail que vai receber os contatos

Cookie z-index: aumentado para 9999 para ficar acima de tudo
Favicon: gerado em favicon.io com a LOGO_.png

Variáveis CSS do projeto:
--azul:   #1A4B8C
--ouro:   #C9A55A
--preto:  #0F0F10
--radius: 10px
```
