# TAREFA — Criar Site Institucional do Zero (v3 — Visual GWD-Inspired)
# Projeto: Gérci Libero da Silva e Advogados Associados
# Data: 03/05/2026
# Status: [ ] Pendente

---

## CONTEXTO

Reescrita total da v2. Inspiração principal: gwdadvogados.com.br.
Diferenciais desta versão:
- Navbar invisível → gaveta lateral deslizante ao clicar no menu
- Hero com slider autoplay + setas (3 slides), fundo gradiente preto→marrom escuro
- Seções escuras e brancas intercaladas (contraste forte igual GWD)
- Cards de áreas com hover reveal (descrição aparece apenas no hover)
- Bloco de números sobre fundo escuro com métricas animadas
- Cookie banner nativo no rodapé
- Botão WhatsApp lateral que abre mini-formulário antes de redirecionar
- Paleta: preto #1C1A17, marrom escuro #3D2B1F, dourado #C9A55A

---

## ARQUIVOS ENVOLVIDOS

| Arquivo           | Caminho                                         | Ação  |
|-------------------|-------------------------------------------------|-------|
| index.php         | D:\xamp\htdocs\gerci\Site\index.php             | Criar |
| style.css         | D:\xamp\htdocs\gerci\Site\css\style.css         | Criar |
| main.js           | D:\xamp\htdocs\gerci\Site\js\main.js            | Criar |
| contato-envia.php | D:\xamp\htdocs\gerci\Site\contato-envia.php     | Criar |

Pastas a criar:
  css/ | js/ | images/logo/ | images/hero/ | images/equipe/ | images/sobre/

Copiar Logo_Antiga.png para: images/logo/Logo_Antiga.png

---

## RESTRIÇÕES

- NÃO usar font-smoothing: antialiased — sempre `auto`
- NÃO usar frameworks CSS ou jQuery — CSS puro + JS vanilla
- NÃO alterar contato-envia.php depois de criado
- Hero usa placeholder CSS (gradiente) até a foto real chegar
- Fotos da equipe: placeholders com ícone até ensaio fotográfico

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
  <meta name="description" content="Gérci Libero da Silva e Advogados Associados — Direito do Trabalho, Previdenciário, Cível, Família e Criminal em Cascavel/PR. Mais de 36 anos de experiência.">
  <title>Gérci Libero — Advogados Associados | Cascavel/PR</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- ══════════════════════════════════════════
     NAVBAR — minimalista, só logo + menu btn
══════════════════════════════════════════ -->
<nav id="navbar">
  <div class="nav-inner">

    <a href="#" class="nav-logo">
      <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados" class="nav-logo-img">
      <div class="nav-logo-text">
        <span class="logo-nome">Gérci Libero</span>
        <span class="logo-sub">Advogados Associados</span>
      </div>
    </a>

    <button class="menu-btn" id="menuBtn" aria-label="Abrir menu">
      <span class="menu-bar"></span>
      <span class="menu-bar"></span>
      <span class="menu-bar"></span>
    </button>

  </div>
</nav>

<!-- ══════════════════════════════════════════
     GAVETA LATERAL (menu)
══════════════════════════════════════════ -->
<div class="gaveta-overlay" id="gavetaOverlay"></div>
<aside class="gaveta" id="gaveta">
  <button class="gaveta-close" id="gavetaClose" aria-label="Fechar menu">
    <i class="fa-solid fa-xmark"></i>
  </button>

  <div class="gaveta-logo">
    <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados">
    <span>Gérci Libero<br><small>Advogados Associados</small></span>
  </div>

  <div class="gaveta-cols">
    <div class="gaveta-col">
      <h4>O Escritório</h4>
      <a href="#sobre">Quem Somos</a>
      <a href="#equipe">Nossa Equipe</a>
      <a href="#processo">Como Funciona</a>
    </div>
    <div class="gaveta-col">
      <h4>Especialidades</h4>
      <a href="#areas">Direito do Trabalho</a>
      <a href="#areas">Direito Previdenciário</a>
      <a href="#areas">Planejamento Previdenciário</a>
      <a href="#areas">Direito Civil</a>
      <a href="#areas">Direito de Família</a>
      <a href="#areas">Direito Criminal</a>
    </div>
    <div class="gaveta-col">
      <h4>Contato</h4>
      <a href="#contato">Fale Conosco</a>
      <a href="#faq">Dúvidas Frequentes</a>
      <a href="https://wa.me/554533265151" target="_blank" rel="noopener">
        <i class="fa-brands fa-whatsapp"></i> WhatsApp
      </a>
    </div>
  </div>

  <div class="gaveta-footer">
    <p><i class="fa-solid fa-location-dot"></i> Cascavel / PR</p>
    <p><i class="fa-solid fa-phone"></i> (45) 3326-5151</p>
    <p><i class="fa-solid fa-clock"></i> Seg–Sex · 08h–18h</p>
  </div>
</aside>

<!-- ══════════════════════════════════════════
     HERO — slider autoplay + setas
══════════════════════════════════════════ -->
<section id="hero">

  <!-- Slides -->
  <div class="slider-track" id="sliderTrack">

    <div class="slide slide--1">
      <!-- Com foto real: adicionar style="background-image:url('images/hero/hero1.jpg')" -->
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Tradição</span>
        <h1>Mais de 36 anos<br><em>defendendo seus direitos.</em></h1>
        <a href="#areas" class="slide-btn">
          <span>Nossas especialidades</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="slide slide--2">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Especialização</span>
        <h1>Trabalhista e Previdenciário.<br><em>Com quem entende.</em></h1>
        <a href="#sobre" class="slide-btn">
          <span>Conheça o escritório</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="slide slide--3">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Atendimento</span>
        <h1>Cascavel/PR e<br><em>todo o Brasil.</em></h1>
        <a href="#contato" class="slide-btn">
          <span>Fale conosco agora</span>
          <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>

  <!-- Controles -->
  <button class="slider-prev" id="sliderPrev" aria-label="Slide anterior">
    <i class="fa-solid fa-chevron-left"></i>
  </button>
  <button class="slider-next" id="sliderNext" aria-label="Próximo slide">
    <i class="fa-solid fa-chevron-right"></i>
  </button>

  <!-- Dots -->
  <div class="slider-dots" id="sliderDots">
    <button class="dot dot--active" data-slide="0"></button>
    <button class="dot" data-slide="1"></button>
    <button class="dot" data-slide="2"></button>
  </div>

  <!-- Scroll hint -->
  <div class="hero-scroll-hint">
    <span></span>
  </div>

</section>

<!-- ══════════════════════════════════════════
     NÚMEROS — fundo escuro
══════════════════════════════════════════ -->
<section class="numeros-section">
  <div class="container numeros-inner">

    <div class="numeros-texto reveal-up">
      <span class="section-eyebrow section-eyebrow--gold">Resultados</span>
      <h2 class="section-title section-title--light">
        Números que<br>comprovam nossa<br><em>trajetória.</em>
      </h2>
      <p>Mais de três décadas de atuação em Cascavel e em todo o Brasil, com resultados concretos e clientes satisfeitos.</p>
    </div>

    <div class="numeros-grid">
      <div class="numero-card reveal-up" style="--delay:.08s">
        <div class="numero-valor">
          <span class="counter" data-target="36">0</span>
        </div>
        <div class="numero-ouro"></div>
        <div class="numero-label">anos de experiência</div>
      </div>
      <div class="numero-card reveal-up" style="--delay:.16s">
        <div class="numero-valor">
          +<span class="counter" data-target="5000">0</span>
        </div>
        <div class="numero-ouro"></div>
        <div class="numero-label">casos atendidos</div>
      </div>
      <div class="numero-card reveal-up" style="--delay:.24s">
        <div class="numero-valor">
          +<span class="counter" data-target="4000">0</span>
        </div>
        <div class="numero-ouro"></div>
        <div class="numero-label">clientes satisfeitos</div>
      </div>
      <div class="numero-card reveal-up" style="--delay:.32s">
        <div class="numero-valor">2</div>
        <div class="numero-ouro"></div>
        <div class="numero-label">especialistas dedicados</div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     SOBRE — fundo branco
