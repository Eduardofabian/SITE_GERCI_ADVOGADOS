# TAREFAS_GERCI_8 — Formulário AJAX (sem redirecionar URL)
# Projeto: Gérci Libero da Silva e Advogados Associados
# Pasta: C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\
# Testar: https://gerciliberoeadvogados.com
# Status: [ ] Pendente

---

## PASSO 0 — BACKUP

```powershell
mkdir tarefas\bkp_8
copy "index.php"           "tarefas\bkp_8\index.php"
copy "js\main.js"          "tarefas\bkp_8\main.js"
copy "contato-envia.php"   "tarefas\bkp_8\contato-envia.php"
```

---

## CONTEXTO

Após enviar o formulário, o PHP redireciona para:
`https://gerciliberoeadvogados.com/index.php?enviado=ok`

O ideal: URL não muda, formulário some, mensagem de sucesso aparece no lugar.
Solução: envio via AJAX (fetch) — o PHP responde com JSON, o JS trata o resultado.

---

## TAREFA 8.1 — AJAX: remover redirecionamento do PHP

### Arquivo: `contato-envia.php`

#### Localizar o bloco final (try/catch):
```php
  $mail->send();
  header('Location: index.php?enviado=ok');

} catch (Exception $e) {
  error_log('PHPMailer erro: ' . $mail->ErrorInfo);
  header('Location: index.php?enviado=erro');
}
exit;
```

#### Substituir por:
```php
  $mail->send();
  echo json_encode(['status' => 'ok']);

} catch (Exception $e) {
  error_log('PHPMailer erro: ' . $mail->ErrorInfo);
  echo json_encode(['status' => 'erro', 'msg' => $mail->ErrorInfo]);
}
exit;
```

#### Adicionar no topo do arquivo, logo após `<?php`:
```php
header('Content-Type: application/json; charset=UTF-8');
```

O topo do arquivo deve ficar assim:
```php
<?php
header('Content-Type: application/json; charset=UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
```

---

## TAREFA 8.2 — HTML: simplificar bloco do formulário

### Arquivo: `index.php`

#### Localizar o bloco PHP do formulário:
```php
<?php if ($enviado === 'ok'): ?>
        <div class="form-ok">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem recebida!</h3>
          <p>Retornaremos em breve. Para atendimento imediato, use o WhatsApp.</p>
          <a href="https://wa.me/554533265151" class="btn btn-ouro" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Abrir WhatsApp</a>
        </div>
      <?php else: ?>
```

#### Substituir por (remover o PHP — deixar só o form sempre visível):
```php
<!-- Mensagem de sucesso — oculta por padrão, JS exibe após envio -->
        <div class="form-ok" id="formOk" style="display:none;">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem recebida!</h3>
          <p>Retornaremos em breve. Para atendimento imediato, use o WhatsApp.</p>
          <a href="https://wa.me/554533265151" class="btn btn-ouro" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp"></i> Abrir WhatsApp
          </a>
        </div>
```

#### Localizar o fechamento do else e do form:
```php
      <?php endif; ?>
```

#### Remover essa linha (não precisa mais).

#### Localizar o botão de submit do formulário:
```html
<button type="submit" class="btn btn-ouro btn-full">
            Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>
          </button>
```

#### Substituir por (trocar type="submit" por type="button"):
```html
<button type="button" id="formEnviar" class="btn btn-ouro btn-full">
            Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>
          </button>
```

---

## TAREFA 8.3 — JS: envio via fetch/AJAX

### Arquivo: `js/main.js`

#### Adicionar ao final do arquivo, antes do último `});` (fim do window.load):

```javascript
  /* ══ FORMULÁRIO CONTATO — AJAX ═══════════ */
  (function initFormContato() {
    const btnEnviar = document.getElementById('formEnviar');
    const formOk    = document.getElementById('formOk');
    const form      = document.querySelector('.contato-form');
    if (!btnEnviar || !form) return;

    btnEnviar.addEventListener('click', function () {
      /* Pegar valores */
      const nome     = document.getElementById('nome')?.value.trim()     || '';
      const telefone = document.getElementById('telefone')?.value.trim() || '';
      const email    = document.getElementById('email')?.value.trim()    || '';
      const area     = document.getElementById('area')?.value            || '';
      const mensagem = document.getElementById('mensagem')?.value.trim() || '';

      /* Validação mínima */
      if (!nome || !telefone) {
        alert('Por favor, preencha seu nome e telefone.');
        return;
      }

      /* Visual de carregando */
      btnEnviar.disabled    = true;
      btnEnviar.textContent = 'Enviando...';

      /* Montar FormData */
      const data = new FormData();
      data.append('nome',     nome);
      data.append('telefone', telefone);
      data.append('email',    email);
      data.append('area',     area);
      data.append('mensagem', mensagem);

      /* Enviar via fetch */
      fetch('contato-envia.php', {
        method: 'POST',
        body:   data
      })
      .then(res => res.json())
      .then(json => {
        if (json.status === 'ok') {
          /* Esconder form, mostrar mensagem de sucesso */
          form.style.display    = 'none';
          formOk.style.display  = 'block';
          /* Scroll suave até a mensagem */
          formOk.scrollIntoView({ behavior: 'smooth', block: 'center' });
        } else {
          alert('Ocorreu um erro ao enviar. Por favor, tente pelo WhatsApp.');
          btnEnviar.disabled    = false;
          btnEnviar.innerHTML   = 'Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>';
        }
      })
      .catch(() => {
        alert('Erro de conexão. Por favor, tente pelo WhatsApp.');
        btnEnviar.disabled  = false;
        btnEnviar.innerHTML = 'Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>';
      });
    });
  })();
```

---

## TESTAR APÓS APLICAR

- [ ] Acessar `https://gerciliberoeadvogados.com/#contato`
- [ ] Preencher nome e telefone e clicar em Enviar
- [ ] URL **não muda** — continua em `gerciliberoeadvogados.com`
- [ ] Botão muda para "Enviando..." durante o envio
- [ ] Formulário some e mensagem de sucesso aparece no lugar
- [ ] E-mail chega em `liberoadv.recepcao@hotmail.com`
- [ ] Testar sem preencher nome → alerta aparece, não envia
- [ ] Mobile: comportamento igual no celular

## ROLLBACK
```powershell
copy "tarefas\bkp_8\index.php"         "index.php"
copy "tarefas\bkp_8\main.js"           "js\main.js"
copy "tarefas\bkp_8\contato-envia.php" "contato-envia.php"
```

---

## NOTAS

```
A URL ?enviado=ok não vai mais existir após esta tarefa.
O PHP agora responde JSON em vez de redirecionar.
O JS (fetch) intercepta o envio e trata o resultado sem recarregar a página.

Após aplicar: subir os 3 arquivos alterados para public_html/ na Hostinger:
- index.php
- js/main.js
- contato-envia.php
```
