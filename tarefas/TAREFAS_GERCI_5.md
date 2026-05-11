# T20_FEAT_conteudo_imagens_hero_kpi_faq — Site Gérci Libero
# Data: 2026-05-11
# Status: [ ] Pendente

---

## OBJETIVO
Atualizar conteúdo e imagens em 4 áreas do site: Hero (3 slides com imagens reais),
KPIs (remover 1 card, atualizar número), Sobre (adicionar foto do escritório)
e FAQ (trocar 2 perguntas, adicionar 1 nova).

---

## CONTEXTO
- Projeto em: `C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\`
- Testar em: `http://127.0.0.1:5500/index.php`
- Fotos enviadas — copiar para as pastas antes de executar:

| Arquivo original            | Copiar para                              | Usar em         |
|-----------------------------|------------------------------------------|-----------------|
| `wesley-tingey-...jpg`      | `images/hero/hero1.jpg`                  | Slide 1 do hero |
| `giammarco-boscaro-...jpg`  | `images/hero/hero2.jpg`                  | Slide 2 do hero |
| `direit01.jpg`              | `images/hero/hero3.jpg`                  | Slide 3 do hero |
| `WhatsApp_Image_...jpeg`    | `images/sobre/escritorio.jpg`            | Seção Sobre     |
| `images/equipe/gerci.jpg`   | já existe — manter                       | Slide 1 + Equipe|

> ATENÇÃO: a foto do Leonardo já está em `images/equipe/leonardo.jpg`.
> NÃO substituir — só atualizar o tempo de experiência no HTML.

---

## ARQUIVOS ENVOLVIDOS

| Arquivo      | Caminho completo                                                        | Ação   |
|--------------|-------------------------------------------------------------------------|--------|
| index.php    | C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\index.php            | Editar |
| style.css    | C:\Users\Fabian\Desktop\PROJETOS\Site_Libero_Gerci\css\style.css        | Editar |

---

## RESTRIÇÕES

- NÃO alterar: `contato-envia.php`, `js/main.js`, `fiveserver.config.js`
- NÃO usar `antialiased` no font-smoothing — sempre `auto`
- NÃO alterar estrutura do slider (GSAP já configurado — só trocar conteúdo)
- NÃO alterar outras seções fora do escopo desta tarefa
- NÃO remover classes existentes sem necessidade

---

## ALTERAÇÃO 1 — HERO: 3 slides com imagens reais

### Em: `index.php` → seção `<section id="hero">`

#### Localizar o bloco do slider completo:
```html
<div class="slider-track" id="sliderTrack">

    <div class="slide" style="background-image:url('images/equipe/gerci.jpg');background-size:cover;background-position:center top;">
      <div class="slide-overlay slide-overlay--foto"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Fundador · Direito do Trabalho</span>
        <h1>Dr. Gérci Libero da Silva.<br><em>Mais de 36 anos a serviço da justiça.</em></h1>
        <a href="#sobre" class="slide-btn"><span>Conheça o escritório</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="slide slide--grad2">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Especialização</span>
        <h1>Trabalhista e Previdenciário.<br><em>Com quem realmente entende.</em></h1>
        <a href="#areas" class="slide-btn"><span>Nossas especialidades</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

    <div class="slide slide--grad3">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-chapeu">Atendimento</span>
        <h1>Cascavel/PR e<br><em>todo o Brasil.</em></h1>
        <a href="#contato" class="slide-btn"><span>Fale conosco agora</span><i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>

  </div>
```

#### Substituir por:
```html
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
```

---

## ALTERAÇÃO 2 — KPIs: remover "clientes satisfeitos", ajustar números

### Em: `index.php` → seção `numeros-section`

#### Localizar o bloco `.numeros-grid` completo:
```html
<div class="numeros-grid">
      <div class="numero-card gsap-reveal" data-delay="0.08">
        <div class="numero-val"><span class="gsap-counter" data-target="36">0</span></div>
        <div class="numero-linha"></div>
        <div class="numero-label">anos de experiência</div>
      </div>
      <div class="numero-card gsap-reveal" data-delay="0.16">
        <div class="numero-val">+<span class="gsap-counter" data-target="5000">0</span></div>
        <div class="numero-linha"></div>
        <div class="numero-label">casos atendidos</div>
      </div>
      <div class="numero-card gsap-reveal" data-delay="0.24">
        <div class="numero-val">+<span class="gsap-counter" data-target="4000">0</span></div>
        <div class="numero-linha"></div>
        <div class="numero-label">clientes satisfeitos</div>
      </div>
      <div class="numero-card gsap-reveal" data-delay="0.32">
        <div class="numero-val">2</div>
        <div class="numero-linha"></div>
        <div class="numero-label">especialistas dedicados</div>
      </div>
    </div>
```

