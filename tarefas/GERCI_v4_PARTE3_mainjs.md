# TAREFA — Gérci v4 · Parte 3 de 3 · main.js
# Projeto: Gérci Libero da Silva e Advogados Associados
# Data: 11/05/2026
# Status: [ ] Pendente

---

## CONTEXTO
Cria o main.js completo com GSAP para slider, reveals e contadores.
GSAP é carregado via CDN com `defer` no index.php — main.js roda dentro de
`window.addEventListener('load')` para garantir que GSAP já está disponível.

## ARQUIVO DESTA PARTE

| Arquivo | Caminho                               | Ação  |
|---------|---------------------------------------|-------|
| main.js | D:\xamp\htdocs\gerci\Site\js\main.js  | Criar |

## DEPENDÊNCIAS
GSAP já declarado no index.php antes deste script:
  <script src="gsap.min.js" defer></script>
  <script src="ScrollTrigger.min.js" defer></script>
  <script src="js/main.js" defer></script>

---

## CRIAR: js/main.js

```javascript
'use strict';

window.addEventListener('load', function () {

  /* ══ REGISTRAR SCROLLTRIGGER ════════════ */
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);
  }

  /* ══ GAVETA LATERAL ══════════════════════ */
  (function initGaveta() {
    const btn    = document.getElementById('menuBtn');
    const gaveta = document.getElementById('gaveta');
    const over   = document.getElementById('overlay');
    const fechar = document.getElementById('gavetaFechar');
    if (!btn || !gaveta) return;

    function abrir() {
      gaveta.classList.add('aberta');
      over.classList.add('vis');
      btn.classList.add('ativo');
      document.body.style.overflow = 'hidden';
    }

    function fecharGaveta() {
      gaveta.classList.remove('aberta');
      over.classList.remove('vis');
      btn.classList.remove('ativo');
      document.body.style.overflow = '';
    }

    btn.addEventListener('click', abrir);
    fechar.addEventListener('click', fecharGaveta);
    over.addEventListener('click', fecharGaveta);
    gaveta.querySelectorAll('a[href^="#"]').forEach(a =>
      a.addEventListener('click', fecharGaveta)
    );
  })();

  /* ══ NAVBAR SOLID AO SCROLLAR ════════════ */
  (function initNavbar() {
    const nav = document.getElementById('navbar');
    if (!nav) return;
    const upd = () => nav.classList.toggle('solid', window.scrollY > 80);
    window.addEventListener('scroll', upd, { passive: true });
    upd();
  })();

  /* ══ SMOOTH SCROLL ════════════════════════ */
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

  /* ══ HERO SLIDER COM GSAP ════════════════ */
  (function initSlider() {
    const track   = document.getElementById('sliderTrack');
    const dots    = document.querySelectorAll('.dot');
    const btnPrev = document.getElementById('sliderPrev');
    const btnNext = document.getElementById('sliderNext');
    if (!track || typeof gsap === 'undefined') return;

    const slides = track.querySelectorAll('.slide');
    const total  = slides.length;
    let current  = 0;
    let timer;

    /* Animar entrada do conteúdo do slide */
    function animarConteudo(idx) {
      const c = slides[idx].querySelector('.slide-content');
      if (!c) return;
      gsap.fromTo(c,
        { opacity: 0, y: 36 },
        { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', delay: 0.15 }
      );
    }

    function goTo(n) {
      /* Esconder conteúdo atual */
      const cAtual = slides[current].querySelector('.slide-content');
      if (cAtual) {
        gsap.to(cAtual, { opacity: 0, y: -16, duration: 0.3, ease: 'power2.in' });
      }

      current = (n + total) % total;

      /* Mover o track com GSAP — easing premium */
      gsap.to(track, {
        x: `-${current * 100}%`,
        duration: 0.85,
        ease: 'power3.inOut',
        onComplete: () => animarConteudo(current)
      });

      /* Atualizar dots */
      dots.forEach((d, i) => d.classList.toggle('dot--ativo', i === current));
    }

    function autoplay() {
      clearInterval(timer);
      timer = setInterval(() => goTo(current + 1), 5000);
    }

    btnPrev.addEventListener('click', () => { goTo(current - 1); autoplay(); });
    btnNext.addEventListener('click', () => { goTo(current + 1); autoplay(); });
    dots.forEach((d, i) => d.addEventListener('click', () => { goTo(i); autoplay(); }));

    /* Swipe touch */
    let startX = 0;
    track.addEventListener('touchstart', e => {
      startX = e.touches[0].clientX;
    }, { passive: true });
    track.addEventListener('touchend', e => {
      const diff = startX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) {
        goTo(diff > 0 ? current + 1 : current - 1);
        autoplay();
      }
    });

    /* Iniciar */
    animarConteudo(0);
    autoplay();
  })();

  /* ══ GSAP REVEAL ON SCROLL ════════════════ */
  (function initReveal() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    /* Reveal para baixo (padrão) */
    document.querySelectorAll('.gsap-reveal').forEach(el => {
      const delay = parseFloat(el.dataset.delay || 0);
      gsap.to(el, {
        opacity: 1,
        y: 0,
        duration: 0.75,
        ease: 'power3.out',
        delay: delay,
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          once: true
        }
      });
    });

    /* Reveal da esquerda */
    document.querySelectorAll('.gsap-reveal-left').forEach(el => {
      const delay = parseFloat(el.dataset.delay || 0);
      gsap.to(el, {
        opacity: 1,
        x: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: delay,
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          once: true
        }
      });
    });

    /* Reveal da direita */
    document.querySelectorAll('.gsap-reveal-right').forEach(el => {
      const delay = parseFloat(el.dataset.delay || 0);
      gsap.to(el, {
        opacity: 1,
        x: 0,
        duration: 0.8,
        ease: 'power3.out',
        delay: delay,
        scrollTrigger: {
          trigger: el,
          start: 'top 88%',
          once: true
        }
      });
    });
  })();

  /* ══ GSAP CONTADORES ══════════════════════ */
  (function initContadores() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    document.querySelectorAll('.gsap-counter').forEach(el => {
      const target = +el.dataset.target;
      const obj    = { val: 0 };

      ScrollTrigger.create({
        trigger: el,
        start: 'top 85%',
        once: true,
        onEnter: () => {
          gsap.to(obj, {
            val: target,
            duration: target > 1000 ? 2.4 : 1.8,
            ease: 'power2.out',
            onUpdate: () => {
              el.textContent = Math.round(obj.val).toLocaleString('pt-BR');
            },
            onComplete: () => {
              el.textContent = target.toLocaleString('pt-BR');
            }
          });
        }
      });
    });
  })();

  /* ══ FAQ ACCORDION ════════════════════════ */
  (function initFAQ() {
    document.querySelectorAll('.faq-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const resp   = btn.nextElementSibling;
        const aberto = btn.getAttribute('aria-expanded') === 'true';

        /* Fechar todos */
        document.querySelectorAll('.faq-btn').forEach(b => {
          b.setAttribute('aria-expanded', 'false');
          b.nextElementSibling.classList.remove('aberta');
        });

        /* Abrir o clicado se estava fechado */
        if (!aberto) {
          btn.setAttribute('aria-expanded', 'true');
          resp.classList.add('aberta');
        }
      });
    });
  })();

  /* ══ WHATSAPP MINI FORM ══════════════════ */
  (function initWA() {
    const waBtn    = document.getElementById('waBtn');
    const waForm   = document.getElementById('waForm');
    const waFechar = document.getElementById('waFechar');
    const waEnviar = document.getElementById('waEnviar');
    const waBadge  = document.getElementById('waBadge');
    if (!waBtn || !waForm) return;

    waBtn.addEventListener('click', () => {
      waForm.classList.toggle('aberto');
      if (waBadge) waBadge.style.display = 'none';
    });

    waFechar.addEventListener('click', e => {
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
        'Olá! Meu nome é ' + nome + ' (' + telefone + ').' +
        (assunto ? ' Preciso de ajuda com: ' + assunto + '.' : ' Gostaria de mais informações.')
      );

      window.open('https://wa.me/554533265151?text=' + msg, '_blank', 'noopener');
      waForm.classList.remove('aberto');
    });
  })();

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

}); /* fim window.load */
```

