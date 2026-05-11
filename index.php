<?php $enviado = isset($_GET['enviado']) ? $_GET['enviado'] : ''; ?>
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

<!-- NAVBAR -->
<nav id="navbar">
  <div class="nav-inner">
    <a href="#" class="nav-logo">
      <img src="images/logo/LOGO_.png" alt="Gérci Libero Advogados" class="nav-logo-img">
      <div class="nav-logo-texto">
        <span class="logo-nome">Gérci Libero</span>
        <span class="logo-sub">Advogados Associados</span>
      </div>
    </a>
    <button class="menu-btn" id="menuBtn" aria-label="Abrir menu">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>
  </div>
</nav>

<!-- GAVETA LATERAL -->
<div class="overlay" id="overlay"></div>
<aside class="gaveta" id="gaveta">
  <button class="gaveta-fechar" id="gavetaFechar" aria-label="Fechar">
    <i class="fa-solid fa-xmark"></i>
  </button>
  <div class="gaveta-logo">
    <img src="images/logo/LOGO_.png" alt="Gérci Libero">
    <div><span>Gérci Libero</span><small>Advogados Associados</small></div>
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
  <div class="gaveta-rodape">
    <p><i class="fa-solid fa-location-dot"></i> Cascavel / PR</p>
    <p><i class="fa-solid fa-phone"></i> (45) 3326-5151</p>
    <p><i class="fa-solid fa-clock"></i> Seg–Sex · 08h–18h</p>
  </div>
</aside>

<!-- HERO SLIDER -->
<section id="hero">
  <div class="slider-track" id="sliderTrack">

    <!-- SLIDE 1 — Martelo (hero1.jpg) -->
    <div class="slide" style="background-image:url('images/hero/hero1.jpg');background-size:cover;background-position:center;">
      <div class="slide-overlay slide-overlay--foto"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Tradição · Cascavel/PR · Desde 1988</span>
        <h1>Mais de 36 anos<br><em>defendendo seus direitos.</em></h1>
        <a href="#sobre" class="slide-btn"><span>Conheça o escritório</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <!-- SLIDE 2 — Biblioteca jurídica (hero2.jpg) -->
    <div class="slide" style="background-image:url('images/hero/hero2.jpg');background-size:cover;background-position:center;">
      <div class="slide-overlay slide-overlay--foto"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Especialização Técnica</span>
        <h1>Trabalhista e Previdenciário.<br><em>Com quem realmente entende.</em></h1>
        <a href="#areas" class="slide-btn"><span>Nossas especialidades</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <!-- SLIDE 3 — Themis / Deusa da Justiça (hero3.jpg) -->
    <div class="slide" style="background-image:url('images/hero/hero3.jpg');background-size:cover;background-position:center top;">
      <div class="slide-overlay slide-overlay--foto"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Justiça · Ética · Resultado</span>
        <h1>Atendemos Cascavel/PR<br><em>e todo o Brasil.</em></h1>
        <a href="#contato" class="slide-btn"><span>Fale conosco agora</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

  </div>
  <button class="slider-prev" id="sliderPrev" aria-label="Anterior"><i class="fa-solid fa-chevron-left"></i></button>
  <button class="slider-next" id="sliderNext" aria-label="Próximo"><i class="fa-solid fa-chevron-right"></i></button>
  <div class="slider-dots" id="sliderDots">
    <button class="dot dot--ativo" data-slide="0"></button>
    <button class="dot" data-slide="1"></button>
    <button class="dot" data-slide="2"></button>
  </div>
</section>

<!-- NÚMEROS -->
<section class="sec-escura numeros-section">
  <div class="container numeros-inner">
    <div class="numeros-texto gsap-reveal">
      <span class="eyebrow eyebrow--ouro">Resultados</span>
      <h2 class="titulo titulo--claro">Números que<br>comprovam nossa<br><em>trajetória.</em></h2>
      <p class="numeros-desc">Três décadas de atuação em Cascavel e em todo o Brasil, com resultados concretos e clientes satisfeitos.</p>
    </div>
    <div class="numeros-grid numeros-grid--2col">
      <div class="numero-card gsap-reveal" data-delay="0.08">
        <div class="numero-val"><span class="gsap-counter" data-target="36">0</span></div>
        <div class="numero-linha"></div>
        <div class="numero-label">anos de experiência</div>
      </div>
      <div class="numero-card gsap-reveal" data-delay="0.16">
        <div class="numero-val">+<span class="gsap-counter" data-target="10000">0</span></div>
        <div class="numero-linha"></div>
        <div class="numero-label">casos atendidos</div>
      </div>
    </div>
  </div>