#### Substituir por (apenas 2 cards, grid ajustado):
```html
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
```

### Em: `style.css` → adicionar após `.numeros-grid { ... }`

#### Adicionar:
```css
/* Grid de 2 colunas quando só tem 2 KPIs */
.numeros-grid--2col {
  grid-template-columns: repeat(2, 1fr);
  max-width: 600px;
  margin: 0 auto;
}
```

---

## ALTERAÇÃO 3 — SOBRE: adicionar foto do escritório

### Em: `index.php` → seção `#sobre`, dentro de `.sobre-img`

#### Localizar:
```html
<div class="sobre-placeholder">
        <img src="images/logo/Logo_Antiga.png" alt="Gérci Libero Advogados" class="sobre-logo">
      </div>
      <div class="sobre-badge"><strong>36</strong><span>anos em<br>Cascavel/PR</span></div>
```

#### Substituir por:
```html
<img src="images/sobre/escritorio.jpg" alt="Escritório Gérci Libero Advogados — Cascavel/PR" class="sobre-foto">
      <div class="sobre-badge"><strong>36</strong><span>anos em<br>Cascavel/PR</span></div>
```

### Em: `style.css` → verificar se `.sobre-foto` já existe. Se não existir, adicionar:

```css
.sobre-foto {
  width: 100%;
  aspect-ratio: 4/5;
  object-fit: cover;
  object-position: center;
  border-radius: var(--radius);
  display: block;
}
```

---

## ALTERAÇÃO 4 — EQUIPE: atualizar tempo do Leonardo

### Em: `index.php` → seção `#equipe`, card do Leonardo

#### Localizar:
```html
<p>Especialista em Direito Previdenciário com mais de 10 anos de experiência em planejamento estratégico, revisões de benefícios e recursos ao INSS.</p>
```

#### Substituir por:
```html
<p>Especialista em Direito Previdenciário com mais de 6 anos de experiência em planejamento estratégico, revisões de benefícios e recursos ao INSS.</p>
```

---

## ALTERAÇÃO 5 — FAQ: trocar 2 perguntas e adicionar 1 nova

### Em: `index.php` → seção `#faq`, dentro de `.faq-lista`

#### TROCA 1 — Localizar (pergunta sobre Revisão da Vida Toda):
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">O que é a Revisão da Vida Toda?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>É uma tese que permite incluir salários anteriores a 1994 no cálculo da aposentadoria, podendo aumentar significativamente o benefício mensal.</p></div>
      </div>
```

#### Substituir por:
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Sofri um acidente e fiquei com sequelas, mas já voltei a trabalhar. Ainda tenho algum direito?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Sim! Se o acidente — de qualquer natureza ou do trabalho — deixou uma sequela permanente que reduza sua capacidade para o trabalho que você exercia, você tem direito ao Auxílio-Acidente. Entre em contato para analisarmos sua situação.</p></div>
      </div>
```

#### TROCA 2 — Localizar (pergunta sobre Reforma da Previdência):
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Como a Reforma da Previdência afeta meu pedido?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>A reforma criou regras de transição complexas. Analisamos seu histórico individualmente para identificar em qual regra você se enquadra com maior vantagem financeira.</p></div>
      </div>
```

#### Substituir por:
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Para que serve o Planejamento Previdenciário?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>O planejamento identifica a regra de transição mais vantajosa, garantindo o melhor benefício no menor tempo possível e evitando prejuízos financeiros. É um estudo técnico e matemático individualizado.</p></div>
      </div>
```

#### ADIÇÃO — Localizar o fechamento do último faq-item existente:
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Fui demitido sem justa causa. Quais são meus direitos?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Você tem direito a aviso prévio, saldo de salário, 13º proporcional, férias + 1/3, multa de 40% sobre o FGTS e seguro-desemprego.</p></div>
      </div>