---

## TESTAR APÓS EXECUTAR AS 3 PARTES

- [ ] http://localhost/gerci/Site/
- [ ] Slide 1: foto do Gérci visível com overlay escuro, texto à esquerda
- [ ] Slides 2 e 3: gradiente preto→marrom (sem foto)
- [ ] Slider autoplay 5s — transição suave com easing GSAP
- [ ] Conteúdo de cada slide anima separado (fade+slide) ao trocar
- [ ] Seções revelam com GSAP ao scrollar
- [ ] Contadores animam com desaceleração (power2.out)
- [ ] Azul em: check-items, FAQ hover, area-tag, membro-linha, ícones contato
- [ ] Dourado em: logo, linha KPI, itálicos, CTA, slide-btn
- [ ] Foto do Gérci + foto do Leonardo na seção Equipe com zoom no hover
- [ ] Hamburger anima para X ao abrir a gaveta
- [ ] Cookie banner aparece após 1.5s (aba anônima / sem localStorage)
- [ ] Mini-form WA: monta mensagem e abre WhatsApp com texto preenchido
- [ ] Mobile 375px: swipe no slider, gaveta, formulário — tudo funcionando

## ESTRUTURA FINAL DE PASTAS

```
D:\xamp\htdocs\gerci\Site\
├── index.php
├── contato-envia.php     ← não alterar
├── css\style.css
├── js\main.js
└── images\
    ├── logo\Logo_Antiga.png
    ├── equipe\gerci.jpg       ← GERCI.png renomeado
    ├── equipe\leonardo.jpg    ← LEONARDO.jpeg renomeado
    ├── hero\                  ← reservado
    └── sobre\                 ← reservado
```

## PENDÊNCIAS PÓS-TESTE

- [ ] Foto do escritório para o Sobre: images/sobre/escritorio.jpg
  Substituir div.sobre-placeholder por:
  <img src="images/sobre/escritorio.jpg" class="sobre-foto" alt="Escritório">
- [ ] Para produção: PHPMailer + SMTP Google Workspace
- [ ] Apontar domínio gerciliberoadvogados.com para hospedagem definitiva