══════════════════════════════════════════ -->
<section id="sobre">
  <div class="container sobre-grid">

    <div class="sobre-img reveal-left">
      <!-- <img src="images/sobre/escritorio.jpg" alt="Escritório Gérci Libero"> -->
      <div class="sobre-placeholder">
        <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero" class="sobre-logo">
      </div>
      <div class="sobre-badge">
        <strong>36</strong>
        <span>anos em<br>Cascavel</span>
      </div>
    </div>

    <div class="sobre-texto reveal-right">
      <span class="section-eyebrow">O Escritório</span>
      <h2 class="section-title">
        Fundado na convicção de que<br>todo trabalhador merece<br><em>defesa técnica de qualidade.</em>
      </h2>
      <p class="sobre-p">Desde 1988, o escritório Gérci Libero da Silva atua na defesa dos direitos de trabalhadores e cidadãos em Cascavel e em todo o território nacional. Uma trajetória construída caso a caso, com rigor técnico e compromisso humano.</p>
      <p class="sobre-p">Com a chegada do Dr. Leonardo Libero, especializando o escritório também em Direito Previdenciário, ampliamos nossa capacidade de atender as demandas mais complexas — do reconhecimento de vínculo empregatício ao planejamento da aposentadoria ideal.</p>

      <div class="sobre-checks">
        <div class="check-item"><i class="fa-solid fa-check"></i> Atendimento presencial e virtual em todo o Brasil</div>
        <div class="check-item"><i class="fa-solid fa-check"></i> Diagnóstico inicial sem custo</div>
        <div class="check-item"><i class="fa-solid fa-check"></i> Acompanhamento transparente em cada fase</div>
        <div class="check-item"><i class="fa-solid fa-check"></i> Especialização comprovada nas áreas de atuação</div>
      </div>

      <a href="#contato" class="btn btn-escuro">Agendar Consulta</a>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     ÁREAS — fundo escuro, hover reveal
══════════════════════════════════════════ -->
<section id="areas">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow section-eyebrow--gold">Especialidades</span>
      <h2 class="section-title section-title--light">Áreas de Atuação</h2>
      <p class="section-sub section-sub--light">Passe o mouse sobre cada área para ver mais detalhes.</p>
    </div>

    <div class="areas-grid">

      <div class="area-card reveal-up" style="--delay:.04s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-briefcase"></i></div>
          <h3>Direito do Trabalho</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Verbas rescisórias, FGTS, assédio moral e sexual, reconhecimento de vínculo empregatício, horas extras e demissões irregulares.</p>
          <span class="area-destaque">Especialidade Principal</span>
        </div>
      </div>

      <div class="area-card reveal-up" style="--delay:.08s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Direito Previdenciário</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Aposentadoria por idade, tempo de contribuição e especial. Revisões de benefícios, auxílios e recursos contra negativas do INSS.</p>
          <span class="area-destaque">Especialidade Principal</span>
        </div>
      </div>

      <div class="area-card reveal-up" style="--delay:.12s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-calculator"></i></div>
          <h3>Planejamento Previdenciário</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Estudo técnico e matemático individualizado para identificar o momento ideal da aposentadoria com o maior benefício possível.</p>
        </div>
      </div>

      <div class="area-card reveal-up" style="--delay:.16s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-scale-balanced"></i></div>
          <h3>Direito Civil</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Contratos, responsabilidade civil, indenizações e assessoria em demandas de ordem privada entre pessoas físicas e jurídicas.</p>
        </div>
      </div>

      <div class="area-card reveal-up" style="--delay:.2s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-house-chimney"></i></div>
          <h3>Direito de Família</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Divórcio, guarda, pensão alimentícia, inventário, testamento e questões patrimoniais entre familiares.</p>
        </div>
      </div>

      <div class="area-card reveal-up" style="--delay:.24s">
        <div class="area-front">
          <div class="area-ico"><i class="fa-solid fa-gavel"></i></div>
          <h3>Direito Criminal</h3>
          <div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
        <div class="area-back">
          <p>Defesa em processos criminais, habeas corpus, recursos e acompanhamento em todas as fases da persecução penal.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     EQUIPE — fundo branco
══════════════════════════════════════════ -->
<section id="equipe">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Nossa Equipe</span>
      <h2 class="section-title">Os advogados<br><em>por trás dos resultados.</em></h2>
      <p class="section-sub">Tradição e especialização técnica constante a serviço dos nossos clientes.</p>
    </div>

    <div class="equipe-grid">

      <div class="membro reveal-up">
        <div class="membro-foto">
          <!-- <img src="images/equipe/gerci.jpg" alt="Dr. Gérci Libero da Silva"> -->
          <div class="membro-foto-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <div class="membro-ouro"></div>
          <h3>Dr. Gérci Libero da Silva</h3>
          <span class="membro-cargo">Fundador · OAB/PR</span>
          <span class="membro-area">Direito do Trabalho</span>
          <p>Mais de 36 anos de experiência na defesa dos direitos dos trabalhadores em Cascavel e região, com atuação em casos de alta complexidade.</p>
        </div>
      </div>

      <div class="membro reveal-up" style="--delay:.12s">
        <div class="membro-foto">
          <!-- <img src="images/equipe/leonardo.jpg" alt="Dr. Leonardo Libero da Silva"> -->
          <div class="membro-foto-placeholder">
            <i class="fa-solid fa-user-tie"></i>
          </div>
        </div>
        <div class="membro-info">
          <div class="membro-ouro"></div>
          <h3>Dr. Leonardo Libero da Silva</h3>
          <span class="membro-cargo">Sócio · OAB/PR</span>
          <span class="membro-area">Direito Previdenciário</span>
          <p>Especialista em Direito Previdenciário com mais de 10 anos de experiência em planejamento estratégico, revisões de benefícios e recursos ao INSS.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     COMO FUNCIONA — fundo escuro
══════════════════════════════════════════ -->
<section id="processo">
  <div class="container">

    <div class="section-header reveal-up">
      <span class="section-eyebrow section-eyebrow--gold">Transparência</span>
      <h2 class="section-title section-title--light">Como Funciona</h2>
      <p class="section-sub section-sub--light">Do primeiro contato à decisão final — você acompanha tudo.</p>
    </div>

    <div class="processo-lista">

      <div class="processo-item reveal-up" style="--delay:.06s">
        <div class="processo-num">01</div>
        <div class="processo-corpo">
          <h3>Primeiro Contato</h3>
          <p>Atendimento personalizado presencial ou por videoconferência para diagnóstico inicial do caso — sem custo.</p>
        </div>
      </div>

      <div class="processo-sep"></div>

      <div class="processo-item reveal-up" style="--delay:.12s">
        <div class="processo-num">02</div>
        <div class="processo-corpo">
          <h3>Análise e Estratégia</h3>
          <p>Análise documental completa e definição da melhor estratégia: pedido administrativo ou judicial conforme o caso.</p>
        </div>
      </div>

      <div class="processo-sep"></div>

      <div class="processo-item reveal-up" style="--delay:.18s">
        <div class="processo-num">03</div>
        <div class="processo-corpo">
          <h3>Fase Instrutória</h3>
          <p>Produção de provas, intimação da parte contrária e reforço de todos os argumentos jurídicos perante o magistrado.</p>
        </div>
      </div>

      <div class="processo-sep"></div>

      <div class="processo-item reveal-up" style="--delay:.24s">
        <div class="processo-num">04</div>
        <div class="processo-corpo">
          <h3>Decisão e Execução</h3>
          <p>Acompanhamento integral até a decisão final e garantia do cumprimento da sentença — seu direito efetivado.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ — fundo branco
