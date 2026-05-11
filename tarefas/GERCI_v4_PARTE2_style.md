# TAREFA — Gérci v4 · Parte 2 de 3 · style.css
# Projeto: Gérci Libero da Silva e Advogados Associados
# Data: 11/05/2026
# Status: [ ] Pendente

---

## CONTEXTO
Cria o arquivo style.css completo para o site do Gérci v4.
Paleta: Preto #0F0F10 · Azul #1A4B8C · Dourado #C9A55A
Azul = sotaque técnico/jurídico | Dourado = prestígio/tradição

## ARQUIVO DESTA PARTE

| Arquivo   | Caminho                                 | Ação  |
|-----------|-----------------------------------------|-------|
| style.css | D:\xamp\htdocs\gerci\Site\css\style.css | Criar |

---

## CRIAR: css/style.css

```css
/* ══ RESET & VARIÁVEIS ══════════════════ */
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

:root {
  --preto:       #0F0F10;
  --preto-soft:  #1A1A1C;
  --azul:        #1A4B8C;
  --azul-esc:    #133872;
  --azul-claro:  #2660B0;
  --ouro:        #C9A55A;
  --ouro-esc:    #A8863E;
  --branco:      #FFFFFF;
  --cinza-bg:    #F5F4F2;
  --cinza-borda: #E2DDD8;
  --cinza-txt:   #5A5650;
  --cinza-lt:    #9A948E;
  --verde-wa:    #25D366;
  --fh: 'Cormorant Garamond', Georgia, serif;
  --fb: 'Raleway', system-ui, sans-serif;
  --container: 1180px;
  --nav-h: 72px;
  --radius: 10px;
  --sombra-sm: 0 2px 12px rgba(15,15,16,.07);
  --sombra-md: 0 8px 36px rgba(15,15,16,.12);
  --sombra-lg: 0 20px 64px rgba(15,15,16,.2);
}

html { scroll-behavior: smooth; }
body { font-family: var(--fb); font-size: 16px; color: var(--cinza-txt);
       background: var(--branco); -webkit-font-smoothing: auto; overflow-x: hidden; }
a, a:hover, a:visited, a:active { text-decoration: none; color: inherit; }
img  { max-width: 100%; display: block; }
ul   { list-style: none; }

.container { width: 100%; max-width: var(--container); margin: 0 auto; padding: 0 28px; }
.sec-escura { background: var(--preto-soft); }
.sec-clara  { background: var(--branco); }

/* ══ TIPOGRAFIA ══════════════════════════ */
.eyebrow { display: inline-block; font-family: var(--fb); font-size: 10.5px;
           font-weight: 700; letter-spacing: .18em; text-transform: uppercase;
           color: var(--azul); margin-bottom: 12px; }
.eyebrow--ouro { color: var(--ouro); }

.titulo { font-family: var(--fh); font-size: clamp(2rem,4vw,3rem);
          font-weight: 600; color: var(--preto); line-height: 1.2; margin-bottom: 16px; }
.titulo em { font-style: italic; color: var(--ouro-esc); }
.titulo--claro { color: #fff; }
.titulo--claro em { color: rgba(201,165,90,.85); }

.sec-sub { font-size: 1rem; color: var(--cinza-lt); line-height: 1.75; max-width: 520px; }
.sec-sub--clara { color: rgba(255,255,255,.45); }
.sec-header { text-align: center; margin-bottom: 60px; }
.sec-header .sec-sub { margin: 0 auto; }

/* ══ BOTÕES ══════════════════════════════ */
.btn { display: inline-flex; align-items: center; gap: 9px; font-family: var(--fb);
       font-size: 13.5px; font-weight: 600; letter-spacing: .04em; padding: 14px 30px;
       border-radius: 4px; border: 2px solid transparent; cursor: pointer;
       transition: all .25s ease; white-space: nowrap; }
.btn-ouro  { background: var(--ouro); color: var(--preto); border-color: var(--ouro); }
.btn-ouro:hover { background: var(--ouro-esc); border-color: var(--ouro-esc);
                  transform: translateY(-2px); box-shadow: 0 6px 20px rgba(201,165,90,.35); }
.btn-escuro { background: var(--preto); color: #fff; border-color: var(--preto); }
.btn-escuro:hover { background: var(--azul); border-color: var(--azul); transform: translateY(-2px); }
.btn-full { width: 100%; justify-content: center; }

/* ══ NAVBAR ══════════════════════════════ */
#navbar { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; height: var(--nav-h);
          background: linear-gradient(to bottom, rgba(15,15,16,.9) 0%, transparent 100%);
          transition: background .4s ease, box-shadow .4s ease; }
#navbar.solid { background: var(--preto); box-shadow: 0 4px 24px rgba(0,0,0,.5); }

.nav-inner { max-width: var(--container); margin: 0 auto; padding: 0 28px;
             display: flex; align-items: center; justify-content: space-between; height: 100%; }
.nav-logo { display: flex; align-items: center; gap: 12px; }
.nav-logo-img { height: 40px; width: auto; }
.nav-logo-texto { display: flex; flex-direction: column; line-height: 1.15;
                  border-left: 1px solid rgba(255,255,255,.15); padding-left: 12px; }
.logo-nome { font-family: var(--fh); font-size: 1.05rem; font-weight: 600; color: #fff; }
.logo-sub  { font-size: 9px; font-weight: 500; color: rgba(255,255,255,.45);
             letter-spacing: .08em; text-transform: uppercase; }

.menu-btn { display: flex; flex-direction: column; gap: 5px;
            background: none; border: none; cursor: pointer; padding: 10px; }
.bar { display: block; width: 28px; height: 2px; background: rgba(255,255,255,.8);
       border-radius: 2px; transition: background .25s, transform .3s, opacity .3s; }
.menu-btn:hover .bar { background: var(--ouro); }
.menu-btn.ativo .bar:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.menu-btn.ativo .bar:nth-child(2) { opacity: 0; }
.menu-btn.ativo .bar:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* ══ GAVETA ══════════════════════════════ */
.overlay { position: fixed; inset: 0; z-index: 1100; background: rgba(0,0,0,.65);
           opacity: 0; pointer-events: none; transition: opacity .35s ease; }
.overlay.vis { opacity: 1; pointer-events: all; }

.gaveta { position: fixed; top: 0; right: 0; bottom: 0; z-index: 1200;
          width: min(520px,90vw); background: var(--preto);
          transform: translateX(100%); transition: transform .42s cubic-bezier(.16,1,.3,1);
          overflow-y: auto; padding: 40px 48px; display: flex; flex-direction: column; }
.gaveta.aberta { transform: translateX(0); }

.gaveta-fechar { position: absolute; top: 24px; right: 28px; background: none; border: none;
                 cursor: pointer; font-size: 20px; color: rgba(255,255,255,.4); transition: color .2s; }
.gaveta-fechar:hover { color: var(--ouro); }

.gaveta-logo { display: flex; align-items: center; gap: 16px; margin-bottom: 48px;
               padding-bottom: 32px; border-bottom: 1px solid rgba(255,255,255,.07); }
.gaveta-logo img { height: 44px; width: auto; }
.gaveta-logo span { font-family: var(--fh); font-size: 1.1rem; font-weight: 600; color: #fff; display: block; }
.gaveta-logo small { font-size: 10px; color: rgba(255,255,255,.35); letter-spacing: .08em;
                     text-transform: uppercase; font-family: var(--fb); display: block; margin-top: 3px; }
.gaveta-cols { display: grid; grid-template-columns: repeat(3,1fr); gap: 28px; flex: 1; }
.gaveta-col h4 { font-family: var(--fb); font-size: 10px; font-weight: 700; letter-spacing: .14em;
                 text-transform: uppercase; color: rgba(255,255,255,.28); margin-bottom: 16px; }
.gaveta-col a { display: block; font-size: 14px; font-weight: 500; color: rgba(255,255,255,.6);
                padding: 7px 0; border-bottom: 1px solid rgba(255,255,255,.05);
                transition: color .2s, padding-left .2s; }
.gaveta-col a:hover { color: var(--ouro); padding-left: 6px; }
.gaveta-rodape { margin-top: 40px; padding-top: 28px; border-top: 1px solid rgba(255,255,255,.07); }
.gaveta-rodape p { font-size: 13px; color: rgba(255,255,255,.38); margin-bottom: 8px;
                   display: flex; align-items: center; gap: 8px; }
.gaveta-rodape p i { color: var(--azul); }

/* ══ HERO SLIDER ═════════════════════════ */
#hero { position: relative; height: 100vh; min-height: 600px; overflow: hidden; }
.slider-track { display: flex; height: 100%; }
.slide { min-width: 100%; height: 100%; position: relative; display: flex; align-items: center; }
.slide--grad2 { background: linear-gradient(135deg, #1a1208 0%, var(--preto) 100%); }
.slide--grad3 { background: linear-gradient(135deg, var(--preto) 0%, #2a1a0e 100%); }
.slide-overlay--foto { position: absolute; inset: 0;
  background: linear-gradient(to right, rgba(15,15,16,.85) 40%, rgba(15,15,16,.3) 100%); }
.slide-overlay { position: absolute; inset: 0; background: rgba(15,15,16,.55); }
.slide-content { position: relative; z-index: 1; max-width: var(--container);
                 margin: 0 auto; padding: 0 28px; padding-top: var(--nav-h); opacity: 0; }
.slide-chapeu { display: block; font-family: var(--fb); font-size: 11px; font-weight: 700;
                letter-spacing: .2em; text-transform: uppercase; color: var(--azul-claro); margin-bottom: 20px; }
.slide-content h1 { font-family: var(--fh); font-size: clamp(2.4rem,5.5vw,4.2rem);
                    font-weight: 600; color: #fff; line-height: 1.15; margin-bottom: 36px; }
.slide-content h1 em { font-style: italic; color: rgba(255,255,255,.6); }
.slide-btn { display: inline-flex; align-items: center; gap: 12px; font-family: var(--fb);
             font-size: 13.5px; font-weight: 600; color: #fff; letter-spacing: .04em;
             padding-bottom: 8px; border-bottom: 1.5px solid var(--ouro);
             transition: gap .25s, color .25s; }
.slide-btn:hover { gap: 20px; color: var(--ouro); }
.slider-prev, .slider-next { position: absolute; top: 50%; transform: translateY(-50%); z-index: 10;
  background: rgba(255,255,255,.07); border: 1px solid rgba(255,255,255,.18); color: #fff;
  width: 48px; height: 48px; border-radius: 50%; cursor: pointer; font-size: 15px;
  display: flex; align-items: center; justify-content: center; transition: all .25s; }
.slider-prev { left: 28px; }
.slider-next { right: 28px; }
.slider-prev:hover, .slider-next:hover { background: var(--azul); border-color: var(--azul); }
.slider-dots { position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
               z-index: 10; display: flex; gap: 10px; }
.dot { width: 8px; height: 8px; border-radius: 50%; background: rgba(255,255,255,.28);
       border: none; cursor: pointer; transition: background .3s, transform .3s; }
.dot--ativo { background: var(--ouro); transform: scale(1.3); }

/* ══ NÚMEROS ══════════════════════════════ */
.numeros-section { padding: 100px 0; }
.numeros-inner { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.numeros-desc { font-size: 15px; color: rgba(255,255,255,.48); line-height: 1.8; margin-top: 16px; }
.numeros-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 40px; }
.numero-card { text-align: center; }
.numero-val { font-family: var(--fh); font-size: clamp(2.8rem,5vw,4rem);
              font-weight: 700; color: #fff; line-height: 1; margin-bottom: 12px; -webkit-font-smoothing: auto; }
.numero-linha { width: 36px; height: 2px; background: var(--ouro); margin: 0 auto 12px; }
.numero-label { font-family: var(--fb); font-size: 13px; font-weight: 500;
                color: rgba(255,255,255,.42); letter-spacing: .04em; }

/* ══ SOBRE ════════════════════════════════ */
#sobre { padding: 100px 0; }
.sobre-grid { display: grid; grid-template-columns: 1fr 1.15fr; gap: 80px; align-items: center; }
.sobre-img { position: relative; }
.sobre-placeholder { width: 100%; aspect-ratio: 4/5; background: var(--preto);
                     border-radius: var(--radius); display: flex; align-items: center; justify-content: center; }
.sobre-foto { width: 100%; aspect-ratio: 4/5; object-fit: cover; border-radius: var(--radius); }
.sobre-logo { width: 50%; opacity: .6; }
.sobre-badge { position: absolute; bottom: -16px; right: -16px; background: var(--ouro);
               border-radius: var(--radius); padding: 18px 22px; text-align: center;
               box-shadow: var(--sombra-lg); z-index: 2; }
.sobre-badge strong { display: block; font-family: var(--fh); font-size: 2.4rem;
                      font-weight: 700; color: var(--preto); line-height: 1; }
.sobre-badge span { display: block; font-size: 11px; font-weight: 600; color: var(--preto);
                    opacity: .7; margin-top: 4px; line-height: 1.4; }
.sobre-p { font-size: 15px; color: var(--cinza-txt); line-height: 1.85; margin-bottom: 14px; }
.sobre-checks { display: flex; flex-direction: column; gap: 10px; margin: 28px 0 32px; }
.check-item { display: flex; align-items: center; gap: 12px; font-size: 14px; color: var(--cinza-txt); }
.check-item i { color: var(--azul); font-size: 12px; flex-shrink: 0; }

/* ══ ÁREAS ════════════════════════════════ */
#areas { padding: 100px 0; }
.areas-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1px;
              background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.06);
              border-radius: var(--radius); overflow: hidden; }
.area-card { background: var(--preto-soft); padding: 40px 32px; position: relative;
             cursor: pointer; min-height: 200px; display: flex; flex-direction: column;
             transition: background .3s; }
.area-card:hover { background: #1a1f2e; }
.area-front { display: flex; flex-direction: column; height: 100%; transition: opacity .3s, transform .3s; }
.area-card:hover .area-front { opacity: 0; transform: translateY(-8px); pointer-events: none; }
.area-ico { font-size: 24px; color: var(--ouro); margin-bottom: 16px; }
.area-ico--azul { color: var(--azul-claro); }
.area-front h3 { font-family: var(--fh); font-size: 1.15rem; font-weight: 600; color: #fff; flex: 1; }
.area-seta { margin-top: 20px; font-size: 14px; color: rgba(255,255,255,.25); transition: color .3s; }
.area-card:hover .area-seta { color: var(--azul-claro); }
.area-back { position: absolute; inset: 0; padding: 40px 32px; display: flex;
             flex-direction: column; justify-content: center; opacity: 0; transform: translateY(8px);
             transition: opacity .3s, transform .3s; pointer-events: none; }
.area-card:hover .area-back { opacity: 1; transform: translateY(0); pointer-events: all; }
.area-back p { font-size: 14px; color: rgba(255,255,255,.68); line-height: 1.8; margin-bottom: 16px; }
.area-tag { display: inline-block; font-size: 10px; font-weight: 700; letter-spacing: .1em;
            text-transform: uppercase; color: var(--azul-claro); background: rgba(26,75,140,.15);
            padding: 4px 10px; border-radius: 3px; border: 1px solid rgba(26,75,140,.3); }

/* ══ EQUIPE ══════════════════════════════ */
#equipe { padding: 100px 0; }
.equipe-grid { display: grid; grid-template-columns: repeat(2,1fr); gap: 28px; max-width: 860px; margin: 0 auto; }
.membro { background: var(--cinza-bg); border-radius: var(--radius); overflow: hidden;
          border: 1px solid var(--cinza-borda); box-shadow: var(--sombra-sm);
          transition: box-shadow .3s, transform .3s; }
.membro:hover { box-shadow: var(--sombra-md); transform: translateY(-4px); }
.membro-foto { width: 100%; aspect-ratio: 4/3; overflow: hidden; background: var(--preto); }
.membro-foto img { width: 100%; height: 100%; object-fit: cover; object-position: top center;
                   transition: transform .5s ease; }
.membro:hover .membro-foto img { transform: scale(1.04); }
.membro-info { padding: 28px 32px; }
.membro-linha { width: 36px; height: 2px; background: var(--azul); margin-bottom: 14px; }
.membro-info h3 { font-family: var(--fh); font-size: 1.2rem; font-weight: 600; color: var(--preto); margin-bottom: 4px; }
.membro-cargo { display: block; font-size: 10.5px; font-weight: 700; letter-spacing: .1em;
                text-transform: uppercase; color: var(--cinza-lt); margin-bottom: 6px; }
.membro-area { display: block; font-size: 13px; font-weight: 600; color: var(--azul); margin-bottom: 12px; }
.membro-info p { font-size: 14px; color: var(--cinza-txt); line-height: 1.75; }

/* ══ PROCESSO ═════════════════════════════ */
#processo { padding: 100px 0; }
.processo-lista { display: flex; flex-direction: column; max-width: 760px; margin: 0 auto; }
.processo-sep { width: 1px; height: 40px; background: rgba(255,255,255,.07); margin-left: 32px; }
.processo-item { display: flex; gap: 28px; align-items: flex-start; }
.processo-num { font-family: var(--fh); font-size: 1.8rem; font-weight: 700;
                color: var(--azul); opacity: .4; line-height: 1; min-width: 64px; padding-top: 2px; }
.processo-corpo h3 { font-family: var(--fh); font-size: 1.2rem; font-weight: 600; color: #fff; margin-bottom: 8px; }
.processo-corpo p { font-size: 14px; color: rgba(255,255,255,.42); line-height: 1.8; }

/* ══ FAQ ══════════════════════════════════ */
#faq { padding: 100px 0; }
.faq-wrap .sec-header { margin-bottom: 48px; }
.faq-lista { max-width: 740px; margin: 0 auto; }
.faq-item { border-bottom: 1px solid var(--cinza-borda); }
.faq-item:first-child { border-top: 1px solid var(--cinza-borda); }
.faq-btn { width: 100%; background: none; border: none; cursor: pointer; padding: 22px 0;
           display: flex; align-items: center; justify-content: space-between; gap: 16px;
           font-family: var(--fb); font-size: 15px; font-weight: 600;
           color: var(--preto); text-align: left; transition: color .2s; }
.faq-btn:hover { color: var(--azul); }
.faq-ico { width: 26px; height: 26px; min-width: 26px; border-radius: 50%;
           border: 1.5px solid var(--cinza-borda); display: flex; align-items: center;
           justify-content: center; font-size: 11px; color: var(--azul); transition: all .3s; }
.faq-btn[aria-expanded="true"] .faq-ico { background: var(--azul); border-color: var(--azul); color: #fff; transform: rotate(45deg); }
.faq-resposta { max-height: 0; overflow: hidden; transition: max-height .4s ease, padding .3s; }
.faq-resposta.aberta { max-height: 300px; padding-bottom: 20px; }
.faq-resposta p { font-size: 14.5px; color: var(--cinza-txt); line-height: 1.85; }

/* ══ CONTATO ══════════════════════════════ */
#contato { padding: 100px 0; }
.contato-grid { display: grid; grid-template-columns: 1fr 1.1fr; gap: 80px; align-items: start; }
.contato-aviso { display: flex; align-items: center; gap: 10px; font-size: 13.5px;
                 color: rgba(201,165,90,.75); margin-bottom: 36px; }
.contato-dados { display: flex; flex-direction: column; gap: 18px; }
.dado { display: flex; align-items: flex-start; gap: 14px; }
.dado--link { cursor: pointer; transition: opacity .2s; }
.dado--link:hover { opacity: .8; }
.dado-ico { width: 38px; height: 38px; min-width: 38px; border-radius: 8px;
            background: rgba(26,75,140,.15); border: 1px solid rgba(26,75,140,.25);
            display: flex; align-items: center; justify-content: center; color: var(--azul-claro); font-size: 15px; }
.dado-ico--verde { background: rgba(37,211,102,.1); border-color: rgba(37,211,102,.2); color: var(--verde-wa); }
.dado strong { display: block; font-size: 14.5px; font-weight: 600; color: #fff; margin-bottom: 2px; }
.dado span   { font-size: 13px; color: rgba(255,255,255,.38); }
.contato-form-wrap { background: var(--branco); border-radius: var(--radius); padding: 40px; box-shadow: var(--sombra-lg); }
.form-titulo { font-family: var(--fh); font-size: 1.5rem; font-weight: 600; color: var(--preto);
               margin-bottom: 28px; padding-bottom: 16px; border-bottom: 1px solid var(--cinza-borda); }
.contato-form { display: flex; flex-direction: column; gap: 18px; }
.form-grupo { display: flex; flex-direction: column; gap: 6px; }
.form-linha { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
label { font-size: 12px; font-weight: 700; letter-spacing: .06em; text-transform: uppercase; color: var(--cinza-txt); }
input, select, textarea { font-family: var(--fb); font-size: 14.5px; color: var(--preto);
  background: var(--cinza-bg); border: 1.5px solid var(--cinza-borda); border-radius: 5px;
  padding: 12px 14px; outline: none; width: 100%;
  transition: border-color .2s, box-shadow .2s; -webkit-font-smoothing: auto; }
input:focus, select:focus, textarea:focus { border-color: var(--azul); box-shadow: 0 0 0 3px rgba(26,75,140,.1); }
textarea { resize: vertical; }
.form-ok { text-align: center; padding: 32px 16px; }
.form-ok i { font-size: 2.8rem; color: #22C55E; display: block; margin-bottom: 14px; }
.form-ok h3 { font-family: var(--fh); font-size: 1.5rem; color: var(--preto); margin-bottom: 10px; }
.form-ok p  { color: var(--cinza-txt); margin-bottom: 24px; }

/* ══ FOOTER ══════════════════════════════ */
#footer { background: var(--preto); }
.footer-grid { display: grid; grid-template-columns: 1.8fr 1fr 1fr 1.2fr; gap: 48px;
               padding: 64px 0; border-bottom: 1px solid rgba(255,255,255,.07); }
.footer-logo { height: 48px; width: auto; margin-bottom: 14px; }
.footer-nome { display: block; font-family: var(--fh); font-size: 1.05rem; font-weight: 600; color: #fff; }
.footer-sub  { display: block; font-size: 10px; font-weight: 500; color: rgba(255,255,255,.3);
               letter-spacing: .06em; margin-bottom: 16px; }
.footer-brand p { font-size: 13px; color: rgba(255,255,255,.4); line-height: 1.7; margin-bottom: 6px; }
.footer-oab { font-size: 11px !important; color: rgba(255,255,255,.2) !important; font-style: italic; }
.footer-col h4 { font-family: var(--fb); font-size: 10px; font-weight: 700; letter-spacing: .14em;
                 text-transform: uppercase; color: rgba(255,255,255,.28); margin-bottom: 16px; }
.footer-col ul { display: flex; flex-direction: column; gap: 8px; }
.footer-col a  { font-size: 13.5px; color: rgba(255,255,255,.52); transition: color .2s; }
.footer-col a:hover { color: var(--azul-claro); }
.footer-col p  { font-size: 13px; color: rgba(255,255,255,.52); margin-bottom: 8px;
                 display: flex; align-items: center; gap: 8px; }
.footer-col p i { color: var(--azul-claro); }
.footer-bottom { padding: 20px 0; }
.footer-bottom-inner { display: flex; justify-content: space-between; flex-wrap: wrap; gap: 6px; align-items: center; }
.footer-bottom p { font-size: 12px; color: rgba(255,255,255,.22); }

/* ══ WHATSAPP FLOAT ══════════════════════ */
.wa-wrap { position: fixed; bottom: 28px; right: 24px; z-index: 900;
           display: flex; flex-direction: column; align-items: flex-end; gap: 12px; }
.wa-btn { position: relative; width: 56px; height: 56px; border-radius: 50%;
          background: var(--verde-wa); color: #fff; border: none; cursor: pointer;
          font-size: 26px; display: flex; align-items: center; justify-content: center;
          box-shadow: 0 4px 20px rgba(37,211,102,.45); transition: transform .25s;
          animation: pulsoWA 2.5s ease-in-out infinite; }
.wa-btn:hover { transform: scale(1.1); animation: none; }
@keyframes pulsoWA { 0%,100% { box-shadow: 0 4px 20px rgba(37,211,102,.45); } 50% { box-shadow: 0 4px 32px rgba(37,211,102,.72); } }
.wa-badge { position: absolute; top: -4px; right: -4px; width: 18px; height: 18px;
            border-radius: 50%; background: #E53E3E; color: #fff; font-size: 10px;
            font-weight: 700; font-family: var(--fb); display: flex; align-items: center; justify-content: center; }
.wa-form { width: 300px; background: var(--branco); border-radius: 12px; overflow: hidden;
           box-shadow: 0 12px 48px rgba(0,0,0,.28); transform-origin: bottom right;
           transform: scale(0); opacity: 0;
           transition: transform .3s cubic-bezier(.34,1.56,.64,1), opacity .25s; pointer-events: none; }
.wa-form.aberto { transform: scale(1); opacity: 1; pointer-events: all; }
.wa-form-header { background: #128C7E; padding: 14px 16px; display: flex; align-items: center; gap: 10px; }
.wa-avatar { width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,.15);
             display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; }
.wa-avatar img { width: 100%; height: 100%; object-fit: cover; }
.wa-form-header strong { display: block; font-size: 13px; font-weight: 700; color: #fff; }
.wa-form-header span   { font-size: 11px; color: rgba(255,255,255,.68); }
.wa-fechar { margin-left: auto; background: none; border: none; cursor: pointer;
             color: rgba(255,255,255,.65); font-size: 16px; transition: color .2s; }
.wa-fechar:hover { color: #fff; }
.wa-form-body { padding: 16px; display: flex; flex-direction: column; gap: 10px; }
.wa-form-body p { font-size: 13px; color: var(--cinza-txt); }
.wa-form-body input, .wa-form-body select { font-family: var(--fb); font-size: 13.5px;
  color: var(--preto); background: var(--cinza-bg); border: 1.5px solid var(--cinza-borda);
  border-radius: 6px; padding: 10px 12px; outline: none; width: 100%;
  transition: border-color .2s; -webkit-font-smoothing: auto; }
.wa-form-body input:focus, .wa-form-body select:focus { border-color: var(--verde-wa); }
.wa-enviar { background: var(--verde-wa); color: #fff; border: none; cursor: pointer;
             border-radius: 6px; padding: 12px; width: 100%; font-family: var(--fb);
             font-size: 14px; font-weight: 700; display: flex; align-items: center;
             justify-content: center; gap: 8px; transition: background .25s; }
.wa-enviar:hover { background: #1ebe57; }

/* ══ COOKIE BANNER ════════════════════════ */
.cookie-banner { position: fixed; bottom: 0; left: 0; right: 0; z-index: 800;
  background: var(--preto); border-top: 1px solid rgba(255,255,255,.07); padding: 16px 28px;
  display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;
  transform: translateY(100%); transition: transform .4s cubic-bezier(.16,1,.3,1); }
.cookie-banner.vis { transform: translateY(0); }
.cookie-texto { font-size: 13px; color: rgba(255,255,255,.5); max-width: 680px; line-height: 1.6; }
.cookie-link  { color: var(--azul-claro); }
.cookie-acoes { display: flex; gap: 10px; flex-shrink: 0; }
.cookie-btn { font-family: var(--fb); font-size: 12.5px; font-weight: 600;
              padding: 9px 18px; border-radius: 5px; border: none; cursor: pointer; transition: all .25s; }
.cookie-btn--rec { background: transparent; color: rgba(255,255,255,.38); border: 1px solid rgba(255,255,255,.12); }
.cookie-btn--rec:hover { color: #fff; border-color: rgba(255,255,255,.35); }
.cookie-btn--ace { background: var(--azul); color: #fff; }
.cookie-btn--ace:hover { background: var(--azul-esc); }

/* ══ GSAP ESTADO INICIAL ══════════════════ */
.gsap-reveal, .gsap-reveal-left, .gsap-reveal-right { opacity: 0; }
.gsap-reveal       { transform: translateY(28px); }
.gsap-reveal-left  { transform: translateX(-28px); }
.gsap-reveal-right { transform: translateX(28px); }

/* ══ RESPONSIVO ══════════════════════════ */
@media (max-width: 1024px) {
  .numeros-inner { grid-template-columns: 1fr; gap: 48px; }
  .sobre-grid    { grid-template-columns: 1fr; gap: 56px; }
  .sobre-img     { max-width: 420px; margin: 0 auto; }
  .areas-grid    { grid-template-columns: repeat(2,1fr); }
  .contato-grid  { grid-template-columns: 1fr; gap: 48px; }
  .footer-grid   { grid-template-columns: 1fr 1fr; gap: 36px; }
  .gaveta-cols   { grid-template-columns: 1fr; gap: 20px; }
}
@media (max-width: 768px) {
  .areas-grid  { grid-template-columns: 1fr; }
  .equipe-grid { grid-template-columns: 1fr; }
  .footer-grid { grid-template-columns: 1fr; gap: 28px; padding: 40px 0; }
  .footer-bottom-inner { flex-direction: column; text-align: center; }
  .form-linha  { grid-template-columns: 1fr; }
  .numeros-grid { grid-template-columns: repeat(2,1fr); }
  .gaveta { padding: 40px 24px; }
  .slider-prev { left: 12px; }
  .slider-next { right: 12px; }
  .cookie-banner { flex-direction: column; align-items: flex-start; }
  .wa-form { width: calc(100vw - 48px); }
}
```

---

## RETORNO ESPERADO

```
Arquivo criado: D:\xamp\htdocs\gerci\Site\css\style.css
Próximo passo: executar Parte 3 (main.js)
```
