# TAREFA — Criar Site Institucional do Zero
# Projeto: Gérci Libero da Silva e Advogados Associados
# Data: 02/05/2026
# Status: [ ] Pendente

---

## CONTEXTO

Criar site institucional para escritório de advocacia especializado em
Direito do Trabalho e Direito Previdenciário, com sede em Cascavel/PR.
Advogados: Gérci Libero (trabalhista, 36 anos) e Leonardo Libero (previdenciário, 10 anos).
Referências visuais: vialleadvogados.adv.br e vanzo.adv.br.
Tom: sóbrio, tradicional, confiável — paleta azul profundo.

---

## ARQUIVOS ENVOLVIDOS

| Arquivo           | Caminho completo                                    | Ação  |
|-------------------|-----------------------------------------------------|-------|
| index.php         | D:\xamp\htdocs\gerci\Site\index.php                 | Criar |
| style.css         | D:\xamp\htdocs\gerci\Site\css\style.css             | Criar |
| main.js           | D:\xamp\htdocs\gerci\Site\js\main.js                | Criar |
| contato-envia.php | D:\xamp\htdocs\gerci\Site\contato-envia.php         | Criar |

> Criar também as pastas: css/ js/ images/logo/ images/equipe/ images/sobre/

---

## RESTRIÇÕES

- NÃO usar font-smoothing: antialiased — sempre `auto`
- NÃO usar frameworks CSS (Bootstrap, Tailwind) — CSS puro
- NÃO adicionar jQuery — JS vanilla puro
- NÃO usar imagens externas — apenas placeholders em CSS até as fotos chegarem
- Logo tipográfica em CSS até a logo real chegar

---

## ARQUIVO 1 — index.php (HTML completo)

### Criar o arquivo com o conteúdo abaixo:

