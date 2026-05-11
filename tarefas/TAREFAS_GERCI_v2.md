# TAREFA — Criar Site Institucional do Zero (v2 — Visual Advocacia Premium)
# Projeto: Gérci Libero da Silva e Advogados Associados
# Data: 02/05/2026
# Status: [ ] Pendente

---

## CONTEXTO

Reescrita completa. Visual inspirado em Vanzo (vanzo.adv.br) e Vialle (vialleadvogados.adv.br):
navbar branca sólida, hero com foto de ambiente + overlay escuro, seções branco/cinza alternadas,
tipografia com serifa nos títulos, paleta preto + dourado extraída da logo do escritório.
NÃO é estilo startup — é escritório jurídico tradicional de alta credibilidade.

Logo disponível: images/logo/Logo_Antiga.png (PNG com fundo transparente, ícone dourado sobre preto)

---

## ARQUIVOS ENVOLVIDOS

| Arquivo           | Caminho completo                                    | Ação  |
|-------------------|-----------------------------------------------------|-------|
| index.php         | D:\xamp\htdocs\gerci\Site\index.php                 | Criar |
| style.css         | D:\xamp\htdocs\gerci\Site\css\style.css             | Criar |
| main.js           | D:\xamp\htdocs\gerci\Site\js\main.js                | Criar |
| contato-envia.php | D:\xamp\htdocs\gerci\Site\contato-envia.php         | Criar |

Copiar o arquivo da logo para:
  images/logo/Logo_Antiga.png  ← já existe, só garantir o caminho

Criar pastas:
  images/logo/
  images/hero/       ← reservado para foto do escritório (hero-bg.jpg)
  images/equipe/     ← reservado para gerci.jpg e leonardo.jpg

---

## RESTRIÇÕES

- NÃO usar font-smoothing: antialiased — sempre `auto`
- NÃO usar frameworks CSS (Bootstrap, Tailwind) — CSS puro
- NÃO usar jQuery — JS vanilla puro
- NÃO usar gradientes coloridos, canvas animado ou efeitos de startup
- NÃO alterar: contato-envia.php depois de criado
- Hero usa foto de fundo (placeholder CSS até a foto real chegar)
- Paleta restrita: preto #1C1A17, dourado #C9A55A, branco, cinza claro

---

## ARQUIVO 1 — index.php