══════════════════════════════════════════ -->
<section id="faq">
  <div class="container faq-wrap">

    <div class="section-header reveal-up">
      <span class="section-eyebrow">Dúvidas</span>
      <h2 class="section-title">Perguntas Frequentes</h2>
    </div>

    <div class="faq-lista reveal-up" style="--delay:.1s">

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          O escritório atende em todo o Brasil?
          <span class="faq-ico"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>Sim. Através da digitalização dos processos judiciais e videoconferências, representamos clientes em qualquer estado com total segurança jurídica.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Como a Reforma da Previdência afeta meu pedido?
          <span class="faq-ico"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>A reforma criou regras de transição complexas. Analisamos seu histórico individualmente para identificar em qual regra você se enquadra com maior vantagem financeira.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Tive meu benefício negado pelo INSS. O que fazer?
          <span class="faq-ico"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>A negativa pode ser revertida por recurso administrativo ou ação judicial, onde as provas são analisadas de forma mais abrangente. Entre em contato para avaliarmos seu caso.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          O que é a Revisão da Vida Toda?
          <span class="faq-ico"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>É uma tese que permite incluir salários de contribuição anteriores a 1994 no cálculo da aposentadoria, podendo aumentar significativamente o benefício para quem ganhava bem nessa época.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">
          Fui demitido sem justa causa. Quais são meus direitos?
          <span class="faq-ico"><i class="fa-solid fa-plus"></i></span>
        </button>
        <div class="faq-resposta">
          <p>Você tem direito a aviso prévio, saldo de salário, 13º proporcional, férias + 1/3, multa de 40% sobre o FGTS e seguro-desemprego. Verificamos se todos foram pagos corretamente.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     CONTATO — fundo escuro
══════════════════════════════════════════ -->
<section id="contato">
  <div class="container contato-grid">

    <div class="contato-info reveal-left">
      <span class="section-eyebrow section-eyebrow--gold">Fale Conosco</span>
      <h2 class="section-title section-title--light">Agende sua<br>consulta hoje.</h2>
      <p class="contato-aviso">
        <i class="fa-solid fa-triangle-exclamation"></i>
        Prazos jurídicos são fatais. Não espere para buscar orientação.
      </p>
      <div class="contato-dados">
        <a href="https://wa.me/554533265151" target="_blank" rel="noopener" class="dado dado--link">
          <div class="dado-ico"><i class="fa-brands fa-whatsapp"></i></div>
          <div><strong>(45) 3326-5151</strong><span>WhatsApp · atendimento imediato</span></div>
        </a>
        <div class="dado">
          <div class="dado-ico"><i class="fa-solid fa-envelope"></i></div>
          <div><strong>liberoadv.recepcao@hotmail.com</strong><span>Resposta em até 1 dia útil</span></div>
        </div>
        <div class="dado">
          <div class="dado-ico"><i class="fa-solid fa-location-dot"></i></div>
          <div><strong>Cascavel / PR</strong><span>Presencial e virtual</span></div>
        </div>
        <div class="dado">
          <div class="dado-ico"><i class="fa-solid fa-clock"></i></div>
          <div><strong>Segunda a Sexta</strong><span>08:00 às 18:00</span></div>
        </div>
      </div>
    </div>

    <div class="contato-form-wrap reveal-right">
      <?php if ($enviado === 'ok'): ?>
        <div class="form-ok">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem recebida!</h3>
          <p>Retornaremos em breve. Para atendimento imediato, use o WhatsApp.</p>
          <a href="https://wa.me/554533265151" class="btn btn-ouro" target="_blank" rel="noopener">
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
              <label for="telefone">WhatsApp *</label>
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
              <option value="">Selecione...</option>
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
            <textarea id="mensagem" name="mensagem" rows="4" placeholder="Conte sobre sua situação..."></textarea>
          </div>
          <button type="submit" class="btn btn-ouro btn-full">
            Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      <?php endif; ?>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     FOOTER — fundo preto
══════════════════════════════════════════ -->
<footer id="footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero" class="footer-logo">
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
        <li><a href="#areas">Planejamento Previdenciário</a></li>
        <li><a href="#areas">Direito Civil</a></li>
        <li><a href="#areas">Direito de Família</a></li>
        <li><a href="#areas">Direito Criminal</a></li>
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
      <p>&copy; <?php echo date('Y'); ?> Gérci Libero da Silva e Advogados Associados. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>

<!-- ══════════════════════════════════════════
     WHATSAPP FLOAT + MINI FORMULÁRIO
══════════════════════════════════════════ -->
<div class="wa-wrap" id="waWrap">
  <div class="wa-form" id="waForm">
    <div class="wa-form-header">
      <div class="wa-form-avatar">
        <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero">
      </div>
      <div>
        <strong>Gérci Libero Advogados</strong>
        <span>Resposta rápida pelo WhatsApp</span>
      </div>
      <button class="wa-form-close" id="waFormClose" aria-label="Fechar">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="wa-form-body">
      <p>Olá! Preencha os dados abaixo para iniciar o atendimento.</p>
      <input type="text" id="waNome" placeholder="Seu nome *">
      <input type="tel" id="waTelefone" placeholder="Seu telefone *">
      <select id="waAssunto">
        <option value="">Assunto...</option>
        <option>Direito do Trabalho</option>
        <option>Direito Previdenciário</option>
        <option>Planejamento Previdenciário</option>
        <option>Direito Civil</option>
        <option>Direito de Família</option>
        <option>Direito Criminal</option>
        <option>Outro</option>
      </select>
      <button class="wa-form-btn" id="waEnviar">
        <i class="fa-brands fa-whatsapp"></i> Iniciar Conversa
      </button>
    </div>
  </div>
  <button class="wa-btn" id="waBtn" aria-label="Abrir WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="wa-badge">1</span>
  </button>
</div>

<!-- ══════════════════════════════════════════
     COOKIE BANNER
══════════════════════════════════════════ -->
<div class="cookie-banner" id="cookieBanner">
  <div class="cookie-texto">
    Utilizamos cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa
    <a href="#" class="cookie-link">Política de Privacidade</a>.
  </div>
  <div class="cookie-acoes">
    <button class="cookie-btn cookie-btn--rejeitar" id="cookieRejeitar">Recusar</button>
    <button class="cookie-btn cookie-btn--aceitar" id="cookieAceitar">Aceitar cookies</button>
  </div>
</div>

<script src="js/main.js"></script>
</body>
</html>
```

---

## ARQUIVO 2 — css/style.css

```css
/* ══════════════════════════════════════════
   RESET & VARIÁVEIS
══════════════════════════════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --preto:       #1C1A17;
  --marrom:      #3D2B1F;
  --ouro:        #C9A55A;
  --ouro-escuro: #A8863E;
  --branco:      #FFFFFF;
  --cinza-bg:    #F5F4F2;
  --cinza-borda: #E2DDD8;
  --cinza-texto: #5A5650;
  --cinza-light: #9A948E;
  --escuro-sec:  #1E1B17;

  --fh: 'Cormorant Garamond', Georgia, serif;
  --fb: 'Raleway', system-ui, sans-serif;

  --container: 1180px;
  --nav-h: 72px;
  --radius: 10px;
  --sombra-sm: 0 2px 12px rgba(28,26,23,.07);
  --sombra-md: 0 8px 36px rgba(28,26,23,.12);
  --sombra-lg: 0 20px 64px rgba(28,26,23,.18);
}

html  { scroll-behavior: smooth; }
body  { font-family: var(--fb); font-size: 16px; color: var(--cinza-texto);
        background: var(--branco); -webkit-font-smoothing: auto; overflow-x: hidden; }
a, a:hover, a:visited, a:active { text-decoration: none; color: inherit; }
img   { max-width: 100%; display: block; }
ul    { list-style: none; }

.container {
  width: 100%; max-width: var(--container);
  margin: 0 auto; padding: 0 28px;
}

/* ══════════════════════════════════════════
   TIPOGRAFIA GLOBAL
══════════════════════════════════════════ */
.section-eyebrow {
  display: inline-block; font-family: var(--fb); font-size: 10.5px;
  font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase;
  color: var(--ouro); margin-bottom: 12px;
}
.section-eyebrow--gold { color: var(--ouro); }