```php
<?php
$nome    = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : '';
$enviado = isset($_GET['enviado']) ? $_GET['enviado'] : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Gérci Libero da Silva e Advogados Associados — Especialistas em Direito do Trabalho e Direito Previdenciário em Cascavel/PR. Mais de 36 anos de experiência.">
  <title>Gérci Libero — Advogados Associados | Cascavel/PR</title>

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ═══════════════════════════════════════════════════════════
     NAVBAR
═══════════════════════════════════════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner container">

    <a href="#" class="nav-logo">
      <span class="logo-name">Gérci Libero</span>
      <span class="logo-sub">Advogados Associados</span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Abrir menu">
      <span></span><span></span><span></span>
    </button>

    <ul class="nav-links" id="navLinks">
      <li><a href="#sobre" class="nav-link">O Escritório</a></li>
      <li><a href="#areas" class="nav-link">Áreas de Atuação</a></li>
      <li><a href="#equipe" class="nav-link">Equipe</a></li>
      <li><a href="#processo" class="nav-link">Como Funciona</a></li>
      <li><a href="#faq" class="nav-link">FAQ</a></li>
      <li><a href="#contato" class="nav-link">Contato</a></li>
    </ul>

    <a href="https://wa.me/554533265151" target="_blank" class="nav-cta" rel="noopener">
      <i class="fa-brands fa-whatsapp"></i>
      Falar com Especialista
    </a>

  </div>
</nav>

<!-- ═══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section id="hero">
  <div class="hero-overlay"></div>
  <div class="container hero-content">

    <div class="hero-badge reveal-up">
      <i class="fa-solid fa-scale-balanced"></i>
      Cascavel · Paraná · Brasil
    </div>

    <h1 class="hero-title reveal-up" style="--delay:.08s">
      Mais de 36 anos<br>
      <em>defendendo seus direitos.</em>
    </h1>

    <p class="hero-text reveal-up" style="--delay:.16s">
      Especialistas em Direito do Trabalho e Direito Previdenciário.<br>
      Atendimento humanizado, estratégia técnica e resultados que falam por si.
    </p>

    <div class="hero-actions reveal-up" style="--delay:.24s">
      <a href="https://wa.me/554533265151" target="_blank" class="btn btn-primary" rel="noopener">
        <i class="fa-brands fa-whatsapp"></i>
        Consulta pelo WhatsApp
      </a>
      <a href="#areas" class="btn btn-ghost">
        Nossas Especialidades
        <i class="fa-solid fa-arrow-down"></i>
      </a>
    </div>

  </div>

  <!-- Scroll indicator -->
  <div class="hero-scroll">
    <span class="scroll-line"></span>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     KPIs
═══════════════════════════════════════════════════════════ -->
<section class="kpi-section">
  <div class="container">
    <div class="kpi-grid">

      <div class="kpi-card reveal-up">
        <div class="kpi-number"><span class="counter" data-target="36">0</span></div>
        <div class="kpi-label">anos de experiência</div>
        <div class="kpi-sub">no mercado jurídico brasileiro</div>
      </div>

      <div class="kpi-card reveal-up" style="--delay:.1s">
        <div class="kpi-number">+<span class="counter" data-target="5000">0</span></div>
        <div class="kpi-label">casos atendidos</div>
        <div class="kpi-sub">em Direito do Trabalho e Previdenciário</div>
      </div>

      <div class="kpi-card reveal-up" style="--delay:.2s">
        <div class="kpi-number">+<span class="counter" data-target="4000">0</span></div>
        <div class="kpi-label">clientes satisfeitos</div>
        <div class="kpi-sub">com direitos efetivados</div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     SOBRE
═══════════════════════════════════════════════════════════ -->
<section id="sobre">
  <div class="container sobre-grid">

    <div class="sobre-img-col reveal-left">
      <div class="sobre-img-placeholder">
        <div class="sobre-img-badge">
          <strong>36</strong>
          <span>anos atuando<br>em Cascavel/PR</span>
        </div>
      </div>
    </div>

    <div class="sobre-text-col reveal-right">
      <span class="section-eyebrow">O Escritório</span>
      <h2 class="section-title">
        Tradição jurídica com<br><strong>estratégia moderna.</strong>
      </h2>
      <p class="sobre-lead">
        Fundado pelo Dr. Gérci Libero da Silva, o escritório nasceu da convicção de que todo trabalhador merece defesa técnica de qualidade — independentemente do tamanho da causa.
      </p>
      <p class="sobre-body">
        Com mais de três décadas dedicadas à advocacia em Cascavel, construímos uma reputação sólida baseada em resultados concretos, relacionamento transparente com os clientes e atualização constante da nossa equipe.
      </p>
      <p class="sobre-body">
        Hoje, com a incorporação do Dr. Leonardo Libero na área Previdenciária, o escritório oferece cobertura completa nas especialidades que mais impactam a vida do trabalhador brasileiro.
      </p>

      <div class="sobre-features">
        <div class="feature-item">
          <div class="feature-icon"><i class="fa-solid fa-check"></i></div>
          <div>Atendimento presencial e virtual em todo o Brasil</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><i class="fa-solid fa-check"></i></div>
          <div>Diagnóstico inicial sem custo</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><i class="fa-solid fa-check"></i></div>
          <div>Acompanhamento transparente em cada fase do processo</div>
        </div>
        <div class="feature-item">
          <div class="feature-icon"><i class="fa-solid fa-check"></i></div>
          <div>Equipe multidisciplinar com especialização comprovada</div>
        </div>
      </div>

      <a href="#contato" class="btn btn-primary">Agendar Consulta</a>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     ÁREAS DE ATUAÇÃO
═══════════════════════════════════════════════════════════ -->
<section id="areas">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Especialidades</span>
      <h2 class="section-title">Áreas de Atuação</h2>
      <p class="section-sub">
        Cada demanda é analisada por especialistas com profundo conhecimento na matéria específica.
      </p>
    </div>

    <div class="areas-grid">

      <div class="area-card reveal-up" style="--delay:.05s">
        <div class="area-icon">
          <i class="fa-solid fa-briefcase"></i>
        </div>
        <h3>Direito do Trabalho</h3>
        <p>Proteção dos direitos do trabalhador: verbas rescisórias, FGTS, assédio moral e sexual, reconhecimento de vínculo empregatício e muito mais.</p>
        <div class="area-tag">Especialidade Principal</div>
      </div>

      <div class="area-card reveal-up" style="--delay:.1s">
        <div class="area-icon">
          <i class="fa-solid fa-shield-halved"></i>
        </div>
        <h3>Direito Previdenciário</h3>
        <p>Aposentadoria por idade, tempo de contribuição e especial. Revisões de benefícios, auxílios por incapacidade e recursos contra negativas do INSS.</p>
        <div class="area-tag">Especialidade Principal</div>
      </div>

      <div class="area-card reveal-up" style="--delay:.15s">
        <div class="area-icon">
          <i class="fa-solid fa-calculator"></i>
        </div>
        <h3>Planejamento Previdenciário</h3>
        <p>Estudo técnico e matemático para identificar o momento ideal da aposentadoria, garantindo o maior benefício possível dentro das regras vigentes.</p>
      </div>

      <div class="area-card reveal-up" style="--delay:.2s">
        <div class="area-icon">
          <i class="fa-solid fa-file-contract"></i>
        </div>
        <h3>Direito Civil</h3>
        <p>Elaboração e análise de contratos, ações de responsabilidade civil, indenizações e assessoria em demandas de ordem privada.</p>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     EQUIPE
═══════════════════════════════════════════════════════════ -->
<section id="equipe">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Quem Somos</span>
      <h2 class="section-title">Nossa Equipe</h2>
      <p class="section-sub">
        A experiência de décadas aliada à atualização técnica constante.
      </p>
    </div>

    <div class="equipe-grid">

      <div class="membro-card reveal-up">
        <div class="membro-foto membro-foto--1">
          <!-- Substituir src quando tiver a foto: -->
          <!-- <img src="images/equipe/gerci.jpg" alt="Dr. Gérci Libero da Silva"> -->
          <div class="membro-foto-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <h3>Dr. Gérci Libero da Silva</h3>
          <span class="membro-oab">OAB/PR — Fundador</span>
          <div class="membro-area">
            <i class="fa-solid fa-briefcase"></i>
            Direito do Trabalho
          </div>
          <p>Mais de 36 anos de experiência e atuação em casos de alta complexidade na defesa dos direitos do trabalhador em Cascavel e região.</p>
        </div>
      </div>

      <div class="membro-card reveal-up" style="--delay:.12s">
        <div class="membro-foto membro-foto--2">
          <!-- <img src="images/equipe/leonardo.jpg" alt="Dr. Leonardo Libero da Silva"> -->
          <div class="membro-foto-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <h3>Dr. Leonardo Libero da Silva</h3>
          <span class="membro-oab">OAB/PR — Sócio</span>
          <div class="membro-area">
            <i class="fa-solid fa-shield-halved"></i>
            Direito Previdenciário
          </div>
          <p>Especialista em Direito Previdenciário com mais de 10 anos de experiência em planejamento estratégico e revisões de benefícios.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     COMO FUNCIONA
═══════════════════════════════════════════════════════════ -->
<section id="processo">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Transparência</span>
      <h2 class="section-title">Como Funciona</h2>
      <p class="section-sub">
        Acompanhe cada etapa da defesa dos seus interesses.
      </p>
    </div>

    <div class="processo-grid">

      <div class="processo-step reveal-up" style="--delay:.05s">
        <div class="step-number">01</div>
        <div class="step-content">
          <h3>Primeiro Contato</h3>
          <p>Atendimento personalizado, presencial em nossa sede ou virtualmente, para diagnóstico inicial do seu caso sem custo.</p>
        </div>
      </div>

      <div class="processo-step reveal-up" style="--delay:.1s">
        <div class="step-number">02</div>
        <div class="step-content">
          <h3>Estratégia Processual</h3>
          <p>Após análise documental, prosseguimos com o pedido administrativo ou judicial conforme a necessidade técnica do caso.</p>
        </div>
      </div>

      <div class="processo-step reveal-up" style="--delay:.15s">
        <div class="step-number">03</div>
        <div class="step-content">
          <h3>Fase Instrutória</h3>
          <p>Sob o crivo do magistrado, intimamos a parte contrária e demonstramos e reforçamos o direito pleiteado com toda a documentação necessária.</p>
        </div>
      </div>

      <div class="processo-step reveal-up" style="--delay:.2s">
        <div class="step-number">04</div>
        <div class="step-content">
          <h3>Decisão Final</h3>
          <p>Acompanhamento integral até a decisão judicial final, garantindo que a sentença seja cumprida e o seu direito efetivado.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     FAQ
═══════════════════════════════════════════════════════════ -->
<section id="faq">
  <div class="container faq-wrap">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Dúvidas Frequentes</span>
      <h2 class="section-title">Perguntas Frequentes</h2>
    </div>

    <div class="faq-list reveal-up" style="--delay:.1s">

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          O escritório consegue atender em todo o Brasil?
          <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-answer">
          <p>Sim. Através da digitalização dos processos judiciais e do uso de videoconferências, representamos clientes em qualquer estado do território nacional com total segurança jurídica.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          Como a Reforma da Previdência afeta meu pedido?
          <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-answer">
          <p>A reforma criou regras de transição complexas. Analisamos seu histórico para verificar em qual regra você se enquadra com maior vantagem financeira — é um estudo técnico e matemático individualizado.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          Tive meu benefício negado pelo INSS. O que fazer?
          <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-answer">
          <p>É possível reverter a negativa através de recurso administrativo ou ação judicial, onde as provas são analisadas de forma mais abrangente por um juiz. Na maioria dos casos conseguimos reverter a decisão.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          O que é a Revisão da Vida Toda?
          <span class="faq-icon"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-answer">
          <p>É uma tese que permite incluir salários de contribuição anteriores a 1994 no cálculo da aposentadoria, o que pode aumentar significativamente o valor mensal para quem ganhava bem nessa época. Entre em contato para verificar se você tem direito.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     CONTATO
═══════════════════════════════════════════════════════════ -->
<section id="contato">
  <div class="container contato-grid">

    <div class="contato-info reveal-left">
      <span class="section-eyebrow section-eyebrow--light">Fale Conosco</span>
      <h2 class="section-title section-title--light">Agende sua<br>consulta hoje.</h2>
      <p class="contato-lead">
        Não espere. Prazos jurídicos são fatais para muitos direitos. Entre em contato agora e descubra como podemos ajudar.
      </p>

      <div class="contato-dados">
        <div class="dado-item">
          <div class="dado-icon"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <strong>Cascavel/PR</strong>
            <span>Atendimento presencial e virtual</span>
          </div>
        </div>
        <div class="dado-item">
          <div class="dado-icon"><i class="fa-solid fa-phone"></i></div>
          <div>
            <strong>(45) 3326-5151</strong>
            <span>WhatsApp disponível</span>
          </div>
        </div>
        <div class="dado-item">
          <div class="dado-icon"><i class="fa-solid fa-envelope"></i></div>
          <div>
            <strong>liberoadv.recepcao@hotmail.com</strong>
            <span>Resposta em até 1 dia útil</span>
          </div>
        </div>
        <div class="dado-item">
          <div class="dado-icon"><i class="fa-solid fa-clock"></i></div>
          <div>
            <strong>Segunda a Sexta</strong>
            <span>08:00 às 18:00</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contato-form-col reveal-right">
      <?php if ($enviado === 'ok'): ?>
        <div class="form-sucesso">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem enviada!</h3>
          <p>Em breve entraremos em contato. Você também pode nos chamar pelo WhatsApp para atendimento imediato.</p>
          <a href="https://wa.me/554533265151" class="btn btn-primary" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp"></i> Abrir WhatsApp
          </a>
        </div>
      <?php else: ?>
        <form class="contato-form" action="contato-envia.php" method="POST">
          <div class="form-group">
            <label for="nome">Seu nome</label>
            <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="telefone">WhatsApp / Telefone</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(45) 99999-9999" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" placeholder="seu@email.com">
            </div>
          </div>
          <div class="form-group">
            <label for="area">Área de interesse</label>
            <select id="area" name="area">
              <option value="">Selecione...</option>
              <option>Direito do Trabalho</option>
              <option>Direito Previdenciário</option>
              <option>Planejamento Previdenciário</option>
              <option>Direito Civil</option>
              <option>Outro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="mensagem">Descreva brevemente seu caso</label>
            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Conte um pouco sobre sua situação para que possamos ajudar melhor..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">
            Enviar Mensagem
            <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ═══════════════════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════════════════ -->
<footer id="footer">
  <div class="container footer-inner">

    <div class="footer-brand">
      <span class="logo-name">Gérci Libero</span>
      <span class="logo-sub">Advogados Associados</span>
      <p>Tradição, técnica e comprometimento na defesa dos seus direitos.</p>
    </div>

    <div class="footer-links">
      <h4>Navegação</h4>
      <ul>
        <li><a href="#sobre">O Escritório</a></li>
        <li><a href="#areas">Áreas de Atuação</a></li>
        <li><a href="#equipe">Equipe</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </div>

    <div class="footer-links">
      <h4>Especialidades</h4>
      <ul>
        <li><a href="#areas">Direito do Trabalho</a></li>
        <li><a href="#areas">Direito Previdenciário</a></li>
        <li><a href="#areas">Planejamento Previdenciário</a></li>
        <li><a href="#areas">Direito Civil</a></li>
      </ul>
    </div>

    <div class="footer-contato">
      <h4>Contato</h4>
      <p><i class="fa-solid fa-phone"></i> (45) 3326-5151</p>
      <p><i class="fa-solid fa-envelope"></i> liberoadv.recepcao@hotmail.com</p>
      <p><i class="fa-solid fa-location-dot"></i> Cascavel/PR</p>
      <a href="https://wa.me/554533265151" target="_blank" class="footer-wa" rel="noopener">
        <i class="fa-brands fa-whatsapp"></i> WhatsApp
      </a>
    </div>

  </div>

  <div class="footer-bottom">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Gérci Libero da Silva e Advogados Associados. Todos os direitos reservados.</p>
      <p class="footer-oab">OAB/PR — Advocacia responsável e ética.</p>
    </div>
  </div>
</footer>

<!-- ═══════════════════════════════════════════════════════════
     WHATSAPP FLOAT
═══════════════════════════════════════════════════════════ -->
<a href="https://wa.me/554533265151" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Fale pelo WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
  <span class="wa-tooltip">Falar com Especialista</span>
</a>

<!-- JS -->
<script src="js/main.js"></script>
</body>
</html>
```