```php
<?php
$enviado = isset($_GET['enviado']) ? $_GET['enviado'] : '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Gérci Libero da Silva e Advogados Associados — Especialistas em Direito do Trabalho, Previdenciário, Cível, Família e Criminal em Cascavel/PR. Mais de 36 anos de experiência.">
  <title>Gérci Libero — Advogados Associados | Cascavel/PR</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ══════════════════════════════════════════════
     NAVBAR — branca, sólida, sempre visível
══════════════════════════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner container">

    <a href="#" class="nav-logo">
      <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados" class="nav-logo-img">
      <div class="nav-logo-text">
        <span class="logo-name">Gérci Libero</span>
        <span class="logo-sub">Advogados Associados</span>
      </div>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="#sobre"    class="nav-link">O Escritório</a></li>
      <li><a href="#areas"    class="nav-link">Áreas de Atuação</a></li>
      <li><a href="#equipe"   class="nav-link">Equipe</a></li>
      <li><a href="#processo" class="nav-link">Como Funciona</a></li>
      <li><a href="#faq"      class="nav-link">FAQ</a></li>
      <li><a href="#contato"  class="nav-link">Contato</a></li>
    </ul>

    <a href="https://wa.me/554533265151" target="_blank" rel="noopener" class="nav-cta">
      <i class="fa-brands fa-whatsapp"></i>
      Fale Conosco
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Abrir menu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<!-- ══════════════════════════════════════════════
     HERO — foto de fundo + overlay escuro
══════════════════════════════════════════════ -->
<section id="hero">
  <!-- Quando tiver a foto: adicionar style="background-image:url('images/hero/hero-bg.jpg')" -->
  <div class="hero-overlay"></div>
  <div class="container hero-content">

    <div class="hero-linha-ouro"></div>

    <p class="hero-eyebrow">Cascavel · Paraná · Desde 1988</p>

    <h1 class="hero-title">
      Tradição e técnica<br>
      <em>a serviço da justiça.</em>
    </h1>

    <p class="hero-text">
      Mais de 36 anos defendendo trabalhadores e seus direitos.<br>
      Especialistas em Direito do Trabalho, Previdenciário, Cível, Família e Criminal.
    </p>

    <div class="hero-actions">
      <a href="https://wa.me/554533265151" target="_blank" rel="noopener" class="btn btn-gold">
        <i class="fa-brands fa-whatsapp"></i>
        Consulta pelo WhatsApp
      </a>
      <a href="#areas" class="btn btn-outline-white">
        Nossas Especialidades
      </a>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     NÚMEROS — fundo branco, números grandes
══════════════════════════════════════════════ -->
<section class="numeros-section">
  <div class="container numeros-grid">

    <div class="numero-item reveal-up">
      <div class="numero-valor"><span class="counter" data-target="36">0</span></div>
      <div class="numero-linha"></div>
      <div class="numero-label">anos de experiência</div>
    </div>

    <div class="numero-item reveal-up" style="--delay:.1s">
      <div class="numero-valor">+<span class="counter" data-target="5000">0</span></div>
      <div class="numero-linha"></div>
      <div class="numero-label">casos atendidos</div>
    </div>

    <div class="numero-item reveal-up" style="--delay:.2s">
      <div class="numero-valor">+<span class="counter" data-target="4000">0</span></div>
      <div class="numero-linha"></div>
      <div class="numero-label">clientes satisfeitos</div>
    </div>

    <div class="numero-item reveal-up" style="--delay:.3s">
      <div class="numero-valor">2</div>
      <div class="numero-linha"></div>
      <div class="numero-label">especialistas dedicados</div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     SOBRE — fundo cinza claro
══════════════════════════════════════════════ -->
<section id="sobre">
  <div class="container sobre-grid">

    <div class="sobre-img-col reveal-left">
      <!-- Substituir pela foto real quando disponível -->
      <!-- <img src="images/sobre/escritorio.jpg" alt="Escritório Gérci Libero"> -->
      <div class="sobre-img-placeholder">
        <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados" class="sobre-logo-placeholder">
      </div>
      <div class="sobre-badge">
        <strong>36</strong>
        <span>anos em<br>Cascavel/PR</span>
      </div>
    </div>

    <div class="sobre-text-col reveal-right">
      <span class="section-eyebrow">O Escritório</span>
      <h2 class="section-title">
        Fundado na convicção de que<br>todo trabalhador merece<br><em>defesa técnica de qualidade.</em>
      </h2>
      <p class="sobre-body">
        Desde 1988, o escritório Gérci Libero da Silva atua na defesa dos direitos de trabalhadores e cidadãos em Cascavel e em todo o território nacional. Uma trajetória construída caso a caso, com rigor técnico e compromisso humano.
      </p>
      <p class="sobre-body">
        Com a chegada do Dr. Leonardo Libero, especializando o escritório também no Direito Previdenciário, ampliamos nossa capacidade de atender as demandas mais complexas — do reconhecimento de vínculo empregatício ao planejamento da aposentadoria ideal.
      </p>

      <div class="sobre-diferenciais">
        <div class="diferencial-item">
          <i class="fa-solid fa-check"></i>
          Atendimento presencial e virtual em todo o Brasil
        </div>
        <div class="diferencial-item">
          <i class="fa-solid fa-check"></i>
          Diagnóstico inicial sem custo
        </div>
        <div class="diferencial-item">
          <i class="fa-solid fa-check"></i>
          Acompanhamento transparente em cada fase do processo
        </div>
        <div class="diferencial-item">
          <i class="fa-solid fa-check"></i>
          Especialização comprovada nas áreas de atuação
        </div>
      </div>

      <a href="#contato" class="btn btn-dark">Agendar Consulta</a>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     ÁREAS DE ATUAÇÃO — fundo branco
══════════════════════════════════════════════ -->
<section id="areas">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Especialidades</span>
      <h2 class="section-title">Áreas de Atuação</h2>
      <p class="section-sub">Cada demanda analisada por especialistas com profundo domínio técnico na matéria.</p>
    </div>

    <div class="areas-grid">

      <div class="area-card reveal-up" style="--delay:.05s">
        <div class="area-numero">01</div>
        <div class="area-icon"><i class="fa-solid fa-briefcase"></i></div>
        <h3>Direito do Trabalho</h3>
        <p>Verbas rescisórias, FGTS, assédio moral e sexual, reconhecimento de vínculo empregatício, horas extras e demissões irregulares.</p>
        <span class="area-tag">Especialidade Principal</span>
      </div>

      <div class="area-card reveal-up" style="--delay:.1s">
        <div class="area-numero">02</div>
        <div class="area-icon"><i class="fa-solid fa-shield-halved"></i></div>
        <h3>Direito Previdenciário</h3>
        <p>Aposentadoria por idade, tempo de contribuição e especial. Revisões de benefícios, auxílios por incapacidade e recursos contra negativas do INSS.</p>
        <span class="area-tag">Especialidade Principal</span>
      </div>

      <div class="area-card reveal-up" style="--delay:.15s">
        <div class="area-numero">03</div>
        <div class="area-icon"><i class="fa-solid fa-scale-balanced"></i></div>
        <h3>Direito Civil</h3>
        <p>Contratos, responsabilidade civil, indenizações e assessoria em demandas de ordem privada entre pessoas físicas e jurídicas.</p>
      </div>

      <div class="area-card reveal-up" style="--delay:.2s">
        <div class="area-numero">04</div>
        <div class="area-icon"><i class="fa-solid fa-house-chimney"></i></div>
        <h3>Direito de Família</h3>
        <p>Divórcio, guarda de filhos, pensão alimentícia, inventário, testamento e questões patrimoniais entre familiares.</p>
      </div>

      <div class="area-card reveal-up" style="--delay:.25s">
        <div class="area-numero">05</div>
        <div class="area-icon"><i class="fa-solid fa-gavel"></i></div>
        <h3>Direito Criminal</h3>
        <p>Defesa em processos criminais, habeas corpus, recursos e acompanhamento em todas as fases da persecução penal.</p>
      </div>

      <div class="area-card reveal-up" style="--delay:.3s">
        <div class="area-numero">06</div>
        <div class="area-icon"><i class="fa-solid fa-calculator"></i></div>
        <h3>Planejamento Previdenciário</h3>
        <p>Estudo técnico e matemático individualizado para identificar o momento e a modalidade de aposentadoria com maior benefício possível.</p>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     EQUIPE — fundo cinza claro
══════════════════════════════════════════════ -->
<section id="equipe">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Quem Somos</span>
      <h2 class="section-title">Nossa Equipe</h2>
      <p class="section-sub">A experiência de décadas aliada à especialização técnica constante.</p>
    </div>

    <div class="equipe-grid">

      <div class="membro-card reveal-up">
        <div class="membro-foto">
          <!-- Descomentar quando tiver foto: -->
          <!-- <img src="images/equipe/gerci.jpg" alt="Dr. Gérci Libero da Silva"> -->
          <div class="membro-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <div class="membro-linha-ouro"></div>
          <h3>Dr. Gérci Libero da Silva</h3>
          <span class="membro-cargo">Fundador · OAB/PR</span>
          <span class="membro-area">Direito do Trabalho</span>
          <p>Mais de 36 anos de experiência na defesa dos direitos dos trabalhadores em Cascavel e região, com atuação em casos de alta complexidade.</p>
        </div>
      </div>

      <div class="membro-card reveal-up" style="--delay:.12s">
        <div class="membro-foto">
          <!-- <img src="images/equipe/leonardo.jpg" alt="Dr. Leonardo Libero da Silva"> -->
          <div class="membro-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <div class="membro-linha-ouro"></div>
          <h3>Dr. Leonardo Libero da Silva</h3>
          <span class="membro-cargo">Sócio · OAB/PR</span>
          <span class="membro-area">Direito Previdenciário</span>
          <p>Especialista em Direito Previdenciário com mais de 10 anos de experiência em planejamento estratégico, revisões de benefícios e recursos ao INSS.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     COMO FUNCIONA — fundo escuro (preto)
══════════════════════════════════════════════ -->
<section id="processo">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow section-eyebrow--gold">Transparência</span>
      <h2 class="section-title section-title--light">Como Funciona</h2>
      <p class="section-sub section-sub--light">Acompanhe cada etapa da defesa dos seus interesses.</p>
    </div>

    <div class="processo-grid">

      <div class="processo-step reveal-up" style="--delay:.05s">
        <div class="step-num">01</div>
        <h3>Primeiro Contato</h3>
        <p>Atendimento personalizado — presencial em nossa sede ou por videoconferência — para diagnóstico inicial do caso.</p>
      </div>

      <div class="processo-step reveal-up" style="--delay:.1s">
        <div class="step-num">02</div>
        <h3>Análise e Estratégia</h3>
        <p>Análise documental completa e definição da melhor estratégia: pedido administrativo ou judicial, conforme o caso.</p>
      </div>

      <div class="processo-step reveal-up" style="--delay:.15s">
        <div class="step-num">03</div>
        <h3>Fase Instrutória</h3>
        <p>Produção de provas, intimação da parte contrária e reforço de todos os argumentos jurídicos perante o magistrado.</p>
      </div>

      <div class="processo-step reveal-up" style="--delay:.2s">
        <div class="step-num">04</div>
        <h3>Decisão e Execução</h3>
        <p>Acompanhamento integral até a decisão final e garantia do cumprimento da sentença — seu direito efetivado.</p>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     FAQ — fundo branco
══════════════════════════════════════════════ -->
<section id="faq">
  <div class="container faq-container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Dúvidas</span>
      <h2 class="section-title">Perguntas Frequentes</h2>
    </div>

    <div class="faq-list reveal-up" style="--delay:.1s">

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          O escritório atende em todo o Brasil?
          <span class="faq-icone"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>Sim. Através da digitalização dos processos judiciais e videoconferências, representamos clientes em qualquer estado com total segurança jurídica.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Como a Reforma da Previdência afeta meu pedido?
          <span class="faq-icone"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>A reforma criou regras de transição complexas. Analisamos seu histórico individualmente para identificar em qual regra você se enquadra com maior vantagem financeira.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Tive meu benefício negado pelo INSS. O que fazer?
          <span class="faq-icone"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>A negativa pode ser revertida por recurso administrativo ou ação judicial, onde as provas são analisadas de forma mais abrangente por um juiz. Entre em contato para avaliarmos seu caso.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          O que é a Revisão da Vida Toda?
          <span class="faq-icone"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>É uma tese que permite incluir salários de contribuição anteriores a 1994 no cálculo da aposentadoria, podendo aumentar significativamente o benefício para quem ganhava bem nessa época.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Fui demitido sem justa causa. Quais são meus direitos?
          <span class="faq-icone"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>Você tem direito a: aviso prévio, saldo de salário, 13º proporcional, férias proporcionais + 1/3, multa de 40% sobre o FGTS e seguro-desemprego. Verificamos se todos foram pagos corretamente.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     CONTATO — fundo cinza escuro
══════════════════════════════════════════════ -->
<section id="contato">
  <div class="container contato-grid">

    <div class="contato-info reveal-left">
      <span class="section-eyebrow section-eyebrow--gold">Fale Conosco</span>
      <h2 class="section-title section-title--light">
        Agende sua<br>consulta hoje.
      </h2>
      <p class="contato-aviso">
        <i class="fa-solid fa-triangle-exclamation"></i>
        Prazos jurídicos são fatais. Não espere para buscar orientação.
      </p>

      <div class="contato-dados">
        <a href="https://wa.me/554533265151" target="_blank" rel="noopener" class="dado-item dado-item--link">
          <div class="dado-icone"><i class="fa-brands fa-whatsapp"></i></div>
          <div>
            <strong>(45) 3326-5151</strong>
            <span>WhatsApp · atendimento imediato</span>
          </div>
        </a>
        <div class="dado-item">
          <div class="dado-icone"><i class="fa-solid fa-envelope"></i></div>
          <div>
            <strong>liberoadv.recepcao@hotmail.com</strong>
            <span>Resposta em até 1 dia útil</span>
          </div>
        </div>
        <div class="dado-item">
          <div class="dado-icone"><i class="fa-solid fa-location-dot"></i></div>
          <div>
            <strong>Cascavel / PR</strong>
            <span>Atendimento presencial e virtual</span>
          </div>
        </div>
        <div class="dado-item">
          <div class="dado-icone"><i class="fa-solid fa-clock"></i></div>
          <div>
            <strong>Segunda a Sexta</strong>
            <span>08:00 às 18:00</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contato-form-wrap reveal-right">
      <?php if ($enviado === 'ok'): ?>
        <div class="form-sucesso">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem recebida!</h3>
          <p>Retornaremos em breve. Para atendimento imediato, use o WhatsApp.</p>
          <a href="https://wa.me/554533265151" class="btn btn-gold" target="_blank" rel="noopener">
            <i class="fa-brands fa-whatsapp"></i> Abrir WhatsApp
          </a>
        </div>
      <?php else: ?>
        <form class="contato-form" action="contato-envia.php" method="POST">
          <h3 class="form-titulo">Envie sua mensagem</h3>

          <div class="form-grupo">
            <label for="nome">Nome completo *</label>
            <input type="text" id="nome" name="nome" placeholder="Seu nome" required>
          </div>

          <div class="form-linha">
            <div class="form-grupo">
              <label for="telefone">Telefone / WhatsApp *</label>
              <input type="tel" id="telefone" name="telefone" placeholder="(45) 99999-9999" required>
            </div>
            <div class="form-grupo">
              <label for="email">E-mail</label>
              <input type="email" id="email" name="email" placeholder="seu@email.com">
            </div>
          </div>

          <div class="form-grupo">
            <label for="area">Área de interesse</label>
            <select id="area" name="area">
              <option value="">Selecione a especialidade...</option>
              <option>Direito do Trabalho</option>
              <option>Direito Previdenciário</option>
              <option>Planejamento Previdenciário</option>
              <option>Direito Civil</option>
              <option>Direito de Família</option>
              <option>Direito Criminal</option>
              <option>Outro</option>
            </select>
          </div>

          <div class="form-grupo">
            <label for="mensagem">Descreva brevemente seu caso</label>
            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Conte um pouco sobre sua situação..."></textarea>
          </div>

          <button type="submit" class="btn btn-gold btn-full">
            Enviar Mensagem
            <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════ -->
<footer id="footer">
  <div class="container footer-inner">

    <div class="footer-brand">
      <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados" class="footer-logo">
      <span class="footer-nome">Gérci Libero da Silva</span>
      <span class="footer-sub">e Advogados Associados</span>
      <p>Tradição, técnica e comprometimento na defesa dos seus direitos desde 1988.</p>
      <p class="footer-oab">OAB/PR — Advocacia ética e responsável.</p>
    </div>

    <div class="footer-col">
      <h4>Navegação</h4>
      <ul>
        <li><a href="#sobre">O Escritório</a></li>
        <li><a href="#areas">Áreas de Atuação</a></li>
        <li><a href="#equipe">Equipe</a></li>
        <li><a href="#processo">Como Funciona</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contato">Contato</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Especialidades</h4>
      <ul>
        <li><a href="#areas">Direito do Trabalho</a></li>
        <li><a href="#areas">Direito Previdenciário</a></li>
        <li><a href="#areas">Direito Civil</a></li>
        <li><a href="#areas">Direito de Família</a></li>
        <li><a href="#areas">Direito Criminal</a></li>
        <li><a href="#areas">Planejamento Previdenciário</a></li>
      </ul>
    </div>

    <div class="footer-col">
      <h4>Contato</h4>
      <p><i class="fa-brands fa-whatsapp"></i> (45) 3326-5151</p>
      <p><i class="fa-solid fa-envelope"></i> liberoadv.recepcao@hotmail.com</p>
      <p><i class="fa-solid fa-location-dot"></i> Cascavel / PR</p>
      <p><i class="fa-solid fa-clock"></i> Seg–Sex · 08h–18h</p>
    </div>

  </div>

  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> Gérci Libero da Silva e Advogados Associados.</p>
      <p>Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

<!-- WhatsApp flutuante -->
<a href="https://wa.me/554533265151" class="wa-float" target="_blank" rel="noopener" aria-label="WhatsApp">
  <i class="fa-brands fa-whatsapp"></i>
  <span class="wa-tip">Fale com um especialista</span>
</a>

<script src="js/main.js"></script>
</body>
</html>
```