.section-title {
  font-family: var(--fh); font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 600; color: var(--preto); line-height: 1.2; margin-bottom: 16px;
}
.section-title em { font-style: italic; color: var(--ouro-escuro); }
.section-title--light { color: #fff; }
.section-title--light em { color: rgba(201,165,90,.8); }

.section-sub { font-size: 1rem; color: var(--cinza-light); line-height: 1.75; max-width: 520px; }
.section-sub--light { color: rgba(255,255,255,.45); }

.section-header { text-align: center; margin-bottom: 60px; }
.section-header .section-sub { margin: 0 auto; }

/* ══════════════════════════════════════════
   BOTÕES
══════════════════════════════════════════ */
.btn {
  display: inline-flex; align-items: center; gap: 9px;
  font-family: var(--fb); font-size: 13.5px; font-weight: 600;
  letter-spacing: .04em; padding: 14px 30px; border-radius: 4px;
  border: 2px solid transparent; cursor: pointer;
  transition: all .25s ease; white-space: nowrap;
}
.btn-ouro { background: var(--ouro); color: var(--preto); border-color: var(--ouro); }
.btn-ouro:hover { background: var(--ouro-escuro); border-color: var(--ouro-escuro);
                  transform: translateY(-2px); box-shadow: 0 6px 20px rgba(201,165,90,.35); }
.btn-escuro { background: var(--preto); color: #fff; border-color: var(--preto); }
.btn-escuro:hover { background: var(--marrom); transform: translateY(-2px);
                    box-shadow: 0 6px 20px rgba(28,26,23,.3); }
.btn-full { width: 100%; justify-content: center; }

/* ══════════════════════════════════════════
   NAVBAR
══════════════════════════════════════════ */
#navbar {
  position: fixed; top: 0; left: 0; right: 0; z-index: 1000;
  height: var(--nav-h);
  background: linear-gradient(to bottom, rgba(28,26,23,.85) 0%, transparent 100%);
  transition: background .4s ease, box-shadow .4s ease;
}

#navbar.solid {
  background: var(--preto);
  box-shadow: 0 4px 24px rgba(0,0,0,.4);
}

.nav-inner {
  max-width: var(--container); margin: 0 auto; padding: 0 28px;
  display: flex; align-items: center; justify-content: space-between;
  height: 100%;
}

/* Logo */
.nav-logo { display: flex; align-items: center; gap: 12px; }
.nav-logo-img { height: 40px; width: auto; }
.nav-logo-text { display: flex; flex-direction: column; line-height: 1.15;
                  border-left: 1px solid rgba(255,255,255,.2); padding-left: 12px; }