---

## ARQUIVO 2 — css/style.css (CSS completo)

### Criar o arquivo com o conteúdo abaixo:

```css
/* ════════════════════════════════════════════════════════════
   RESET & VARIÁVEIS
════════════════════════════════════════════════════════════ */
*, *::before, *::after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

:root {
  --blue-dark:   #1B3A6B;
  --blue-mid:    #2A5FA5;
  --blue-light:  #4A80C4;
  --gold:        #C9A84C;
  --white:       #FFFFFF;
  --off-white:   #F4F6F9;
  --gray:        #4A5568;
  --gray-light:  #8896A8;
  --border:      rgba(27,58,107,0.12);

  --fh: 'Playfair Display', Georgia, serif;
  --fb: 'Inter', system-ui, sans-serif;

  --container: 1160px;
  --radius: 12px;
  --radius-lg: 20px;

  --shadow-sm: 0 2px 8px rgba(27,58,107,0.08);
  --shadow-md: 0 8px 32px rgba(27,58,107,0.12);
  --shadow-lg: 0 20px 60px rgba(27,58,107,0.18);
}

html { scroll-behavior: smooth; }

body {
  font-family: var(--fb);
  font-size: 16px;
  color: var(--gray);
  background: var(--white);
  -webkit-font-smoothing: auto;
  overflow-x: hidden;
}

a, a:hover, a:visited, a:active {
  text-decoration: none;
  color: inherit;
}

img { max-width: 100%; display: block; }

ul { list-style: none; }

/* ── Container ─── */
.container {
  width: 100%;
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 24px;
}

/* ════════════════════════════════════════════════════════════
   TIPOGRAFIA GLOBAL
════════════════════════════════════════════════════════════ */
.section-eyebrow {
  display: inline-block;
  font-family: var(--fb);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: var(--blue-mid);
  margin-bottom: 14px;
}

.section-eyebrow--light { color: rgba(255,255,255,0.65); }

.section-title {
  font-family: var(--fh);
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  color: var(--blue-dark);
  line-height: 1.2;
  margin-bottom: 18px;
}

.section-title strong {
  color: var(--blue-mid);
  font-weight: 700;
}

.section-title--light { color: #ffffff; }
.section-title--light strong { color: rgba(255,255,255,0.75); }

.section-sub {
  font-size: 1.05rem;
  color: var(--gray-light);
  line-height: 1.7;
  max-width: 540px;
}

.section-header {
  text-align: center;
  margin-bottom: 56px;
}

.section-header .section-sub {
  margin: 0 auto;
}

/* ════════════════════════════════════════════════════════════
   BOTÕES
════════════════════════════════════════════════════════════ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--fb);
  font-size: 15px;
  font-weight: 600;
  padding: 14px 28px;
  border-radius: 8px;
  border: 2px solid transparent;
  cursor: pointer;
  transition: all 0.25s ease;
  white-space: nowrap;
}

.btn-primary {
  background: var(--blue-mid);
  color: #ffffff;
  border-color: var(--blue-mid);
}

.btn-primary:hover {
  background: var(--blue-dark);
  border-color: var(--blue-dark);
  transform: translateY(-2px);
  box-shadow: 0 8px 24px rgba(42,95,165,0.35);
}

.btn-ghost {
  background: transparent;
  color: rgba(255,255,255,0.85);
  border-color: rgba(255,255,255,0.4);
}

.btn-ghost:hover {
  background: rgba(255,255,255,0.1);
  border-color: rgba(255,255,255,0.8);
  color: #ffffff;
}

.btn-full { width: 100%; justify-content: center; }

/* ════════════════════════════════════════════════════════════
   NAVBAR
════════════════════════════════════════════════════════════ */
#navbar {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1000;
  transition: background 0.4s ease, box-shadow 0.4s ease;
  background: transparent;
}

#navbar.scrolled {
  background: var(--blue-dark);
  box-shadow: 0 4px 24px rgba(0,0,0,0.25);
}

#navbar.nav-white {
  background: rgba(255,255,255,0.97);
  box-shadow: 0 2px 16px rgba(27,58,107,0.1);
}

.nav-inner {
  display: flex;
  align-items: center;
  gap: 32px;
  height: 72px;
}

/* Logo */
.nav-logo {
  display: flex;
  flex-direction: column;
  line-height: 1.1;
  flex-shrink: 0;
}

.logo-name {
  font-family: var(--fh);
  font-size: 1.15rem;
  font-weight: 700;
  color: #ffffff;
  letter-spacing: -0.01em;
  transition: color 0.3s;
}

.logo-sub {
  font-family: var(--fb);
  font-size: 10px;
  font-weight: 500;
  color: rgba(255,255,255,0.6);
  letter-spacing: 0.08em;
  text-transform: uppercase;
  transition: color 0.3s;
}

#navbar.nav-white .logo-name { color: var(--blue-dark); }
#navbar.nav-white .logo-sub  { color: var(--gray-light); }

/* Links */
.nav-links {
  display: flex;
  align-items: center;
  gap: 4px;
  margin-left: auto;
}

.nav-link {
  font-size: 13.5px;
  font-weight: 500;
  color: rgba(255,255,255,0.8);
  padding: 6px 12px;
  border-radius: 6px;
  transition: all 0.2s;
}

.nav-link:hover {
  color: #ffffff;
  background: rgba(255,255,255,0.1);
}

#navbar.nav-white .nav-link {
  color: var(--gray);
}

#navbar.nav-white .nav-link:hover {
  color: var(--blue-dark);
  background: rgba(27,58,107,0.06);
}

/* CTA */
.nav-cta {
  flex-shrink: 0;
  background: #25D366;
  color: #ffffff !important;
  font-size: 13.5px;
  font-weight: 600;
  padding: 9px 18px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  gap: 7px;
  transition: all 0.25s;
}

.nav-cta:hover {
  background: #1ebe57;
  transform: translateY(-1px);
  box-shadow: 0 4px 16px rgba(37,211,102,0.35);
}

/* Toggle mobile */
.nav-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  margin-left: auto;
  padding: 8px;
}

.nav-toggle span {
  display: block;
  width: 24px;
  height: 2px;
  background: #ffffff;
  border-radius: 2px;
  transition: all 0.3s;
}

#navbar.nav-white .nav-toggle span { background: var(--blue-dark); }

/* ════════════════════════════════════════════════════════════
   HERO
════════════════════════════════════════════════════════════ */
#hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  background:
    linear-gradient(160deg, #0D2549 0%, #1B3A6B 45%, #2A5FA5 100%);
  overflow: hidden;
  padding-top: 72px;
}

/* Textura sutil */
#hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image:
    repeating-linear-gradient(
      0deg,
      transparent,
      transparent 60px,
      rgba(255,255,255,0.015) 60px,
      rgba(255,255,255,0.015) 61px
    ),
    repeating-linear-gradient(
      90deg,
      transparent,
      transparent 60px,
      rgba(255,255,255,0.015) 60px,
      rgba(255,255,255,0.015) 61px
    );
  pointer-events: none;
}

/* Círculo decorativo */
#hero::after {
  content: '';
  position: absolute;
  right: -200px;
  top: 50%;
  transform: translateY(-50%);
  width: 700px;
  height: 700px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(42,95,165,0.4) 0%, transparent 70%);
  pointer-events: none;
}

.hero-content {
  position: relative;
  z-index: 1;
  padding: 80px 24px;
  max-width: 760px;
}

.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-family: var(--fb);
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.7);
  border: 1px solid rgba(255,255,255,0.2);
  padding: 7px 16px;
  border-radius: 100px;
  margin-bottom: 32px;
}

.hero-badge i { color: var(--gold); }

.hero-title {
  font-family: var(--fh);
  font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 700;
  color: #ffffff;
  line-height: 1.15;
  margin-bottom: 24px;
}

.hero-title em {
  font-style: italic;
  color: rgba(255,255,255,0.75);
}

.hero-text {
  font-size: 1.1rem;
  color: rgba(255,255,255,0.72);
  line-height: 1.75;
  margin-bottom: 40px;
}

.hero-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

.hero-scroll {
  position: absolute;
  bottom: 36px;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.scroll-line {
  display: block;
  width: 1px;
  height: 48px;
  background: linear-gradient(to bottom, rgba(255,255,255,0.5), transparent);
  animation: scrollAnim 1.8s ease-in-out infinite;
}

@keyframes scrollAnim {
  0%, 100% { opacity: 1; transform: scaleY(1); transform-origin: top; }
  50%       { opacity: 0.4; transform: scaleY(0.5); }
}

/* ════════════════════════════════════════════════════════════
   KPI SECTION
════════════════════════════════════════════════════════════ */
.kpi-section {
  padding: 72px 0;
  background: var(--off-white);
  border-bottom: 1px solid var(--border);
}

.kpi-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 24px;
}

.kpi-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 40px 36px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.kpi-card::before {
  content: '';
  position: absolute;
  top: 0; left: 0; right: 0;
  height: 3px;
  background: linear-gradient(90deg, var(--blue-mid), var(--blue-light));
}

.kpi-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}

.kpi-number {
  font-family: var(--fh);
  font-size: clamp(2.6rem, 5vw, 3.6rem);
  font-weight: 700;
  color: var(--blue-dark);
  line-height: 1;
  margin-bottom: 10px;
  -webkit-font-smoothing: auto;
}

.kpi-label {
  font-family: var(--fb);
  font-size: 15px;
  font-weight: 600;
  color: var(--blue-dark);
  margin-bottom: 4px;
}

.kpi-sub {
  font-family: var(--fb);
  font-size: 13px;
  color: var(--gray-light);
}

/* ════════════════════════════════════════════════════════════
   SOBRE
════════════════════════════════════════════════════════════ */
#sobre {
  padding: 100px 0;
  background: var(--white);
}

.sobre-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: center;
}

/* Imagem placeholder */
.sobre-img-col { position: relative; }

.sobre-img-placeholder {
  width: 100%;
  aspect-ratio: 4/5;
  background: linear-gradient(145deg, #1B3A6B 0%, #2A5FA5 100%);
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
}

.sobre-img-placeholder::after {
  content: '';
  position: absolute;
  inset: 0;
  background:
    repeating-linear-gradient(
      45deg,
      transparent,
      transparent 20px,
      rgba(255,255,255,0.03) 20px,
      rgba(255,255,255,0.03) 21px
    );
}

.sobre-img-badge {
  position: absolute;
  bottom: -20px;
  right: -20px;
  background: var(--white);
  border-radius: var(--radius);
  padding: 20px 24px;
  box-shadow: var(--shadow-lg);
  text-align: center;
  z-index: 2;
}

.sobre-img-badge strong {
  display: block;
  font-family: var(--fh);
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--blue-dark);
  line-height: 1;
}

.sobre-img-badge span {
  display: block;
  font-size: 12px;
  color: var(--gray-light);
  margin-top: 4px;
}

/* Texto */
.sobre-lead {
  font-size: 1.1rem;
  color: var(--blue-dark);
  font-weight: 500;
  line-height: 1.65;
  margin-bottom: 16px;
}

.sobre-body {
  font-size: 0.95rem;
  color: var(--gray);
  line-height: 1.8;
  margin-bottom: 14px;
}

.sobre-features {
  display: flex;
  flex-direction: column;
  gap: 12px;
  margin: 28px 0 32px;
}

.feature-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 14.5px;
  color: var(--gray);
}

.feature-icon {
  width: 30px;
  height: 30px;
  min-width: 30px;
  border-radius: 7px;
  background: rgba(42,95,165,0.08);
  border: 1px solid rgba(42,95,165,0.15);
  color: var(--blue-mid);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
}

/* ════════════════════════════════════════════════════════════
   ÁREAS DE ATUAÇÃO
════════════════════════════════════════════════════════════ */
#areas {
  padding: 100px 0;
  background: var(--off-white);
}

.areas-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 24px;
}

.area-card {
  background: var(--white);
  border-radius: var(--radius-lg);
  padding: 40px 36px;
  border: 1px solid var(--border);
  box-shadow: var(--shadow-sm);
  position: relative;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.area-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-md);
}

.area-icon {
  width: 52px;
  height: 52px;
  border-radius: 12px;
  background: linear-gradient(135deg, var(--blue-dark), var(--blue-mid));
  color: #ffffff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  margin-bottom: 20px;
}

.area-card h3 {
  font-family: var(--fh);
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--blue-dark);
  margin-bottom: 12px;
}

.area-card p {
  font-size: 14.5px;
  color: var(--gray);
  line-height: 1.75;
  margin-bottom: 20px;
}

.area-tag {
  display: inline-block;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  color: var(--blue-mid);
  background: rgba(42,95,165,0.08);
  padding: 4px 10px;
  border-radius: 100px;
}

/* ════════════════════════════════════════════════════════════
   EQUIPE
════════════════════════════════════════════════════════════ */
#equipe {
  padding: 100px 0;
  background: var(--white);
}

.equipe-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 32px;
  max-width: 880px;
  margin: 0 auto;
}

.membro-card {
  background: var(--off-white);
  border-radius: var(--radius-lg);
  overflow: hidden;
  border: 1px solid var(--border);
  transition: box-shadow 0.3s;
}

.membro-card:hover { box-shadow: var(--shadow-md); }

/* Foto placeholder */
.membro-foto {
  width: 100%;
  aspect-ratio: 4/3;
  background: linear-gradient(145deg, #1B3A6B, #2A5FA5);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}

/* Quando tiver foto real: */
.membro-foto img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top;
  display: block;
}

.membro-foto-placeholder {
  font-size: 56px;
  color: rgba(255,255,255,0.25);
}

.membro-info {
  padding: 28px 32px;
}

.membro-info h3 {
  font-family: var(--fh);
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--blue-dark);
  margin-bottom: 4px;
}

.membro-oab {
  font-size: 12px;
  font-weight: 500;
  color: var(--gray-light);
  letter-spacing: 0.05em;
  display: block;
  margin-bottom: 12px;
}

.membro-area {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-size: 13px;
  font-weight: 600;
  color: var(--blue-mid);
  margin-bottom: 14px;
}

.membro-info p {
  font-size: 14px;
  color: var(--gray);
  line-height: 1.75;
}

/* ════════════════════════════════════════════════════════════
   PROCESSO
════════════════════════════════════════════════════════════ */
#processo {
  padding: 100px 0;
  background: var(--blue-dark);
  position: relative;
  overflow: hidden;
}

#processo::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    0deg, transparent, transparent 60px,
    rgba(255,255,255,0.025) 60px, rgba(255,255,255,0.025) 61px
  );
  pointer-events: none;
}

#processo .section-eyebrow { color: rgba(255,255,255,0.5); }
#processo .section-title   { color: #ffffff; }
#processo .section-sub     { color: rgba(255,255,255,0.55); }

.processo-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
  position: relative;
  z-index: 1;
}

/* Linha conectora */
.processo-grid::before {
  content: '';
  position: absolute;
  top: 28px;
  left: calc(12.5% + 20px);
  right: calc(12.5% + 20px);
  height: 1px;
  background: rgba(255,255,255,0.15);
}

.processo-step {
  padding: 0 20px;
  text-align: center;
}

.step-number {
  font-family: var(--fh);
  font-size: 0.9rem;
  font-weight: 700;
  color: rgba(255,255,255,0.4);
  letter-spacing: 0.08em;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  border: 1px solid rgba(255,255,255,0.2);
  background: rgba(255,255,255,0.07);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 24px;
}

.step-content h3 {
  font-family: var(--fh);
  font-size: 1.05rem;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 10px;
}

.step-content p {
  font-size: 13.5px;
  color: rgba(255,255,255,0.55);
  line-height: 1.75;
}

/* ════════════════════════════════════════════════════════════
   FAQ
════════════════════════════════════════════════════════════ */
#faq {
  padding: 100px 0;
  background: var(--off-white);
}

.faq-wrap .section-header { margin-bottom: 48px; }

.faq-list {
  max-width: 740px;
  margin: 0 auto;
}

.faq-item {
  border-bottom: 1px solid var(--border);
}

.faq-item:first-child { border-top: 1px solid var(--border); }

.faq-question {
  width: 100%;
  background: none;
  border: none;
  cursor: pointer;
  padding: 24px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  font-family: var(--fb);
  font-size: 16px;
  font-weight: 600;
  color: var(--blue-dark);
  text-align: left;
  transition: color 0.2s;
}

.faq-question:hover { color: var(--blue-mid); }

.faq-icon {
  width: 28px;
  height: 28px;
  min-width: 28px;
  border-radius: 50%;
  border: 1.5px solid var(--border);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
  color: var(--blue-mid);
  transition: all 0.3s;
}

.faq-question[aria-expanded="true"] .faq-icon {
  background: var(--blue-mid);
  border-color: var(--blue-mid);
  color: #ffffff;
  transform: rotate(45deg);
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s ease;
}

.faq-answer.open { max-height: 400px; padding-bottom: 24px; }

.faq-answer p {
  font-size: 15px;
  color: var(--gray);
  line-height: 1.8;
}

/* ════════════════════════════════════════════════════════════
   CONTATO
════════════════════════════════════════════════════════════ */
#contato {
  padding: 100px 0;
  background: var(--blue-dark);
  position: relative;
  overflow: hidden;
}

#contato::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    90deg, transparent, transparent 60px,
    rgba(255,255,255,0.02) 60px, rgba(255,255,255,0.02) 61px
  );
  pointer-events: none;
}

.contato-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: start;
  position: relative;
  z-index: 1;
}

.contato-lead {
  font-size: 1rem;
  color: rgba(255,255,255,0.65);
  line-height: 1.75;
  margin-bottom: 40px;
}

.contato-dados {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.dado-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
}

.dado-icon {
  width: 38px;
  height: 38px;
  min-width: 38px;
  border-radius: 9px;
  background: rgba(255,255,255,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgba(255,255,255,0.7);
  font-size: 14px;
}

.dado-item strong {
  display: block;
  font-size: 14.5px;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 2px;
}

.dado-item span {
  font-size: 13px;
  color: rgba(255,255,255,0.5);
}

/* Formulário */
.contato-form-col {
  background: #ffffff;
  border-radius: var(--radius-lg);
  padding: 40px;
}

.contato-form { display: flex; flex-direction: column; gap: 20px; }

.form-group {
  display: flex;
  flex-direction: column;
  gap: 6px;
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 16px;
}

label {
  font-size: 13px;
  font-weight: 600;
  color: var(--blue-dark);
}

input, select, textarea {
  font-family: var(--fb);
  font-size: 14.5px;
  color: var(--gray);
  background: var(--off-white);
  border: 1.5px solid var(--border);
  border-radius: 8px;
  padding: 12px 14px;
  transition: border-color 0.2s, box-shadow 0.2s;
  outline: none;
  width: 100%;
  -webkit-font-smoothing: auto;
}

input:focus, select:focus, textarea:focus {
  border-color: var(--blue-mid);
  box-shadow: 0 0 0 3px rgba(42,95,165,0.1);
}

textarea { resize: vertical; }

/* Sucesso */
.form-sucesso {
  text-align: center;
  padding: 40px 20px;
}

.form-sucesso i {
  font-size: 3rem;
  color: #22C55E;
  margin-bottom: 16px;
  display: block;
}

.form-sucesso h3 {
  font-family: var(--fh);
  font-size: 1.5rem;
  color: var(--blue-dark);
  margin-bottom: 10px;
}

.form-sucesso p {
  color: var(--gray);
  margin-bottom: 24px;
}

/* ════════════════════════════════════════════════════════════
   FOOTER
════════════════════════════════════════════════════════════ */
#footer {
  background: #0D2549;
  color: rgba(255,255,255,0.7);
}

.footer-inner {
  display: grid;
  grid-template-columns: 2fr 1fr 1fr 1.5fr;
  gap: 48px;
  padding: 64px 24px;
}

.footer-brand .logo-name { color: #ffffff; font-size: 1.1rem; }
.footer-brand .logo-sub  { color: rgba(255,255,255,0.4); margin-bottom: 16px; }
.footer-brand p          { font-size: 13.5px; color: rgba(255,255,255,0.5); line-height: 1.65; }

.footer-links h4, .footer-contato h4 {
  font-family: var(--fb);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.4);
  margin-bottom: 16px;
}

.footer-links ul { display: flex; flex-direction: column; gap: 8px; }

.footer-links a {
  font-size: 14px;
  color: rgba(255,255,255,0.6);
  transition: color 0.2s;
}

.footer-links a:hover { color: #ffffff; }

.footer-contato p {
  font-size: 13.5px;
  color: rgba(255,255,255,0.6);
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-wa {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 13.5px;
  font-weight: 600;
  color: #25D366;
  margin-top: 12px;
  transition: opacity 0.2s;
}

.footer-wa:hover { opacity: 0.8; }

.footer-bottom {
  border-top: 1px solid rgba(255,255,255,0.07);
  padding: 20px 0;
}

.footer-bottom .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 8px;
}

.footer-bottom p {
  font-size: 12.5px;
  color: rgba(255,255,255,0.35);
}

.footer-oab {
  font-size: 11.5px;
  color: rgba(255,255,255,0.25);
  font-style: italic;
}

/* ════════════════════════════════════════════════════════════
   WHATSAPP FLOAT
════════════════════════════════════════════════════════════ */
.whatsapp-float {
  position: fixed;
  bottom: 28px;
  right: 24px;
  z-index: 900;
  width: 56px;
  height: 56px;
  border-radius: 50%;
  background: #25D366;
  color: #ffffff;
  font-size: 26px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 20px rgba(37,211,102,0.4);
  transition: transform 0.25s ease, box-shadow 0.25s ease;
  animation: pulseWA 2.5s ease-in-out infinite;
}

.whatsapp-float:hover {
  transform: scale(1.1);
  animation: none;
  box-shadow: 0 6px 28px rgba(37,211,102,0.55);
}

@keyframes pulseWA {
  0%, 100% { box-shadow: 0 4px 20px rgba(37,211,102,0.4); }
  50%       { box-shadow: 0 4px 32px rgba(37,211,102,0.7); }
}

.wa-tooltip {
  position: absolute;
  right: 68px;
  white-space: nowrap;
  background: var(--blue-dark);
  color: #ffffff;
  font-size: 12.5px;
  font-weight: 600;
  padding: 6px 12px;
  border-radius: 6px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.2s;
}

.whatsapp-float:hover .wa-tooltip { opacity: 1; }

/* ════════════════════════════════════════════════════════════
   REVEAL ANIMATIONS
════════════════════════════════════════════════════════════ */
.reveal-up,
.reveal-left,
.reveal-right {
  opacity: 0;
  transition: opacity 0.65s ease, transform 0.65s ease;
  transition-delay: var(--delay, 0s);
}

.reveal-up    { transform: translateY(30px); }
.reveal-left  { transform: translateX(-30px); }
.reveal-right { transform: translateX(30px); }

.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible {
  opacity: 1;
  transform: none;
}

/* ════════════════════════════════════════════════════════════
   RESPONSIVO
════════════════════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .sobre-grid { grid-template-columns: 1fr; gap: 48px; }
  .sobre-img-col { max-width: 480px; margin: 0 auto; }
  .footer-inner { grid-template-columns: 1fr 1fr; gap: 32px; }
  .processo-grid { grid-template-columns: repeat(2, 1fr); gap: 40px; }
  .processo-grid::before { display: none; }
}

@media (max-width: 768px) {
  .nav-links, .nav-cta { display: none; }
  .nav-toggle { display: flex; }

  .nav-links.open {
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 72px; left: 0; right: 0;
    background: var(--blue-dark);
    padding: 20px 24px 28px;
    gap: 4px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.3);
  }

  .nav-links.open .nav-link {
    padding: 12px 16px;
    font-size: 15px;
    border-radius: 8px;
  }

  .kpi-grid  { grid-template-columns: 1fr; }
  .areas-grid { grid-template-columns: 1fr; }
  .equipe-grid { grid-template-columns: 1fr; }
  .contato-grid { grid-template-columns: 1fr; gap: 48px; }
  .footer-inner { grid-template-columns: 1fr; gap: 28px; }
  .form-row { grid-template-columns: 1fr; }
  .footer-bottom .container { flex-direction: column; text-align: center; }
  .hero-content { padding: 60px 24px; }
}
```