---

## ARQUIVO 2 — css/style.css

```css
/* ════════════════════════════════════════════
   RESET & VARIÁVEIS
════════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --preto:       #1C1A17;
  --preto-soft:  #2A2723;
  --ouro:        #C9A55A;
  --ouro-escuro: #A8863E;
  --branco:      #FFFFFF;
  --cinza-bg:    #F5F4F2;
  --cinza-borda: #E2DDD8;
  --cinza-texto: #5A5650;
  --cinza-light: #9A948E;

  --fh: 'Cormorant Garamond', Georgia, serif;
  --fb: 'Raleway', system-ui, sans-serif;

  --container: 1180px;
  --radius:    10px;
  --sombra-sm: 0 2px 10px rgba(28,26,23,0.07);
  --sombra-md: 0 6px 28px rgba(28,26,23,0.10);
  --sombra-lg: 0 16px 56px rgba(28,26,23,0.14);
}

html  { scroll-behavior: smooth; }
body  {
  font-family: var(--fb);
  font-size: 16px;
  color: var(--cinza-texto);
  background: var(--branco);
  -webkit-font-smoothing: auto;
  overflow-x: hidden;
}

a, a:hover, a:visited, a:active { text-decoration: none; color: inherit; }
img  { max-width: 100%; display: block; }
ul   { list-style: none; }

.container {
  width: 100%;
  max-width: var(--container);
  margin: 0 auto;
  padding: 0 28px;
}

/* ════════════════════════════════════════════
   TIPOGRAFIA GLOBAL
════════════════════════════════════════════ */
.section-eyebrow {
  display: inline-block;
  font-family: var(--fb);
  font-size: 10.5px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ouro);
  margin-bottom: 12px;
}
.section-eyebrow--gold { color: var(--ouro); }

.section-title {
  font-family: var(--fh);
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 600;
  color: var(--preto);
  line-height: 1.2;
  margin-bottom: 16px;
}
.section-title em    { font-style: italic; color: var(--ouro-escuro); }
.section-title--light { color: #ffffff; }
.section-title--light em { color: rgba(201,165,90,0.85); }

.section-sub {
  font-size: 1rem;
  color: var(--cinza-light);
  line-height: 1.75;
  max-width: 520px;
}
.section-sub--light { color: rgba(255,255,255,0.5); }

.section-header         { text-align: center; margin-bottom: 56px; }
.section-header .section-sub { margin: 0 auto; }

/* ════════════════════════════════════════════
   BOTÕES
════════════════════════════════════════════ */
.btn {
  display: inline-flex;
  align-items: center;
  gap: 9px;
  font-family: var(--fb);
  font-size: 13.5px;
  font-weight: 600;
  letter-spacing: 0.04em;
  padding: 14px 30px;
  border-radius: 4px;
  border: 2px solid transparent;
  cursor: pointer;
  transition: all 0.25s ease;
  white-space: nowrap;
}

.btn-gold {
  background: var(--ouro);
  color: var(--preto);
  border-color: var(--ouro);
}
.btn-gold:hover {
  background: var(--ouro-escuro);
  border-color: var(--ouro-escuro);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(201,165,90,0.35);
}

.btn-outline-white {
  background: transparent;
  color: rgba(255,255,255,0.85);
  border-color: rgba(255,255,255,0.35);
}
.btn-outline-white:hover {
  background: rgba(255,255,255,0.08);
  border-color: rgba(255,255,255,0.7);
  color: #ffffff;
}

.btn-dark {
  background: var(--preto);
  color: #ffffff;
  border-color: var(--preto);
}
.btn-dark:hover {
  background: var(--preto-soft);
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(28,26,23,0.3);
}

.btn-full { width: 100%; justify-content: center; }

/* ════════════════════════════════════════════
   NAVBAR — branca sólida, sempre presente
════════════════════════════════════════════ */
#navbar {
  position: fixed;
  top: 0; left: 0; right: 0;
  z-index: 1000;
  background: #ffffff;
  border-bottom: 1px solid var(--cinza-borda);
  box-shadow: var(--sombra-sm);
}

.nav-inner {
  display: flex;
  align-items: center;
  height: 76px;
  gap: 20px;
}

/* Logo */
.nav-logo {
  display: flex;
  align-items: center;
  gap: 12px;
  flex-shrink: 0;
}

.nav-logo-img {
  height: 44px;
  width: auto;
}

.nav-logo-text {
  display: flex;
  flex-direction: column;
  line-height: 1.15;
  border-left: 1px solid var(--cinza-borda);
  padding-left: 12px;
}

.logo-name {
  font-family: var(--fh);
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--preto);
  letter-spacing: -0.01em;
}

.logo-sub {
  font-family: var(--fb);
  font-size: 9.5px;
  font-weight: 500;
  color: var(--cinza-light);
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

/* Links */
.nav-links {
  display: flex;
  align-items: center;
  gap: 2px;
  margin-left: auto;
}

.nav-link {
  font-family: var(--fb);
  font-size: 13px;
  font-weight: 500;
  color: var(--cinza-texto);
  padding: 7px 13px;
  border-radius: 4px;
  transition: color 0.2s, background 0.2s;
  letter-spacing: 0.02em;
}

.nav-link:hover {
  color: var(--preto);
  background: var(--cinza-bg);
}

/* CTA WhatsApp */
.nav-cta {
  flex-shrink: 0;
  background: var(--ouro);
  color: var(--preto) !important;
  font-family: var(--fb);
  font-size: 13px;
  font-weight: 700;
  padding: 10px 20px;
  border-radius: 4px;
  display: flex;
  align-items: center;
  gap: 7px;
  transition: all 0.25s;
  letter-spacing: 0.02em;
}

.nav-cta:hover {
  background: var(--ouro-escuro);
  transform: translateY(-1px);
}

/* Toggle mobile */
.nav-toggle {
  display: none;
  flex-direction: column;
  gap: 5px;
  background: none;
  border: none;
  cursor: pointer;
  padding: 8px;
  margin-left: auto;
}

.nav-toggle span {
  display: block;
  width: 24px;
  height: 2px;
  background: var(--preto);
  border-radius: 2px;
  transition: all 0.3s;
}

/* ════════════════════════════════════════════
   HERO
════════════════════════════════════════════ */
#hero {
  position: relative;
  min-height: 100vh;
  display: flex;
  align-items: center;
  padding-top: 76px;

  /* Placeholder visual até a foto chegar */
  background: var(--preto);

  /* Quando tiver foto, usar:
  background-image: url('../images/hero/hero-bg.jpg');
  background-size: cover;
  background-position: center;
  */
}

/* Linhas diagonais sutis no placeholder */
#hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    -45deg,
    transparent,
    transparent 40px,
    rgba(201,165,90,0.03) 40px,
    rgba(201,165,90,0.03) 41px
  );
  pointer-events: none;
}

.hero-overlay {
  position: absolute;
  inset: 0;
  /* Com foto real, usar: background: linear-gradient(to right, rgba(28,26,23,0.85) 50%, rgba(28,26,23,0.4)); */
  background: rgba(28,26,23,0.92);
}

.hero-content {
  position: relative;
  z-index: 1;
  padding: 80px 28px;
  max-width: 720px;
}

.hero-linha-ouro {
  width: 48px;
  height: 3px;
  background: var(--ouro);
  margin-bottom: 28px;
}

.hero-eyebrow {
  font-family: var(--fb);
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: var(--ouro);
  margin-bottom: 20px;
}

.hero-title {
  font-family: var(--fh);
  font-size: clamp(2.6rem, 6vw, 4.4rem);
  font-weight: 600;
  color: #ffffff;
  line-height: 1.15;
  margin-bottom: 24px;
}

.hero-title em {
  font-style: italic;
  color: rgba(255,255,255,0.65);
}

.hero-text {
  font-size: 1rem;
  color: rgba(255,255,255,0.6);
  line-height: 1.8;
  margin-bottom: 40px;
}

.hero-actions {
  display: flex;
  gap: 16px;
  flex-wrap: wrap;
}

/* ════════════════════════════════════════════
   NÚMEROS
════════════════════════════════════════════ */
.numeros-section {
  background: var(--branco);
  border-bottom: 1px solid var(--cinza-borda);
  padding: 64px 0;
}

.numeros-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 0;
}

.numero-item {
  padding: 0 40px;
  border-right: 1px solid var(--cinza-borda);
  text-align: center;
}

.numero-item:last-child { border-right: none; }
.numero-item:first-child { padding-left: 0; text-align: left; }
.numero-item:last-child  { padding-right: 0; text-align: right; }

.numero-valor {
  font-family: var(--fh);
  font-size: clamp(2.4rem, 5vw, 3.6rem);
  font-weight: 700;
  color: var(--preto);
  line-height: 1;
  margin-bottom: 12px;
  -webkit-font-smoothing: auto;
}

.numero-linha {
  width: 32px;
  height: 2px;
  background: var(--ouro);
  margin: 0 auto 12px;
}

.numero-item:first-child .numero-linha { margin-left: 0; }
.numero-item:last-child  .numero-linha { margin-left: auto; margin-right: 0; }

.numero-label {
  font-size: 13px;
  font-weight: 500;
  color: var(--cinza-light);
  letter-spacing: 0.04em;
}

/* ════════════════════════════════════════════
   SOBRE
════════════════════════════════════════════ */
#sobre {
  padding: 100px 0;
  background: var(--cinza-bg);
}

.sobre-grid {
  display: grid;
  grid-template-columns: 1fr 1.15fr;
  gap: 80px;
  align-items: center;
}

.sobre-img-col { position: relative; }

.sobre-img-placeholder {
  width: 100%;
  aspect-ratio: 4/5;
  background: var(--preto);
  border-radius: var(--radius);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.sobre-logo-placeholder {
  width: 50%;
  opacity: 0.7;
}

.sobre-badge {
  position: absolute;
  bottom: -16px;
  right: -16px;
  background: var(--ouro);
  border-radius: var(--radius);
  padding: 18px 22px;
  text-align: center;
  box-shadow: var(--sombra-lg);
  z-index: 2;
}

.sobre-badge strong {
  display: block;
  font-family: var(--fh);
  font-size: 2.4rem;
  font-weight: 700;
  color: var(--preto);
  line-height: 1;
}

.sobre-badge span {
  display: block;
  font-size: 11px;
  font-weight: 600;
  color: var(--preto);
  opacity: 0.7;
  margin-top: 4px;
  line-height: 1.4;
}

.sobre-body {
  font-size: 15px;
  color: var(--cinza-texto);
  line-height: 1.85;
  margin-bottom: 14px;
}

.sobre-diferenciais {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin: 28px 0 32px;
}

.diferencial-item {
  display: flex;
  align-items: center;
  gap: 12px;
  font-size: 14px;
  color: var(--cinza-texto);
}

.diferencial-item i {
  color: var(--ouro);
  font-size: 13px;
  flex-shrink: 0;
}

/* ════════════════════════════════════════════
   ÁREAS DE ATUAÇÃO
════════════════════════════════════════════ */
#areas {
  padding: 100px 0;
  background: var(--branco);
}

.areas-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 1px;
  background: var(--cinza-borda);
  border: 1px solid var(--cinza-borda);
  border-radius: var(--radius);
  overflow: hidden;
}

.area-card {
  background: var(--branco);
  padding: 40px 36px;
  position: relative;
  transition: background 0.25s;
}

.area-card:hover { background: var(--cinza-bg); }

.area-numero {
  font-family: var(--fh);
  font-size: 2.2rem;
  font-weight: 700;
  color: var(--cinza-borda);
  line-height: 1;
  margin-bottom: 16px;
  transition: color 0.25s;
}

.area-card:hover .area-numero { color: var(--ouro); opacity: 0.5; }

.area-icon {
  font-size: 22px;
  color: var(--ouro);
  margin-bottom: 16px;
}

.area-card h3 {
  font-family: var(--fh);
  font-size: 1.2rem;
  font-weight: 600;
  color: var(--preto);
  margin-bottom: 10px;
  line-height: 1.3;
}

.area-card p {
  font-size: 14px;
  color: var(--cinza-texto);
  line-height: 1.75;
  margin-bottom: 16px;
}

.area-tag {
  display: inline-block;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--ouro-escuro);
  background: rgba(201,165,90,0.1);
  padding: 3px 8px;
  border-radius: 3px;
}

/* ════════════════════════════════════════════
   EQUIPE
════════════════════════════════════════════ */
#equipe {
  padding: 100px 0;
  background: var(--cinza-bg);
}

.equipe-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 28px;
  max-width: 860px;
  margin: 0 auto;
}

.membro-card {
  background: var(--branco);
  border-radius: var(--radius);
  overflow: hidden;
  border: 1px solid var(--cinza-borda);
  box-shadow: var(--sombra-sm);
  transition: box-shadow 0.3s;
}

.membro-card:hover { box-shadow: var(--sombra-md); }

.membro-foto {
  width: 100%;
  aspect-ratio: 4/3;
  background: var(--preto);
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.membro-foto img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top;
}

.membro-placeholder {
  font-size: 60px;
  color: rgba(201,165,90,0.2);
}

.membro-info { padding: 28px 32px; }

.membro-linha-ouro {
  width: 36px;
  height: 2px;
  background: var(--ouro);
  margin-bottom: 14px;
}

.membro-info h3 {
  font-family: var(--fh);
  font-size: 1.25rem;
  font-weight: 600;
  color: var(--preto);
  margin-bottom: 4px;
}

.membro-cargo {
  display: block;
  font-size: 11px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: var(--cinza-light);
  margin-bottom: 6px;
}

.membro-area {
  display: block;
  font-size: 13px;
  font-weight: 500;
  color: var(--ouro-escuro);
  margin-bottom: 12px;
}

.membro-info p {
  font-size: 14px;
  color: var(--cinza-texto);
  line-height: 1.75;
}

/* ════════════════════════════════════════════
   COMO FUNCIONA — fundo preto
════════════════════════════════════════════ */
#processo {
  padding: 100px 0;
  background: var(--preto);
  position: relative;
  overflow: hidden;
}

/* Padrão sutil no fundo */
#processo::before {
  content: '';
  position: absolute;
  inset: 0;
  background-image: repeating-linear-gradient(
    90deg, transparent, transparent 80px,
    rgba(201,165,90,0.03) 80px, rgba(201,165,90,0.03) 81px
  );
  pointer-events: none;
}

.processo-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  position: relative;
  z-index: 1;
}

/* Linha conectora entre steps */
.processo-grid::after {
  content: '';
  position: absolute;
  top: 20px;
  left: calc(12.5% + 16px);
  right: calc(12.5% + 16px);
  height: 1px;
  background: rgba(201,165,90,0.2);
}

.processo-step { text-align: center; }

.step-num {
  font-family: var(--fh);
  font-size: 2rem;
  font-weight: 700;
  color: var(--ouro);
  opacity: 0.35;
  line-height: 1;
  margin-bottom: 20px;
  position: relative;
  display: inline-block;
}

.step-num::after {
  content: '';
  display: block;
  width: 1px;
  height: 20px;
  background: rgba(201,165,90,0.3);
  margin: 12px auto 0;
}

.processo-step h3 {
  font-family: var(--fh);
  font-size: 1.1rem;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 10px;
}

.processo-step p {
  font-size: 13.5px;
  color: rgba(255,255,255,0.45);
  line-height: 1.75;
}

/* ════════════════════════════════════════════
   FAQ
════════════════════════════════════════════ */
#faq {
  padding: 100px 0;
  background: var(--branco);
}

.faq-container .section-header { margin-bottom: 48px; }

.faq-list {
  max-width: 740px;
  margin: 0 auto;
}

.faq-item { border-bottom: 1px solid var(--cinza-borda); }
.faq-item:first-child { border-top: 1px solid var(--cinza-borda); }

.faq-btn {
  width: 100%;
  background: none;
  border: none;
  cursor: pointer;
  padding: 22px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  font-family: var(--fb);
  font-size: 15px;
  font-weight: 600;
  color: var(--preto);
  text-align: left;
  transition: color 0.2s;
}

.faq-btn:hover { color: var(--ouro-escuro); }

.faq-icone {
  width: 26px;
  height: 26px;
  min-width: 26px;
  border: 1.5px solid var(--cinza-borda);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 11px;
  color: var(--ouro);
  transition: all 0.3s;
}

.faq-btn[aria-expanded="true"] .faq-icone {
  background: var(--ouro);
  border-color: var(--ouro);
  color: var(--preto);
  transform: rotate(45deg);
}

.faq-resposta {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease, padding 0.3s;
}

.faq-resposta.aberta { max-height: 300px; padding-bottom: 20px; }

.faq-resposta p {
  font-size: 14.5px;
  color: var(--cinza-texto);
  line-height: 1.85;
}

/* ════════════════════════════════════════════
   CONTATO — fundo preto-soft
════════════════════════════════════════════ */
#contato {
  padding: 100px 0;
  background: var(--preto-soft);
}

.contato-grid {
  display: grid;
  grid-template-columns: 1fr 1.1fr;
  gap: 80px;
  align-items: start;
}

.contato-aviso {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 13.5px;
  color: rgba(201,165,90,0.8);
  margin-bottom: 36px;
}

.contato-dados {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.dado-item {
  display: flex;
  align-items: flex-start;
  gap: 14px;
}

.dado-item--link {
  transition: opacity 0.2s;
  cursor: pointer;
}
.dado-item--link:hover { opacity: 0.8; }

.dado-icone {
  width: 38px;
  height: 38px;
  min-width: 38px;
  border-radius: 8px;
  background: rgba(201,165,90,0.12);
  border: 1px solid rgba(201,165,90,0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--ouro);
  font-size: 15px;
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
  color: rgba(255,255,255,0.4);
}

/* Formulário */
.contato-form-wrap {
  background: var(--branco);
  border-radius: var(--radius);
  padding: 40px;
  box-shadow: var(--sombra-lg);
}

.form-titulo {
  font-family: var(--fh);
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--preto);
  margin-bottom: 28px;
  padding-bottom: 16px;
  border-bottom: 1px solid var(--cinza-borda);
}

.contato-form { display: flex; flex-direction: column; gap: 18px; }

.form-grupo { display: flex; flex-direction: column; gap: 6px; }

.form-linha {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 14px;
}

label {
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.06em;
  text-transform: uppercase;
  color: var(--cinza-texto);
}

input, select, textarea {
  font-family: var(--fb);
  font-size: 14.5px;
  color: var(--preto);
  background: var(--cinza-bg);
  border: 1.5px solid var(--cinza-borda);
  border-radius: 5px;
  padding: 12px 14px;
  outline: none;
  width: 100%;
  transition: border-color 0.2s, box-shadow 0.2s;
  -webkit-font-smoothing: auto;
}

input:focus, select:focus, textarea:focus {
  border-color: var(--ouro);
  box-shadow: 0 0 0 3px rgba(201,165,90,0.12);
}

textarea { resize: vertical; }

/* Sucesso */
.form-sucesso { text-align: center; padding: 32px 16px; }
.form-sucesso i { font-size: 2.8rem; color: #22C55E; display: block; margin-bottom: 14px; }
.form-sucesso h3 {
  font-family: var(--fh);
  font-size: 1.5rem;
  color: var(--preto);
  margin-bottom: 10px;
}
.form-sucesso p { color: var(--cinza-texto); margin-bottom: 24px; font-size: 15px; }

/* ════════════════════════════════════════════
   FOOTER
════════════════════════════════════════════ */
#footer { background: var(--preto); color: rgba(255,255,255,0.55); }

.footer-inner {
  display: grid;
  grid-template-columns: 1.8fr 1fr 1fr 1.2fr;
  gap: 48px;
  padding: 64px 28px;
  border-bottom: 1px solid rgba(255,255,255,0.07);
}

.footer-logo { height: 52px; width: auto; margin-bottom: 14px; }

.footer-nome {
  display: block;
  font-family: var(--fh);
  font-size: 1.05rem;
  font-weight: 600;
  color: #ffffff;
}

.footer-sub {
  display: block;
  font-size: 11px;
  font-weight: 500;
  color: rgba(255,255,255,0.4);
  letter-spacing: 0.06em;
  margin-bottom: 16px;
}

.footer-brand p {
  font-size: 13.5px;
  color: rgba(255,255,255,0.45);
  line-height: 1.7;
  margin-bottom: 6px;
}

.footer-oab {
  font-size: 11px !important;
  color: rgba(255,255,255,0.25) !important;
  font-style: italic;
}

.footer-col h4 {
  font-family: var(--fb);
  font-size: 10px;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: rgba(255,255,255,0.3);
  margin-bottom: 16px;
}

.footer-col ul { display: flex; flex-direction: column; gap: 8px; }

.footer-col a {
  font-size: 13.5px;
  color: rgba(255,255,255,0.55);
  transition: color 0.2s;
}
.footer-col a:hover { color: var(--ouro); }

.footer-col p {
  font-size: 13px;
  color: rgba(255,255,255,0.55);
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.footer-col p i { color: var(--ouro); opacity: 0.7; }

.footer-bottom-inner {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 6px;
  padding: 20px 28px;
}

.footer-bottom p { font-size: 12px; color: rgba(255,255,255,0.25); }

/* ════════════════════════════════════════════
   WHATSAPP FLOAT
════════════════════════════════════════════ */
.wa-float {
  position: fixed;
  bottom: 28px;
  right: 24px;
  z-index: 900;
  width: 54px;
  height: 54px;
  border-radius: 50%;
  background: #25D366;
  color: #ffffff;
  font-size: 24px;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 18px rgba(37,211,102,0.4);
  transition: transform 0.25s, box-shadow 0.25s;
  animation: pulsoWA 2.5s ease-in-out infinite;
}

.wa-float:hover {
  transform: scale(1.1);
  animation: none;
  box-shadow: 0 6px 26px rgba(37,211,102,0.55);
}

@keyframes pulsoWA {
  0%, 100% { box-shadow: 0 4px 18px rgba(37,211,102,0.4); }
  50%       { box-shadow: 0 4px 30px rgba(37,211,102,0.65); }
}

.wa-tip {
  position: absolute;
  right: 64px;
  white-space: nowrap;
  background: var(--preto);
  color: #ffffff;
  font-size: 12px;
  font-weight: 600;
  padding: 6px 12px;
  border-radius: 4px;
  opacity: 0;
  pointer-events: none;
  transition: opacity 0.2s;
}

.wa-float:hover .wa-tip { opacity: 1; }

/* ════════════════════════════════════════════
   REVEAL ANIMATIONS
════════════════════════════════════════════ */
.reveal-up, .reveal-left, .reveal-right {
  opacity: 0;
  transition: opacity 0.6s ease, transform 0.6s ease;
  transition-delay: var(--delay, 0s);
}

.reveal-up    { transform: translateY(24px); }
.reveal-left  { transform: translateX(-24px); }
.reveal-right { transform: translateX(24px); }

.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible { opacity: 1; transform: none; }

/* ════════════════════════════════════════════
   RESPONSIVO
════════════════════════════════════════════ */
@media (max-width: 1024px) {
  .numeros-grid   { grid-template-columns: repeat(2, 1fr); gap: 32px; }
  .numero-item    { border-right: none; border-bottom: 1px solid var(--cinza-borda); padding: 0 0 32px; text-align: center; }
  .numero-item:last-child { border-bottom: none; }
  .numero-item:first-child,
  .numero-item:last-child  { text-align: center; }
  .numero-item .numero-linha { margin: 0 auto 12px; }
  .sobre-grid     { grid-template-columns: 1fr; gap: 56px; }
  .sobre-img-col  { max-width: 420px; margin: 0 auto; }
  .areas-grid     { grid-template-columns: repeat(2, 1fr); }
  .processo-grid  { grid-template-columns: repeat(2, 1fr); gap: 48px; }
  .processo-grid::after { display: none; }
  .contato-grid   { grid-template-columns: 1fr; gap: 48px; }
  .footer-inner   { grid-template-columns: 1fr 1fr; gap: 36px; }
}

@media (max-width: 768px) {
  .nav-links, .nav-cta { display: none; }
  .nav-toggle { display: flex; }

  .nav-links.aberto {
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 76px; left: 0; right: 0;
    background: var(--branco);
    border-bottom: 1px solid var(--cinza-borda);
    padding: 16px 20px 24px;
    gap: 2px;
    box-shadow: var(--sombra-md);
  }

  .nav-links.aberto .nav-link {
    padding: 12px 16px;
    font-size: 15px;
  }

  .hero-title { font-size: 2.2rem; }
  .areas-grid { grid-template-columns: 1fr; }
  .equipe-grid { grid-template-columns: 1fr; }
  .processo-grid { grid-template-columns: 1fr; }
  .footer-inner { grid-template-columns: 1fr; gap: 28px; padding: 40px 28px; }
  .footer-bottom-inner { flex-direction: column; text-align: center; padding: 16px 28px; }
  .form-linha { grid-template-columns: 1fr; }
}
```