.logo-nome { font-family: var(--fh); font-size: 1.05rem; font-weight: 600; color: #fff; }
.logo-sub  { font-size: 9px; font-weight: 500; color: rgba(255,255,255,.5);
              letter-spacing: .08em; text-transform: uppercase; }

/* Botão hamburger */
.menu-btn {
  display: flex; flex-direction: column; gap: 5px;
  background: none; border: none; cursor: pointer; padding: 10px;
}
.menu-bar {
  display: block; width: 28px; height: 2px;
  background: rgba(255,255,255,.85); border-radius: 2px;
  transition: all .3s ease;
}
.menu-btn:hover .menu-bar { background: var(--ouro); }

/* ══════════════════════════════════════════
   GAVETA LATERAL
══════════════════════════════════════════ */
.gaveta-overlay {
  position: fixed; inset: 0; z-index: 1100;
  background: rgba(0,0,0,.6);
  opacity: 0; pointer-events: none;
  transition: opacity .35s ease;
}
.gaveta-overlay.visivel { opacity: 1; pointer-events: all; }

.gaveta {
  position: fixed; top: 0; right: 0; bottom: 0; z-index: 1200;
  width: min(520px, 90vw);
  background: var(--preto);
  transform: translateX(100%);
  transition: transform .4s cubic-bezier(.16,1,.3,1);
  overflow-y: auto;
  display: flex; flex-direction: column;
  padding: 40px 48px;
}
.gaveta.aberta { transform: translateX(0); }

.gaveta-close {
  position: absolute; top: 24px; right: 28px;
  background: none; border: none; cursor: pointer;
  font-size: 20px; color: rgba(255,255,255,.5);
  transition: color .2s;
}
.gaveta-close:hover { color: var(--ouro); }

.gaveta-logo {
  display: flex; align-items: center; gap: 16px;
  margin-bottom: 48px; padding-bottom: 32px;
  border-bottom: 1px solid rgba(255,255,255,.08);
}
.gaveta-logo img { height: 44px; width: auto; }
.gaveta-logo span { font-family: var(--fh); font-size: 1.1rem; font-weight: 600; color: #fff; }
.gaveta-logo small { display: block; font-size: 10px; color: rgba(255,255,255,.4);
                      letter-spacing: .08em; text-transform: uppercase; font-family: var(--fb); }

.gaveta-cols { display: grid; grid-template-columns: repeat(3,1fr); gap: 32px; flex: 1; }

.gaveta-col h4 {
  font-family: var(--fb); font-size: 10px; font-weight: 700;
  letter-spacing: .14em; text-transform: uppercase;
  color: rgba(255,255,255,.3); margin-bottom: 16px;
}

.gaveta-col a {
  display: block; font-size: 14px; font-weight: 500;
  color: rgba(255,255,255,.65); padding: 6px 0;
  border-bottom: 1px solid rgba(255,255,255,.05);
  transition: color .2s, padding-left .2s;
}
.gaveta-col a:hover { color: var(--ouro); padding-left: 6px; }

.gaveta-footer {
  margin-top: 40px; padding-top: 28px;
  border-top: 1px solid rgba(255,255,255,.08);
}
.gaveta-footer p {
  font-size: 13px; color: rgba(255,255,255,.4);
  margin-bottom: 8px; display: flex; align-items: center; gap: 8px;
}
.gaveta-footer p i { color: var(--ouro); opacity: .7; }

/* ══════════════════════════════════════════
   HERO SLIDER
══════════════════════════════════════════ */
#hero {
  position: relative; height: 100vh; min-height: 600px;
  overflow: hidden;
}

.slider-track {
  display: flex; height: 100%;
  transition: transform .7s cubic-bezier(.77,0,.175,1);
}

.slide {
  min-width: 100%; height: 100%;
  position: relative;
  display: flex; align-items: center;
}

/* Slides com cor (placeholder até ter foto) */
.slide--1 { background: linear-gradient(135deg, var(--preto) 0%, var(--marrom) 100%); }
.slide--2 { background: linear-gradient(135deg, #2A1F16 0%, var(--preto) 100%); }
.slide--3 { background: linear-gradient(135deg, var(--marrom) 0%, #1C1A17 100%); }

/* Com foto real, adicionar ao HTML:
   style="background-image:url('images/hero/hero1.jpg'); background-size:cover; background-position:center;" */

.slide-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(to right, rgba(28,26,23,.7) 40%, rgba(28,26,23,.2));
}

.slide-content {
  position: relative; z-index: 1;
  max-width: var(--container); margin: 0 auto; padding: 0 28px;
  padding-top: var(--nav-h);
}

.slide-chapeu {
  display: block; font-family: var(--fb); font-size: 11px;
  font-weight: 700; letter-spacing: .2em; text-transform: uppercase;
  color: var(--ouro); margin-bottom: 20px;
}

.slide-content h1 {
  font-family: var(--fh); font-size: clamp(2.4rem, 5.5vw, 4rem);
  font-weight: 600; color: #fff; line-height: 1.15; margin-bottom: 36px;
}

.slide-content h1 em { font-style: italic; color: rgba(255,255,255,.65); }

.slide-btn {
  display: inline-flex; align-items: center; gap: 12px;
  font-family: var(--fb); font-size: 13.5px; font-weight: 600;
  color: #fff; letter-spacing: .04em;
  padding: 0 0 8px; border-bottom: 1.5px solid var(--ouro);
  transition: gap .25s ease, color .25s;
}
.slide-btn:hover { gap: 20px; color: var(--ouro); }

/* Controles */
.slider-prev, .slider-next {
  position: absolute; top: 50%; transform: translateY(-50%);
  z-index: 10; background: rgba(255,255,255,.08);
  border: 1px solid rgba(255,255,255,.2); color: #fff;
  width: 48px; height: 48px; border-radius: 50%; cursor: pointer;
  font-size: 15px; display: flex; align-items: center; justify-content: center;
  transition: all .25s;
}
.slider-prev { left: 28px; }
.slider-next { right: 28px; }
.slider-prev:hover, .slider-next:hover {
  background: var(--ouro); border-color: var(--ouro);
}

/* Dots */
.slider-dots {
  position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
  z-index: 10; display: flex; gap: 10px;
}
.dot {
  width: 8px; height: 8px; border-radius: 50%;
  background: rgba(255,255,255,.3); border: none; cursor: pointer;
  transition: background .3s, transform .3s;
}
.dot--active { background: var(--ouro); transform: scale(1.3); }

/* Scroll hint */
.hero-scroll-hint {
  position: absolute; bottom: 32px; left: 28px; z-index: 10;
}
.hero-scroll-hint span {
  display: block; width: 1px; height: 48px;
  background: linear-gradient(to bottom, rgba(255,255,255,.5), transparent);
  animation: scrollDown 1.8s ease-in-out infinite;
}
@keyframes scrollDown {
  0%,100% { opacity:1; transform:scaleY(1); transform-origin:top; }
  50%      { opacity:.3; transform:scaleY(.5); }
}

/* ══════════════════════════════════════════
   NÚMEROS — ESCURO
══════════════════════════════════════════ */
.numeros-section {
  background: var(--escuro-sec);
  padding: 100px 0;
  position: relative; overflow: hidden;
}

/* Textura sutil */
.numeros-section::before {
  content: ''; position: absolute; inset: 0;
  background-image: repeating-linear-gradient(
    -45deg, transparent, transparent 40px,
    rgba(201,165,90,.025) 40px, rgba(201,165,90,.025) 41px
  );
  pointer-events: none;
}

.numeros-inner {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 80px; align-items: center;
  position: relative; z-index: 1;
}

.numeros-texto p {
  font-size: 15px; color: rgba(255,255,255,.5); line-height: 1.8;
  margin-top: 16px;
}

.numeros-grid {
  display: grid; grid-template-columns: repeat(2,1fr); gap: 40px;
}

.numero-card { text-align: center; }

.numero-valor {
  font-family: var(--fh); font-size: clamp(2.8rem,5vw,4rem);
  font-weight: 700; color: #fff; line-height: 1;
  margin-bottom: 12px; -webkit-font-smoothing: auto;
}

.numero-ouro {
  width: 36px; height: 2px; background: var(--ouro);
  margin: 0 auto 12px;
}

.numero-label {
  font-family: var(--fb); font-size: 13px; font-weight: 500;
  color: rgba(255,255,255,.45); letter-spacing: .04em;
}

/* ══════════════════════════════════════════
   SOBRE — BRANCO
══════════════════════════════════════════ */
#sobre { padding: 100px 0; background: var(--branco); }

.sobre-grid {
  display: grid; grid-template-columns: 1fr 1.15fr;
  gap: 80px; align-items: center;
}

.sobre-img { position: relative; }

.sobre-placeholder {
  width: 100%; aspect-ratio: 4/5;
  background: var(--preto); border-radius: var(--radius);
  display: flex; align-items: center; justify-content: center;
}

.sobre-logo { width: 50%; opacity: .65; }

.sobre-badge {
  position: absolute; bottom: -16px; right: -16px;
  background: var(--ouro); border-radius: var(--radius);
  padding: 18px 22px; text-align: center;
  box-shadow: var(--sombra-lg); z-index: 2;
}
.sobre-badge strong {
  display: block; font-family: var(--fh); font-size: 2.4rem;
  font-weight: 700; color: var(--preto); line-height: 1;
}
.sobre-badge span {
  display: block; font-size: 11px; font-weight: 600;
  color: var(--preto); opacity: .7; margin-top: 4px; line-height: 1.4;
}

.sobre-p { font-size: 15px; color: var(--cinza-texto); line-height: 1.85; margin-bottom: 14px; }

.sobre-checks { display: flex; flex-direction: column; gap: 10px; margin: 28px 0 32px; }
.check-item {
  display: flex; align-items: center; gap: 12px;
  font-size: 14px; color: var(--cinza-texto);
}
.check-item i { color: var(--ouro); font-size: 12px; flex-shrink: 0; }

/* ══════════════════════════════════════════
   ÁREAS — ESCURO + HOVER REVEAL
══════════════════════════════════════════ */
#areas { padding: 100px 0; background: var(--escuro-sec); }

.areas-grid {
  display: grid; grid-template-columns: repeat(3,1fr);
  gap: 1px; background: rgba(255,255,255,.06);
  border: 1px solid rgba(255,255,255,.06);
  border-radius: var(--radius); overflow: hidden;
}

.area-card {
  background: var(--escuro-sec);
  padding: 40px 32px;
  position: relative; cursor: pointer;
  transition: background .3s;
  min-height: 200px;
  display: flex; flex-direction: column;
}

.area-card:hover { background: var(--marrom); }

/* Front — visível por padrão */
.area-front {
  display: flex; flex-direction: column;
  height: 100%;
  transition: opacity .3s, transform .3s;
}

.area-card:hover .area-front { opacity: 0; transform: translateY(-8px); pointer-events: none; }

.area-ico { font-size: 24px; color: var(--ouro); margin-bottom: 16px; }

.area-front h3 {
  font-family: var(--fh); font-size: 1.15rem; font-weight: 600;
  color: #fff; flex: 1;
}

.area-seta {
  margin-top: 20px; font-size: 14px;
  color: rgba(255,255,255,.3); transition: color .3s;
}
.area-card:hover .area-seta { color: var(--ouro); }

/* Back — visível no hover */
.area-back {
  position: absolute; inset: 0; padding: 40px 32px;
  display: flex; flex-direction: column; justify-content: center;
  opacity: 0; transform: translateY(8px);
  transition: opacity .3s, transform .3s;
  pointer-events: none;
}
.area-card:hover .area-back { opacity: 1; transform: translateY(0); pointer-events: all; }

.area-back p { font-size: 14px; color: rgba(255,255,255,.7); line-height: 1.8; margin-bottom: 16px; }

.area-destaque {
  display: inline-block; font-size: 10px; font-weight: 700;
  letter-spacing: .1em; text-transform: uppercase;
  color: var(--ouro); background: rgba(201,165,90,.1);
  padding: 4px 10px; border-radius: 3px;
}

/* ══════════════════════════════════════════
   EQUIPE — BRANCO
══════════════════════════════════════════ */
#equipe { padding: 100px 0; background: var(--branco); }

.equipe-grid {
  display: grid; grid-template-columns: repeat(2,1fr);
  gap: 28px; max-width: 860px; margin: 0 auto;
}

.membro {
  background: var(--cinza-bg); border-radius: var(--radius);
  overflow: hidden; border: 1px solid var(--cinza-borda);
  box-shadow: var(--sombra-sm); transition: box-shadow .3s;
}
.membro:hover { box-shadow: var(--sombra-md); }

.membro-foto {
  width: 100%; aspect-ratio: 4/3;
  background: var(--preto);
  display: flex; align-items: center; justify-content: center;
  overflow: hidden;
}
.membro-foto img { width:100%; height:100%; object-fit:cover; object-position:top; }
.membro-foto-placeholder { font-size: 60px; color: rgba(201,165,90,.2); }

.membro-info { padding: 28px 32px; }
.membro-ouro { width: 36px; height: 2px; background: var(--ouro); margin-bottom: 14px; }

.membro-info h3 {
  font-family: var(--fh); font-size: 1.2rem; font-weight: 600;
  color: var(--preto); margin-bottom: 4px;
}
.membro-cargo {
  display: block; font-size: 10.5px; font-weight: 700;
  letter-spacing: .1em; text-transform: uppercase;
  color: var(--cinza-light); margin-bottom: 6px;
}
.membro-area {
  display: block; font-size: 13px; font-weight: 500;
  color: var(--ouro-escuro); margin-bottom: 12px;
}
.membro-info p { font-size: 14px; color: var(--cinza-texto); line-height: 1.75; }

/* ══════════════════════════════════════════
   COMO FUNCIONA — ESCURO
══════════════════════════════════════════ */
#processo { padding: 100px 0; background: var(--preto); position: relative; overflow: hidden; }

#processo::before {
  content: ''; position: absolute; inset: 0;
  background-image: repeating-linear-gradient(
    90deg, transparent, transparent 80px,
    rgba(201,165,90,.025) 80px, rgba(201,165,90,.025) 81px
  );
  pointer-events: none;
}

.processo-lista {
  display: flex; flex-direction: column; gap: 0;
  max-width: 760px; margin: 0 auto;
  position: relative; z-index: 1;
}

.processo-sep {
  width: 1px; height: 40px; background: rgba(255,255,255,.08);
  margin-left: 32px;
}

.processo-item {
  display: flex; gap: 28px; align-items: flex-start;
}

.processo-num {
  font-family: var(--fh); font-size: 1.8rem; font-weight: 700;
  color: rgba(201,165,90,.3); line-height: 1; min-width: 64px;
  padding-top: 2px;
}

.processo-corpo h3 {
  font-family: var(--fh); font-size: 1.2rem; font-weight: 600;
  color: #fff; margin-bottom: 8px;
}
.processo-corpo p {
  font-size: 14px; color: rgba(255,255,255,.45); line-height: 1.8;
}

/* ══════════════════════════════════════════
   FAQ — BRANCO
══════════════════════════════════════════ */
#faq { padding: 100px 0; background: var(--branco); }

.faq-wrap .section-header { margin-bottom: 48px; }

.faq-lista { max-width: 740px; margin: 0 auto; }

.faq-item { border-bottom: 1px solid var(--cinza-borda); }
.faq-item:first-child { border-top: 1px solid var(--cinza-borda); }

.faq-btn {
  width: 100%; background: none; border: none; cursor: pointer;
  padding: 22px 0; display: flex; align-items: center;
  justify-content: space-between; gap: 16px;
  font-family: var(--fb); font-size: 15px; font-weight: 600;
  color: var(--preto); text-align: left; transition: color .2s;
}
.faq-btn:hover { color: var(--ouro-escuro); }

.faq-ico {
  width: 26px; height: 26px; min-width: 26px; border-radius: 50%;
  border: 1.5px solid var(--cinza-borda); display: flex; align-items: center;
  justify-content: center; font-size: 11px; color: var(--ouro);
  transition: all .3s;
}
.faq-btn[aria-expanded="true"] .faq-ico {
  background: var(--ouro); border-color: var(--ouro);
  color: var(--preto); transform: rotate(45deg);
}

.faq-resposta { max-height: 0; overflow: hidden; transition: max-height .4s ease, padding .3s; }
.faq-resposta.aberta { max-height: 300px; padding-bottom: 20px; }
.faq-resposta p { font-size: 14.5px; color: var(--cinza-texto); line-height: 1.85; }

/* ══════════════════════════════════════════
   CONTATO — ESCURO
══════════════════════════════════════════ */
#contato { padding: 100px 0; background: var(--escuro-sec); }

.contato-grid {
  display: grid; grid-template-columns: 1fr 1.1fr;
  gap: 80px; align-items: start;
}

.contato-aviso {
  display: flex; align-items: center; gap: 10px;
  font-size: 13.5px; color: rgba(201,165,90,.8); margin-bottom: 36px;
}

.contato-dados { display: flex; flex-direction: column; gap: 18px; }

.dado { display: flex; align-items: flex-start; gap: 14px; }
.dado--link { cursor: pointer; transition: opacity .2s; }
.dado--link:hover { opacity: .8; }

.dado-ico {
  width: 38px; height: 38px; min-width: 38px; border-radius: 8px;
  background: rgba(201,165,90,.1); border: 1px solid rgba(201,165,90,.2);
  display: flex; align-items: center; justify-content: center;
  color: var(--ouro); font-size: 15px;
}
.dado strong { display: block; font-size: 14.5px; font-weight: 600; color: #fff; margin-bottom: 2px; }
.dado span   { font-size: 13px; color: rgba(255,255,255,.4); }

/* Formulário */
.contato-form-wrap {
  background: var(--branco); border-radius: var(--radius);
  padding: 40px; box-shadow: var(--sombra-lg);
}
.form-titulo {
  font-family: var(--fh); font-size: 1.5rem; font-weight: 600;
  color: var(--preto); margin-bottom: 28px; padding-bottom: 16px;
  border-bottom: 1px solid var(--cinza-borda);
}
.contato-form { display: flex; flex-direction: column; gap: 18px; }
.form-grupo    { display: flex; flex-direction: column; gap: 6px; }
.form-linha    { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }

label { font-size: 12px; font-weight: 700; letter-spacing: .06em;
        text-transform: uppercase; color: var(--cinza-texto); }

input, select, textarea {
  font-family: var(--fb); font-size: 14.5px; color: var(--preto);
  background: var(--cinza-bg); border: 1.5px solid var(--cinza-borda);
  border-radius: 5px; padding: 12px 14px; outline: none; width: 100%;
  transition: border-color .2s, box-shadow .2s; -webkit-font-smoothing: auto;
}
input:focus, select:focus, textarea:focus {
  border-color: var(--ouro); box-shadow: 0 0 0 3px rgba(201,165,90,.12);
}
textarea { resize: vertical; }

.form-ok { text-align: center; padding: 32px 16px; }
.form-ok i { font-size: 2.8rem; color: #22C55E; display: block; margin-bottom: 14px; }
.form-ok h3 { font-family: var(--fh); font-size: 1.5rem; color: var(--preto); margin-bottom: 10px; }
.form-ok p  { color: var(--cinza-texto); margin-bottom: 24px; font-size: 15px; }

/* ══════════════════════════════════════════
   FOOTER
══════════════════════════════════════════ */
#footer { background: var(--preto); }

.footer-grid {
  display: grid; grid-template-columns: 1.8fr 1fr 1fr 1.2fr;
  gap: 48px; padding: 64px 0;
  border-bottom: 1px solid rgba(255,255,255,.07);
}

.footer-logo  { height: 48px; width: auto; margin-bottom: 14px; }
.footer-nome  { display: block; font-family: var(--fh); font-size: 1.05rem;
                font-weight: 600; color: #fff; }
.footer-sub   { display: block; font-size: 10px; font-weight: 500;
                color: rgba(255,255,255,.35); letter-spacing: .06em; margin-bottom: 16px; }
.footer-brand p { font-size: 13px; color: rgba(255,255,255,.4); line-height: 1.7; margin-bottom: 6px; }
.footer-oab   { font-size: 11px !important; color: rgba(255,255,255,.2) !important; font-style: italic; }

.footer-col h4 {
  font-family: var(--fb); font-size: 10px; font-weight: 700;
  letter-spacing: .14em; text-transform: uppercase;
  color: rgba(255,255,255,.3); margin-bottom: 16px;
}
.footer-col ul { display: flex; flex-direction: column; gap: 8px; }
.footer-col a  { font-size: 13.5px; color: rgba(255,255,255,.55); transition: color .2s; }
.footer-col a:hover { color: var(--ouro); }
.footer-col p  { font-size: 13px; color: rgba(255,255,255,.55); margin-bottom: 8px;
                  display: flex; align-items: center; gap: 8px; }
.footer-col p i { color: var(--ouro); opacity: .7; }

.footer-bottom { padding: 20px 0; }
.footer-bottom-inner {
  display: flex; justify-content: space-between; flex-wrap: wrap;
  gap: 6px; align-items: center;
}
.footer-bottom p { font-size: 12px; color: rgba(255,255,255,.25); }

/* ══════════════════════════════════════════
   WHATSAPP FLOAT + MINI FORM
══════════════════════════════════════════ */
.wa-wrap {
  position: fixed; bottom: 28px; right: 24px; z-index: 900;
  display: flex; flex-direction: column; align-items: flex-end; gap: 12px;
}

.wa-btn {
  position: relative; width: 56px; height: 56px; border-radius: 50%;
  background: #25D366; color: #fff; border: none; cursor: pointer;
  font-size: 26px; display: flex; align-items: center; justify-content: center;
  box-shadow: 0 4px 20px rgba(37,211,102,.45);
  transition: transform .25s, box-shadow .25s;
  animation: pulsoWA 2.5s ease-in-out infinite;
}
.wa-btn:hover { transform: scale(1.1); animation: none; }

@keyframes pulsoWA {
  0%,100% { box-shadow: 0 4px 20px rgba(37,211,102,.45); }
  50%      { box-shadow: 0 4px 32px rgba(37,211,102,.7); }
}

.wa-badge {
  position: absolute; top: -4px; right: -4px;
  width: 18px; height: 18px; border-radius: 50%;
  background: #E53E3E; color: #fff;
  font-size: 10px; font-weight: 700; font-family: var(--fb);
  display: flex; align-items: center; justify-content: center;
  animation: pulsoWA 2s ease-in-out infinite;
}

/* Mini formulário */
.wa-form {
  width: 300px; background: var(--branco);
  border-radius: 12px; overflow: hidden;
  box-shadow: 0 12px 48px rgba(0,0,0,.25);
  transform-origin: bottom right;
  transform: scale(0); opacity: 0;
  transition: transform .3s cubic-bezier(.34,1.56,.64,1), opacity .25s;
  pointer-events: none;
}
.wa-form.aberto { transform: scale(1); opacity: 1; pointer-events: all; }

.wa-form-header {
  background: #128C7E; padding: 14px 16px;
  display: flex; align-items: center; gap: 10px;
}
.wa-form-avatar {
  width: 40px; height: 40px; border-radius: 50%;
  background: rgba(255,255,255,.15);
  display: flex; align-items: center; justify-content: center;
  overflow: hidden; flex-shrink: 0;
}
.wa-form-avatar img { width: 100%; height: 100%; object-fit: cover; }
.wa-form-header strong { display: block; font-size: 13px; font-weight: 700; color: #fff; }
.wa-form-header span   { font-size: 11px; color: rgba(255,255,255,.7); }
.wa-form-close {
  margin-left: auto; background: none; border: none; cursor: pointer;
  color: rgba(255,255,255,.7); font-size: 16px; transition: color .2s;
}
.wa-form-close:hover { color: #fff; }

.wa-form-body { padding: 16px; display: flex; flex-direction: column; gap: 10px; }
.wa-form-body p { font-size: 13px; color: var(--cinza-texto); }
.wa-form-body input,
.wa-form-body select {
  font-family: var(--fb); font-size: 13.5px; color: var(--preto);
  background: var(--cinza-bg); border: 1.5px solid var(--cinza-borda);
  border-radius: 6px; padding: 10px 12px; outline: none; width: 100%;
  transition: border-color .2s;
}
.wa-form-body input:focus,
.wa-form-body select:focus { border-color: #25D366; }

.wa-form-btn {
  background: #25D366; color: #fff; border: none; cursor: pointer;
  border-radius: 6px; padding: 12px; width: 100%;
  font-family: var(--fb); font-size: 14px; font-weight: 700;
  display: flex; align-items: center; justify-content: center; gap: 8px;
  transition: background .25s;
}
.wa-form-btn:hover { background: #1ebe57; }

/* ══════════════════════════════════════════
   COOKIE BANNER
══════════════════════════════════════════ */
.cookie-banner {
  position: fixed; bottom: 0; left: 0; right: 0; z-index: 800;
  background: var(--preto); border-top: 1px solid rgba(255,255,255,.08);
  padding: 16px 28px;
  display: flex; align-items: center; justify-content: space-between;
  flex-wrap: wrap; gap: 16px;
  transform: translateY(100%);
  transition: transform .4s cubic-bezier(.16,1,.3,1);
}
.cookie-banner.visivel { transform: translateY(0); }

.cookie-texto { font-size: 13px; color: rgba(255,255,255,.55); max-width: 680px; line-height: 1.6; }
.cookie-link  { color: var(--ouro); }

.cookie-acoes { display: flex; gap: 10px; flex-shrink: 0; }

.cookie-btn {
  font-family: var(--fb); font-size: 12.5px; font-weight: 600;
  padding: 9px 18px; border-radius: 5px; border: none; cursor: pointer;
  transition: all .25s;
}
.cookie-btn--rejeitar {
  background: transparent; color: rgba(255,255,255,.4);
  border: 1px solid rgba(255,255,255,.15);
}
.cookie-btn--rejeitar:hover { color: #fff; border-color: rgba(255,255,255,.4); }
.cookie-btn--aceitar { background: var(--ouro); color: var(--preto); }
.cookie-btn--aceitar:hover { background: var(--ouro-escuro); }

/* ══════════════════════════════════════════
   REVEAL ANIMATIONS
══════════════════════════════════════════ */
.reveal-up, .reveal-left, .reveal-right {
  opacity: 0;
  transition: opacity .65s ease, transform .65s ease;
  transition-delay: var(--delay, 0s);
}
.reveal-up    { transform: translateY(24px); }
.reveal-left  { transform: translateX(-24px); }
.reveal-right { transform: translateX(24px); }
.reveal-up.visible,
.reveal-left.visible,
.reveal-right.visible { opacity: 1; transform: none; }

/* ══════════════════════════════════════════
   RESPONSIVO
══════════════════════════════════════════ */
@media (max-width: 1024px) {
  .numeros-inner  { grid-template-columns: 1fr; gap: 48px; }
  .sobre-grid     { grid-template-columns: 1fr; gap: 56px; }
  .sobre-img      { max-width: 420px; margin: 0 auto; }
  .areas-grid     { grid-template-columns: repeat(2,1fr); }
  .contato-grid   { grid-template-columns: 1fr; gap: 48px; }
  .footer-grid    { grid-template-columns: 1fr 1fr; gap: 36px; }
  .gaveta-cols    { grid-template-columns: 1fr; gap: 24px; }
}

@media (max-width: 768px) {
  .areas-grid     { grid-template-columns: 1fr; }
  .equipe-grid    { grid-template-columns: 1fr; }
  .footer-grid    { grid-template-columns: 1fr; gap: 28px; padding: 40px 0; }
  .footer-bottom-inner { flex-direction: column; text-align: center; }
  .form-linha     { grid-template-columns: 1fr; }
  .numeros-grid   { grid-template-columns: repeat(2,1fr); }
  .gaveta         { padding: 40px 28px; width: 90vw; }
  .slider-prev    { left: 12px; }
  .slider-next    { right: 12px; }
  .cookie-banner  { flex-direction: column; align-items: flex-start; }
  .processo-lista { padding: 0; }
  .wa-form        { width: calc(100vw - 48px); }
}
```

---

## ARQUIVO 3 — js/main.js

```javascript
'use strict';

/* ── GAVETA LATERAL ──────────────────────── */
(function initGaveta() {
  const btn     = document.getElementById('menuBtn');
  const gaveta  = document.getElementById('gaveta');
  const overlay = document.getElementById('gavetaOverlay');
  const close   = document.getElementById('gavetaClose');
  if (!btn || !gaveta) return;

  function abrir() {
    gaveta.classList.add('aberta');
    overlay.classList.add('visivel');
    document.body.style.overflow = 'hidden';
  }

  function fechar() {
    gaveta.classList.remove('aberta');
    overlay.classList.remove('visivel');
    document.body.style.overflow = '';
  }

  btn.addEventListener('click', abrir);
  close.addEventListener('click', fechar);
  overlay.addEventListener('click', fechar);

  // Fechar ao clicar em link interno
  gaveta.querySelectorAll('a[href^="#"]').forEach(a =>
    a.addEventListener('click', fechar)
  );
})();

/* ── NAVBAR SOLID AO SCROLLAR ────────────── */
(function initNavbar() {
  const nav = document.getElementById('navbar');
  if (!nav) return;
  const update = () => nav.classList.toggle('solid', window.scrollY > 80);
  window.addEventListener('scroll', update, { passive: true });
  update();
})();

/* ── SMOOTH SCROLL ───────────────────────── */
(function initSmooth() {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const el = document.querySelector(a.getAttribute('href'));
      if (!el) return;
      e.preventDefault();
      window.scrollTo({
        top: el.getBoundingClientRect().top + window.scrollY - 72,
        behavior: 'smooth'
      });
    });
  });
})();

/* ── HERO SLIDER ─────────────────────────── */
(function initSlider() {
  const track  = document.getElementById('sliderTrack');
  const dots   = document.querySelectorAll('.dot');
  const btnPrev = document.getElementById('sliderPrev');
  const btnNext = document.getElementById('sliderNext');
  if (!track) return;

  const total = track.children.length;
  let current = 0;
  let timer;

  function goTo(n) {
    current = (n + total) % total;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('dot--active', i === current));
  }

  function autoplay() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), 5000);
  }

  btnPrev.addEventListener('click', () => { goTo(current - 1); autoplay(); });
  btnNext.addEventListener('click', () => { goTo(current + 1); autoplay(); });

  dots.forEach((d, i) => d.addEventListener('click', () => { goTo(i); autoplay(); }));

  // Swipe touch
  let startX = 0;
  track.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
  track.addEventListener('touchend', e => {
    const diff = startX - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) { goTo(diff > 0 ? current + 1 : current - 1); autoplay(); }
  });

  autoplay();
})();

/* ── REVEAL ON SCROLL ────────────────────── */
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

/* ── CONTADORES ──────────────────────────── */
(function initCounters() {
  const counters = document.querySelectorAll('.counter');
  if (!counters.length) return;
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (!e.isIntersecting) return;
      const el = e.target, target = +el.dataset.target;
      const dur = target > 1000 ? 2200 : 1600;
      const t0  = performance.now();
      const tick = now => {
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

/* ── FAQ ─────────────────────────────────── */
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

/* ── WHATSAPP MINI FORM ──────────────────── */
(function initWAForm() {
  const waBtn       = document.getElementById('waBtn');
  const waForm      = document.getElementById('waForm');
  const waFormClose = document.getElementById('waFormClose');
  const waEnviar    = document.getElementById('waEnviar');
  if (!waBtn || !waForm) return;

  // Mostrar badge após 3s
  setTimeout(() => {
    const badge = waBtn.querySelector('.wa-badge');
    if (badge) badge.style.display = 'flex';
  }, 3000);

  waBtn.addEventListener('click', () => {
    waForm.classList.toggle('aberto');
    // Esconder badge ao abrir
    const badge = waBtn.querySelector('.wa-badge');
    if (badge) badge.style.display = 'none';
  });

  waFormClose.addEventListener('click', e => {
    e.stopPropagation();
    waForm.classList.remove('aberto');
  });

  waEnviar.addEventListener('click', () => {
    const nome     = document.getElementById('waNome').value.trim();
    const telefone = document.getElementById('waTelefone').value.trim();
    const assunto  = document.getElementById('waAssunto').value;

    if (!nome || !telefone) {
      alert('Por favor, preencha seu nome e telefone.');
      return;
    }

    const msg = encodeURIComponent(
      `Olá! Meu nome é ${nome} (${telefone}). ` +
      (assunto ? `Preciso de ajuda com: ${assunto}.` : 'Gostaria de mais informações.')
    );

    window.open(`https://wa.me/554533265151?text=${msg}`, '_blank', 'noopener');
    waForm.classList.remove('aberto');
  });
})();

/* ── COOKIE BANNER ───────────────────────── */
(function initCookies() {
  const banner  = document.getElementById('cookieBanner');
  const aceitar = document.getElementById('cookieAceitar');
  const rejeitar = document.getElementById('cookieRejeitar');
  if (!banner) return;

  if (!localStorage.getItem('gerci_cookies')) {
    setTimeout(() => banner.classList.add('visivel'), 1500);
  }

  function fechar(valor) {
    localStorage.setItem('gerci_cookies', valor);
    banner.classList.remove('visivel');
  }

  aceitar.addEventListener('click',  () => fechar('aceito'));
  rejeitar.addEventListener('click', () => fechar('rejeitado'));
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
  header('Location: index.php?enviado=erro'); exit;
}

$assunto = "Contato pelo site: $nome";
$corpo   = "Nome:      $nome\nTelefone:  $telefone\nE-mail:    $email\nÁrea:      $area\n\nMensagem:\n$mensagem";
$headers = "From: site@gerciliberoadvogados.com\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8\r\n";

mail($destinatario, $assunto, $corpo, $headers);
header("Location: index.php?enviado=ok"); exit;
```

---

## TESTAR APÓS CRIAR

- [ ] http://localhost/gerci/Site/
- [ ] Botão hamburger abre gaveta lateral deslizando da direita
- [ ] Overlay escurece o fundo ao abrir a gaveta; clicar no overlay fecha
- [ ] Navbar fica transparente no topo, sólida ao scrollar
- [ ] Slider autoplay passa sozinho a cada 5s; setas e dots funcionam
- [ ] Swipe no mobile muda slide
- [ ] Seções alternam escuro ↔ branco conforme layout
- [ ] Cards de áreas revelam descrição no hover
- [ ] Contadores animam ao entrar na viewport
- [ ] FAQ accordion abre e fecha
- [ ] Botão WhatsApp abre mini-formulário; envio monta mensagem e abre WA
- [ ] Cookie banner aparece após 1.5s (apenas em aba anônima ou sem localStorage)
- [ ] Mobile 375px: menu, slider, contato todos funcionando

---

## PENDÊNCIAS PÓS-TESTE

- [ ] Foto hero 1/2/3: `images/hero/hero1.jpg` etc — adicionar `background-image` inline nos `.slide--N`
- [ ] Foto escritório: `images/sobre/escritorio.jpg` — descomentar `<img>` no Sobre
- [ ] Fotos equipe: `images/equipe/gerci.jpg` e `images/equipe/leonardo.jpg`
- [ ] Para produção: PHPMailer + SMTP Google Workspace

---

## NOTAS GERAIS

```
Paleta:
--preto:    #1C1A17   (fundo hero, gaveta, footer)
--marrom:   #3D2B1F   (gradiente hero, hover cards)
--ouro:     #C9A55A   (detalhe, ícones, bordas ativas)
--escuro-sec: #1E1B17 (seções escuras alternadas)
--cinza-bg: #F5F4F2   (fundo seções brancas e formulários)

Fontes:
--fh: Cormorant Garamond (headings serifa)
--fb: Raleway (corpo)

Slider: autoplay 5s + setas + swipe touch
WhatsApp: 554533265151
E-mail destino: liberoadv.recepcao@hotmail.com
URL de teste: http://localhost/gerci/Site/
font-smoothing: SEMPRE auto, NUNCA antialiased
NÃO alterar contato-envia.php após criado
```