</section>

<!-- SOBRE -->
<section id="sobre" class="sec-clara">
  <div class="container sobre-grid">
    <div class="sobre-img gsap-reveal-left">
      <img src="images/sobre/escritorio.png" alt="Escritório Gérci Libero Advogados — Cascavel/PR" class="sobre-foto">
      <div class="sobre-badge"><strong>36</strong><span>anos em<br>Cascavel/PR</span></div>
    </div>
    <div class="sobre-texto gsap-reveal-right">
      <span class="eyebrow">O Escritório</span>
      <h2 class="titulo">Fundado na convicção de que<br>todo trabalhador merece<br><em>defesa técnica de qualidade.</em></h2>
      <p class="sobre-p">Desde 1988, o escritório Gérci Libero da Silva atua na defesa dos direitos de trabalhadores e cidadãos em Cascavel e em todo o território nacional. Uma trajetória construída caso a caso, com rigor técnico e compromisso humano.</p>
      <p class="sobre-p">Com a chegada do Dr. Leonardo Libero, especializando o escritório também em Direito Previdenciário, ampliamos nossa capacidade de atender as demandas mais complexas.</p>
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

<!-- ÁREAS -->
<section id="areas" class="sec-escura">
  <div class="container">
    <div class="sec-header gsap-reveal">
      <span class="eyebrow eyebrow--ouro">Especialidades</span>
      <h2 class="titulo titulo--claro">Áreas de Atuação</h2>
      <p class="sec-sub sec-sub--clara">Passe o cursor sobre cada área para ver mais detalhes.</p>
    </div>
    <div class="areas-grid">
      <div class="area-card gsap-reveal" data-delay="0.04">
        <div class="area-front"><div class="area-ico area-ico--azul"><i class="fa-solid fa-briefcase"></i></div><h3>Direito do Trabalho</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Verbas rescisórias, FGTS, assédio moral e sexual, reconhecimento de vínculo empregatício, horas extras e demissões irregulares.</p><span class="area-tag">Especialidade Principal</span></div>
      </div>
      <div class="area-card gsap-reveal" data-delay="0.08">
        <div class="area-front"><div class="area-ico area-ico--azul"><i class="fa-solid fa-shield-halved"></i></div><h3>Direito Previdenciário</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Aposentadoria por idade, tempo de contribuição e especial. Revisões, auxílios e recursos contra negativas do INSS.</p><span class="area-tag">Especialidade Principal</span></div>
      </div>
      <div class="area-card gsap-reveal" data-delay="0.12">
        <div class="area-front"><div class="area-ico"><i class="fa-solid fa-calculator"></i></div><h3>Planejamento Previdenciário</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Estudo técnico e matemático individualizado para identificar o momento ideal da aposentadoria com o maior benefício possível.</p></div>
      </div>
      <div class="area-card gsap-reveal" data-delay="0.16">
        <div class="area-front"><div class="area-ico"><i class="fa-solid fa-scale-balanced"></i></div><h3>Direito Civil</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Contratos, responsabilidade civil, indenizações e assessoria em demandas de ordem privada entre pessoas físicas e jurídicas.</p></div>
      </div>
      <div class="area-card gsap-reveal" data-delay="0.20">
        <div class="area-front"><div class="area-ico"><i class="fa-solid fa-house-chimney"></i></div><h3>Direito de Família</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Divórcio, guarda, pensão alimentícia, inventário, testamento e questões patrimoniais entre familiares.</p></div>
      </div>
      <div class="area-card gsap-reveal" data-delay="0.24">
        <div class="area-front"><div class="area-ico"><i class="fa-solid fa-gavel"></i></div><h3>Direito Criminal</h3><div class="area-seta"><i class="fa-solid fa-arrow-right"></i></div></div>
        <div class="area-back"><p>Defesa em processos criminais, habeas corpus, recursos e acompanhamento em todas as fases da persecução penal.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- EQUIPE -->