---

## ARQUIVO 3 — js/main.js

```javascript
'use strict';

/* ── Mobile menu ──────────────────────────── */
(function initMenu() {
  const toggle = document.getElementById('navToggle');
  const links  = document.getElementById('navLinks');
  if (!toggle || !links) return;

  toggle.addEventListener('click', () => links.classList.toggle('aberto'));

  links.querySelectorAll('.nav-link').forEach(l =>
    l.addEventListener('click', () => links.classList.remove('aberto'))
  );
})();

/* ── Smooth scroll ────────────────────────── */
(function initScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const el = document.querySelector(a.getAttribute('href'));
      if (!el) return;
      e.preventDefault();
      window.scrollTo({
        top: el.getBoundingClientRect().top + window.scrollY - 80,
        behavior: 'smooth'
      });
    });
  });
})();

/* ── Reveal on scroll ─────────────────────── */
(function initReveal() {
  const els = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right');
  if (!els.length) return;
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.1 });
  els.forEach(el => obs.observe(el));
})();

/* ── Contadores ───────────────────────────── */
(function initCounters() {
  const counters = document.querySelectorAll('.counter');
  if (!counters.length) return;
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el     = e.target;
      const target = +el.dataset.target;
      const dur    = target > 1000 ? 2200 : 1600;
      const t0     = performance.now();
      const tick   = now => {
        const p    = Math.min((now - t0) / dur, 1);
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

/* ── FAQ accordion ────────────────────────── */
(function initFAQ() {
  document.querySelectorAll('.faq-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const resposta = btn.nextElementSibling;
      const aberto   = btn.getAttribute('aria-expanded') === 'true';

      document.querySelectorAll('.faq-btn').forEach(b => {
        b.setAttribute('aria-expanded', 'false');
        b.nextElementSibling.classList.remove('aberta');
      });

      if (!aberto) {
        btn.setAttribute('aria-expanded', 'true');
        resposta.classList.add('aberta');
      }
    });
  });
})();
```

