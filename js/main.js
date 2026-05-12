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

    function animarConteudo(idx) {
      const c = slides[idx].querySelector('.slide-content');
      if (!c) return;
      gsap.fromTo(c,
        { opacity: 0, y: 36 },
        { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out', delay: 0.15 }
      );
    }

    function goTo(n) {
      const cAtual = slides[current].querySelector('.slide-content');
      if (cAtual) {
        gsap.to(cAtual, { opacity: 0, y: -16, duration: 0.3, ease: 'power2.in' });
      }

      current = (n + total) % total;

      gsap.to(track, {
        x: `-${current * 100}%`,
        duration: 0.85,
        ease: 'power3.inOut',
        onComplete: () => animarConteudo(current)
      });

      dots.forEach((d, i) => d.classList.toggle('dot--ativo', i === current));
    }

    function autoplay() {
      clearInterval(timer);
      timer = setInterval(() => goTo(current + 1), 5000);
    }

    btnPrev.addEventListener('click', () => { goTo(current - 1); autoplay(); });
    btnNext.addEventListener('click', () => { goTo(current + 1); autoplay(); });
    dots.forEach((d, i) => d.addEventListener('click', () => { goTo(i); autoplay(); }));

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

    animarConteudo(0);
    autoplay();
  })();

  /* ══ GSAP REVEAL ON SCROLL ════════════════ */
  (function initReveal() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

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

        document.querySelectorAll('.faq-btn').forEach(b => {
          b.setAttribute('aria-expanded', 'false');
          b.nextElementSibling.classList.remove('aberta');
        });

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
        'Ola! Meu nome e ' + nome + ' (' + telefone + ').' +
        (assunto ? ' Preciso de ajuda com: ' + assunto + '.' : ' Gostaria de mais informacoes.')
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
      btnEnviar.disabled   = true;
      btnEnviar.innerHTML  = '<span class="btn-spinner"></span>Enviando...';

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
          /* Fade out do form, fade in do sucesso */
          form.style.transition = 'opacity .3s ease';
          form.style.opacity    = '0';
          setTimeout(() => {
            form.style.display   = 'none';
            formOk.style.display = 'block';
            formOk.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }, 300);
        } else {
          alert('Ocorreu um erro ao enviar. Por favor, tente pelo WhatsApp.');
          btnEnviar.disabled  = false;
          btnEnviar.innerHTML = 'Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>';
        }
      })
      .catch(() => {
        alert('Erro de conexão. Por favor, tente pelo WhatsApp.');
        btnEnviar.disabled  = false;
        btnEnviar.innerHTML = 'Enviar Mensagem <i class="fa-solid fa-paper-plane"></i>';
      });
    });
  })();

}); /* fim window.load */