<section id="equipe" class="sec-clara">
  <div class="container">
    <div class="sec-header gsap-reveal">
      <span class="eyebrow">Nossa Equipe</span>
      <h2 class="titulo">Os advogados<br><em>por trás dos resultados.</em></h2>
      <p class="sec-sub">Tradição e especialização técnica constante a serviço dos nossos clientes.</p>
    </div>
    <div class="equipe-grid">
      <div class="membro gsap-reveal">
        <div class="membro-foto"><img src="images/equipe/gerci.jpg" alt="Dr. Gérci Libero da Silva"></div>
        <div class="membro-info">
          <div class="membro-linha"></div>
          <h3>Dr. Gérci Libero da Silva</h3>
          <span class="membro-cargo">Fundador· OAB/PR 16.784</span>
          <span class="membro-area">Direito do Trabalho</span>
          <p>Mais de 36 anos de experiência na defesa dos direitos dos trabalhadores em Cascavel e região, com atuação em casos de alta complexidade.</p>
        </div>
      </div>
      <div class="membro gsap-reveal" data-delay="0.14">
        <div class="membro-foto"><img src="images/equipe/leonardo.jpg" alt="Dr. Leonardo Libero da Silva"></div>
        <div class="membro-info">
          <div class="membro-linha"></div>
          <h3>Dr. Leonardo Libero da Silva</h3>
          <span class="membro-cargo">Sócio· OAB/PR 103.036</span>
          <span class="membro-area">Direito Previdenciário</span>
          <p>Especialista em Direito Previdenciário com mais de 6 anos de experiência em planejamento estratégico, revisões de benefícios e recursos ao INSS.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMO FUNCIONA -->
<section id="processo" class="sec-escura">
  <div class="container">
    <div class="sec-header gsap-reveal">
      <span class="eyebrow eyebrow--ouro">Transparência</span>
      <h2 class="titulo titulo--claro">Como Funciona</h2>
      <p class="sec-sub sec-sub--clara">Do primeiro contato à decisão final — você acompanha tudo.</p>
    </div>
    <div class="processo-lista">
      <div class="processo-item gsap-reveal" data-delay="0.06">
        <div class="processo-num">01</div>
        <div class="processo-corpo"><h3>Primeiro Contato</h3><p>Atendimento personalizado presencial ou por videoconferência para diagnóstico inicial do caso — sem custo.</p></div>
      </div>
      <div class="processo-sep"></div>
      <div class="processo-item gsap-reveal" data-delay="0.12">
        <div class="processo-num">02</div>
        <div class="processo-corpo"><h3>Análise e Estratégia</h3><p>Análise documental completa e definição da melhor estratégia: pedido administrativo ou judicial conforme o caso.</p></div>
      </div>
      <div class="processo-sep"></div>
      <div class="processo-item gsap-reveal" data-delay="0.18">
        <div class="processo-num">03</div>
        <div class="processo-corpo"><h3>Fase Instrutória</h3><p>Produção de provas, intimação da parte contrária e reforço de todos os argumentos jurídicos perante o magistrado.</p></div>
      </div>
      <div class="processo-sep"></div>
      <div class="processo-item gsap-reveal" data-delay="0.24">
        <div class="processo-num">04</div>
        <div class="processo-corpo"><h3>Decisão e Execução</h3><p>Acompanhamento integral até a decisão final e garantia do cumprimento da sentença — seu direito efetivado.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="sec-clara">
  <div class="container faq-wrap">
    <div class="sec-header gsap-reveal">
      <span class="eyebrow">Dúvidas</span>
      <h2 class="titulo">Perguntas Frequentes</h2>
    </div>
    <div class="faq-lista gsap-reveal" data-delay="0.1">
      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">O escritório atende em todo o Brasil?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Sim. Através da digitalização dos processos judiciais e videoconferências, representamos clientes em qualquer estado com total segurança jurídica.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Para que serve o Planejamento Previdenciário?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>O planejamento identifica a regra de transição mais vantajosa, garantindo o melhor benefício no menor tempo possível e evitando prejuízos financeiros. É um estudo técnico e matemático individualizado.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Tive meu benefício negado pelo INSS. O que fazer?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>A negativa pode ser revertida por recurso administrativo ou ação judicial. Entre em contato para avaliarmos seu caso sem compromisso.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Sofri um acidente e fiquei com sequelas, mas já voltei a trabalhar. Ainda tenho algum direito?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Sim! Se o acidente — de qualquer natureza ou do trabalho — deixou uma sequela permanente que reduza sua capacidade para o trabalho que você exercia, você tem direito ao Auxílio-Acidente. Entre em contato para analisarmos sua situação.</p></div>
      </div>
      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Fui demitido sem justa causa. Quais são meus direitos?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Você tem direito a aviso prévio, saldo de salário, 13º proporcional, férias + 1/3, multa de 40% sobre o FGTS e seguro-desemprego.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Quando ocorre a Rescisão Indireta?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>O descumprimento de obrigações pela empresa — como atraso de salário, assédio, rebaixamento de função, entre outros — permite que você saia recebendo todas as verbas rescisórias, como se fosse uma demissão sem justa causa. É o que chamamos de rescisão indireta.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CONTATO -->