---

## ARQUIVO 4 — contato-envia.php

```php
<?php
$destinatario = 'liberoadv.recepcao@hotmail.com';

$nome     = isset($_POST['nome'])     ? htmlspecialchars(strip_tags(trim($_POST['nome'])))     : '';
$telefone = isset($_POST['telefone']) ? htmlspecialchars(strip_tags(trim($_POST['telefone']))) : '';
$email    = isset($_POST['email'])    ? htmlspecialchars(strip_tags(trim($_POST['email'])))    : '';
$area     = isset($_POST['area'])     ? htmlspecialchars(strip_tags(trim($_POST['area'])))     : '';
$mensagem = isset($_POST['mensagem']) ? htmlspecialchars(strip_tags(trim($_POST['mensagem']))) : '';

if (empty($nome) || empty($telefone)) {
  header('Location: index.php?enviado=erro');
  exit;
}

$assunto = "Contato pelo site: $nome";
$corpo   = "Nome:      $nome\nTelefone:  $telefone\nE-mail:    $email\nÁrea:      $area\n\nMensagem:\n$mensagem";
$headers = "From: site@gerciliberoadvogados.com\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";

mail($destinatario, $assunto, $corpo, $headers);

header("Location: index.php?enviado=ok");
exit;
```

---

## ESTRUTURA DE PASTAS