```

#### Substituir por (mantém a pergunta existente + adiciona a nova logo após):
```html
<div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Fui demitido sem justa causa. Quais são meus direitos?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>Você tem direito a aviso prévio, saldo de salário, 13º proporcional, férias + 1/3, multa de 40% sobre o FGTS e seguro-desemprego.</p></div>
      </div>

      <div class="faq-item">
        <button class="faq-btn" aria-expanded="false">Quando ocorre a Rescisão Indireta?<span class="faq-ico"><i class="fa-solid fa-plus"></i></span></button>
        <div class="faq-resposta"><p>O descumprimento de obrigações pela empresa — como atraso de salário, assédio, rebaixamento de função, entre outros — permite que você saia recebendo todas as verbas rescisórias, como se fosse uma demissão sem justa causa. É o que chamamos de rescisão indireta.</p></div>
      </div>
```

---

## TESTAR APÓS APLICAR

- [ ] `http://127.0.0.1:5500/index.php`
- [ ] Hero: 3 slides com imagens reais aparecem (martelo, biblioteca, Themis)
- [ ] Slider autoplay funciona e troca entre os 3 slides
- [ ] Seção Números: apenas 2 cards, centralizados, counter anima corretamente
- [ ] KPI "casos atendidos" conta até 10.000
- [ ] Seção Sobre: foto da fachada do escritório aparece no lugar do placeholder
- [ ] Seção Equipe: Leonardo com "mais de 6 anos"
- [ ] FAQ: "Revisão da Vida Toda" não existe mais — substituída por acidente/sequelas
- [ ] FAQ: "Reforma da Previdência" não existe mais — substituída por Planejamento Previdenciário
- [ ] FAQ: última pergunta é "Rescisão Indireta" (nova, adicionada ao final)
- [ ] FAQ accordion: todas as 5 perguntas abrem e fecham corretamente
- [ ] Responsivo mobile 375px: imagens do hero não distorcem, grid de 2 KPIs empilha

---

## RETORNO ESPERADO DO CLAUDE CODE

```
## Alterações realizadas

### index.php
| Bloco              | O que havia                        | O que foi colocado                    |
|--------------------|------------------------------------|---------------------------------------|
| Slide 1            | foto gerci.jpg                     | hero1.jpg (martelo) + novo texto      |
| Slide 2            | gradiente grad2                    | hero2.jpg (biblioteca) + novo texto   |
| Slide 3            | gradiente grad3                    | hero3.jpg (Themis) + novo texto       |
| numeros-grid       | 4 cards                            | 2 cards, data-target=10000            |
| sobre-img          | placeholder + logo                 | sobre-foto (escritorio.jpg)           |
| Leonardo           | mais de 10 anos                    | mais de 6 anos                        |
| FAQ item 2         | Como a Reforma afeta meu pedido?   | Para que serve o Planejamento?        |
| FAQ item 4         | O que é a Revisão da Vida Toda?    | Acidente + sequelas + Auxílio-Acidente|
| FAQ item 6 (novo)  | (não existia)                      | Quando ocorre a Rescisão Indireta?    |

### style.css
| Seletor              | O que foi adicionado               |
|----------------------|------------------------------------|
| .numeros-grid--2col  | grid 2 colunas centralizado        |
| .sobre-foto          | (se não existia) object-fit: cover |

## Resumo
- 1 arquivo PHP editado
- 1 arquivo CSS editado
- 3 slides trocados
- 2 KPIs removidos, 1 valor atualizado
- 1 foto substituída (placeholder → escritório)
- 1 texto atualizado (Leonardo: 10 → 6 anos)
- 2 FAQs trocadas, 1 adicionada

## Pendências / Atenção
- Verificar se images/hero/ existe — criar pasta se não existir
- Verificar se images/sobre/ existe — criar pasta se não existir
- Confirmar que hero1.jpg, hero2.jpg, hero3.jpg e escritorio.jpg foram copiados antes de rodar
```

---

## NOTAS GERAIS

```
Paleta:
--preto:      #0F0F10
--azul:       #1A4B8C
--ouro:       #C9A55A
--cinza-bg:   #F5F4F2
--radius:     10px

Fontes:
--fh: Cormorant Garamond (headings)
--fb: Raleway (corpo)

GSAP: já carregado via CDN no index.php — não alterar os <script> tags
font-smoothing: SEMPRE auto, NUNCA antialiased
```