---

## ARQUIVO 3 — js/main.js (JS completo)

### Criar o arquivo com o conteúdo abaixo:

```javascript
'use strict';

/* ── Navbar scroll ──────────────────────────────────────── */
(function initNavbar() {
  const nav = document.getElementById('navbar');
  if (!nav) return;

  function updateNav() {
    if (window.scrollY > 80) {
      nav.classList.add('scrolled');
      nav.classList.remove('nav-white');
    } else if (window.scrollY > 20) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled', 'nav-white');
    }
  }

  window.addEventListener('scroll', updateNav, { passive: true });
  updateNav();
})();

/* ── Mobile menu ───────────────────────────────────────── */
(function initMobileMenu() {
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  if (!toggle || !links) return;

  toggle.addEventListener('click', () => {
    links.classList.toggle('open');
  });

  links.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => links.classList.remove('open'));
  });
})();

/* ── Smooth scroll ─────────────────────────────────────── */
(function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = 80;
      window.scrollTo({
        top: target.getBoundingClientRect().top + window.scrollY - offset,
        behavior: 'smooth'
      });
    });
  });
})();

/* ── Reveal on scroll ──────────────────────────────────── */
(function initReveal() {
  const els = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');
  if (!els.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        obs.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => obs.observe(el));
})();

/* ── Contadores animados ───────────────────────────────── */
(function initCounters() {
  const counters = document.querySelectorAll('.counter');
  if (!counters.length) return;

  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const target = +el.dataset.target;
      const t0     = performance.now();
      const dur    = target > 1000 ? 2200 : 1600;

      const tick = now => {
        const p = Math.min((now - t0) / dur, 1);
        const ease = 1 - Math.pow(1 - p, 3);
        el.textContent = Math.round(ease * target).toLocaleString('pt-BR');
        if (p < 1) requestAnimationFrame(tick);
        else el.textContent = target.toLocaleString('pt-BR');
      };

      requestAnimationFrame(tick);
      obs.unobserve(el);
    });
  }, { threshold: 0.5 });

  counters.forEach(c => obs.observe(c));
})();

/* ── FAQ accordion ─────────────────────────────────────── */
(function initFAQ() {
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', () => {
      const answer   = btn.nextElementSibling;
      const isOpen   = btn.getAttribute('aria-expanded') === 'true';

      // Fecha todos
      document.querySelectorAll('.faq-question').forEach(b => {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling.classList.remove('open');
      });

      // Abre o clicado (toggle)
      if (!isOpen) {
        btn.setAttribute('aria-expanded', 'true');
        answer.classList.add('open');
      }
    });
  });
})();
```