```
D:\xamp\htdocs\gerci\Site\
├── index.php
├── contato-envia.php
├── css\
│   └── style.css
├── js\
│   └── main.js
└── images\
    ├── logo\
    │   └── Logo_Antiga.png   ← COPIAR AQUI
    ├── hero\                 ← reservado: hero-bg.jpg
    └── equipe\               ← reservado: gerci.jpg / leonardo.jpg
```

---

## TESTAR APÓS CRIAR

- [ ] http://localhost/gerci/Site/
- [ ] Navbar branca visível desde o topo, sem sumir ao scrollar
- [ ] Logo (Logo_Antiga.png) aparece na navbar e no footer
- [ ] Hero com fundo escuro e texto dourado
- [ ] Contadores animam ao scrollar até a seção de números
- [ ] Grid de áreas com 3 colunas (6 cards no total)
- [ ] FAQ abre e fecha corretamente
- [ ] Botão WhatsApp float pulsa e mostra tooltip no hover
- [ ] Mobile: menu hamburger funciona (testar em 375px no DevTools)
- [ ] Formulário redireciona para ?enviado=ok

---

## PENDÊNCIAS PÓS-TESTE

- [ ] Foto para o hero: colocar em `images/hero/hero-bg.jpg` e descomentar o CSS do background-image
- [ ] Fotos dos advogados: `images/equipe/gerci.jpg` e `images/equipe/leonardo.jpg` — descomentar `<img>` no HTML
- [ ] Logo profissional em PNG transparente para substituir a Logo_Antiga.png
- [ ] Para produção: trocar `mail()` por PHPMailer + SMTP do Google Workspace

---

## NOTAS GERAIS

```
Paleta:
--preto:       #1C1A17   (extraído do fundo da logo)
--ouro:        #C9A55A   (extraído da logo)
--ouro-escuro: #A8863E   (hover, destaques secundários)
--cinza-bg:    #F5F4F2   (fundo seções alternadas)

Fontes:
--fh: Cormorant Garamond (headings — serifa elegante, advocacia)
--fb: Raleway (corpo — limpo, sem ser genérico como Inter)

Referências aplicadas:
- Navbar branca sólida sempre presente (Vanzo)
- Números com linha dourada embaixo (Vialle)
- Grid de áreas com divisória (Vanzo)
- Seções alternadas branco/cinza (ambos)
- Fundo escuro em seções de destaque (Vialle)

font-smoothing: SEMPRE auto, NUNCA antialiased
WhatsApp: 554533265151
E-mail: liberoadv.recepcao@hotmail.com
URL de teste: http://localhost/gerci/Site/
```