<section id="contato" class="sec-escura">
  <div class="container contato-grid">
    <div class="contato-info gsap-reveal-left">
      <span class="eyebrow eyebrow--ouro">Fale Conosco</span>
      <h2 class="titulo titulo--claro">Agende sua<br>consulta hoje.</h2>
      <p class="contato-aviso"><i class="fa-solid fa-triangle-exclamation"></i> Prazos jurídicos são fatais. Não espere para buscar orientação.</p>
      <div class="contato-dados">
        <a href="https://wa.me/554533265151" target="_blank" rel="noopener" class="dado dado--link">
          <div class="dado-ico dado-ico--verde"><i class="fa-brands fa-whatsapp"></i></div>
          <div><strong>(45) 3326-5151</strong><span>WhatsApp · atendimento imediato</span></div>
        </a>
        <div class="dado">
          <div class="dado-ico"><i class="fa-solid fa-envelope"></i></div>
          <div><strong>gercilibero@gerciliberoeadvogados.com</strong><span>Resposta em até 1 dia útil</span></div>
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
    <div class="contato-form-wrap gsap-reveal-right">
      <?php if ($enviado === 'ok'): ?>
        <div class="form-ok">
          <i class="fa-solid fa-circle-check"></i>
          <h3>Mensagem recebida!</h3>
          <p>Retornaremos em breve. Para atendimento imediato, use o WhatsApp.</p>
          <a href="https://wa.me/554533265151" class="btn btn-ouro" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Abrir WhatsApp</a>
        </div>
      <?php else: ?>
        <form class="contato-form" action="contato-envia.php" method="POST">
          <h3 class="form-titulo">Envie sua mensagem</h3>
          <div class="form-grupo"><label for="nome">Nome completo *</label><input type="text" id="nome" name="nome" placeholder="Seu nome" required></div>
          <div class="form-linha">
            <div class="form-grupo"><label for="telefone">WhatsApp *</label><input type="tel" id="telefone" name="telefone" placeholder="(45) 99999-9999" required></div>
            <div class="form-grupo"><label for="email">E-mail</label><input type="email" id="email" name="email" placeholder="seu@email.com"></div>
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
          <div class="form-grupo"><label for="mensagem">Descreva brevemente seu caso</label><textarea id="mensagem" name="mensagem" rows="4" placeholder="Conte sobre sua situação..."></textarea></div>
          <button type="submit" class="btn btn-ouro btn-full">Enviar Mensagem <i class="fa-solid fa-paper-plane"></i></button>
        </form>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="footer">
  <div class="container footer-grid">
    <div class="footer-brand">
      <img src="images/logo/LOGO_.png" alt="Gérci Libero" class="footer-logo">
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

<!-- WHATSAPP FLOAT -->
<div class="wa-wrap" id="waWrap">
  <div class="wa-form" id="waForm">
    <div class="wa-form-header">
      <div class="wa-avatar"><img src="images/logo/LOGO_.png" alt="Gérci Libero"></div>
      <div><strong>Gérci Libero Advogados</strong><span>Resposta rápida pelo WhatsApp</span></div>
      <button class="wa-fechar" id="waFechar" aria-label="Fechar"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="wa-form-body">
      <p>Preencha os dados para iniciar o atendimento.</p>
      <input type="text" id="waNome" placeholder="Seu nome *">
      <input type="tel" id="waTelefone" placeholder="Seu telefone *">
      <select id="waAssunto">
        <option value="">Assunto...</option>
        <option>Direito do Trabalho</option>
        <option>Direito Previdenciário</option>
        <option>Direito Civil</option>
        <option>Direito de Família</option>
        <option>Direito Criminal</option>
        <option>Outro</option>
      </select>
      <button class="wa-enviar" id="waEnviar"><i class="fa-brands fa-whatsapp"></i> Iniciar Conversa</button>
    </div>
  </div>
  <button class="wa-btn" id="waBtn" aria-label="Abrir WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="wa-badge" id="waBadge">1</span>
  </button>
</div>

<!-- COOKIE BANNER -->
<div class="cookie-banner" id="cookieBanner">
  <div class="cookie-texto">Utilizamos cookies para melhorar sua experiência. Ao continuar navegando, você concorda com nossa <a href="#" class="cookie-link">Política de Privacidade</a>.</div>
  <div class="cookie-acoes">
    <button class="cookie-btn cookie-btn--rec" id="cookieRejeitar">Recusar</button>
    <button class="cookie-btn cookie-btn--ace" id="cookieAceitar">Aceitar cookies</button>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" defer></script>
<script src="js/main.js" defer></script>
</body>
</html>