---

## ARQUIVO 4 — contato-envia.php

### Criar o arquivo com o conteúdo abaixo:

```php
<?php
/* ─────────────────────────────────────────────────────────
   contato-envia.php — Gérci Libero Advogados
   Envio via mail() nativo do PHP (funciona no XAMPP local)
   Para produção com Google Workspace: substituir por PHPMailer + SMTP
───────────────────────────────────────────────────────── */

// Destino
$destinatario = 'liberoadv.recepcao@hotmail.com';

// Dados do formulário
$nome     = isset($_POST['nome'])     ? htmlspecialchars(strip_tags(trim($_POST['nome'])))     : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars(strip_tags(trim($_POST['telefone']))) : '';
$email    = isset($_POST['email'])    ? htmlspecialchars(strip_tags(trim($_POST['email'])))    : '';
$area     = isset($_POST['area'])     ? htmlspecialchars(strip_tags(trim($_POST['area'])))     : '';
$mensagem = isset($_POST['mensagem']) ? htmlspecialchars(strip_tags(trim($_POST['mensagem']))) : '';

// Validação mínima
if (empty($nome) || empty($telefone)) {
  header('Location: index.php?enviado=erro');
  exit;
}

// Corpo do e-mail
$assunto = "Novo contato pelo site: $nome";
$corpo   = "
Nome:      $nome
Telefone:  $telefone
E-mail:    $email
Área:      $area

Mensagem:
$mensagem
";

// Headers
$headers  = "From: site@gerciliberoadvogados.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envia
mail($destinatario, $assunto, $corpo, $headers);

// Redireciona com sucesso
header("Location: index.php?enviado=ok&nome=" . urlencode($nome));
exit;
```

---

## ESTRUTURA DE PASTAS A CRIAR

```
D:\xamp\htdocs\gerci\
└── Site\
    ├── index.php
    ├── contato-envia.php
    ├── css\
    │   └── style.css
    ├── js\
    │   └── main.js
    └── images\
        ├── logo\        ← reservado para logo futura
        ├── equipe\      ← reservado para gerci.jpg e leonardo.jpg
        └── sobre\       ← reservado para foto do escritório
```

---

## TESTAR APÓS CRIAR OS ARQUIVOS

- [ ] http://localhost/gerci/Site/
- [ ] Navbar fica transparente no topo, azul ao scrollar
- [ ] Menu hamburger funciona em telas menores (redimensionar browser)
- [ ] Contadores animam ao entrar na tela (.kpi-section)
- [ ] FAQ abre e fecha corretamente
- [ ] Reveal animations funcionam ao scrollar
- [ ] Botão WhatsApp float aparece e pulsa
- [ ] Formulário de contato envia (no XAMPP precisa do Sendmail configurado)
- [ ] Testar responsivo mobile em 375px (DevTools → F12)

---

## RETORNO ESPERADO DO CLAUDE

```
## Arquivos criados

| Arquivo | Linhas | Status |
|---------|--------|--------|
| index.php | ~340 | ✓ Criado |
| css/style.css | ~650 | ✓ Criado |
| js/main.js | ~90 | ✓ Criado |
| contato-envia.php | ~40 | ✓ Criado |

## Pastas criadas
- css/ | js/ | images/logo/ | images/equipe/ | images/sobre/

## Pendências / Atenção
- Substituir foto placeholder quando vier o ensaio fotográfico
- Substituir logo tipográfica quando vier arquivo da logo
- Para produção: trocar mail() por PHPMailer + SMTP do Google Workspace
- Testar envio de formulário: no XAMPP, configurar D:\xamp\sendmail\sendmail.ini
```

---

## NOTAS GERAIS

```
Paleta:
--blue-dark:  #1B3A6B   (hero, footer, navbar scrolled)
--blue-mid:   #2A5FA5   (destaques, botões, ícones)
--blue-light: #4A80C4   (hover, gradientes secundários)
--gold:       #C9A84C   (detalhe no badge do hero)
--white:      #FFFFFF
--off-white:  #F4F6F9   (fundo seções alternadas)

Fontes:
--fh: Playfair Display (headings — serifa, tradição)
--fb: Inter (corpo — limpeza e legibilidade)

Sobre:
- Imagens da equipe: images/equipe/gerci.jpg e images/equipe/leonardo.jpg
- O HTML já tem o <img> comentado — descomentar quando as fotos chegarem
- font-smoothing: SEMPRE auto, nunca antialiased

Número WhatsApp: 554533265151
E-mail destino: liberoadv.recepcao@hotmail.com
URL de teste: http://localhost/gerci/Site/
```
