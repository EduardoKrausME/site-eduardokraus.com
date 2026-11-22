(function(){'use strict';
const menu=document.querySelector('[data-menu-toggle]');const nav=document.querySelector('.nav');if(menu&&nav){menu.addEventListener('click',()=>{let opened=nav.classList.toggle('open');menu.setAttribute('aria-expanded',String(opened));});nav.addEventListener('click',e=>{if(e.target.closest('a')){nav.classList.remove('open');menu.setAttribute('aria-expanded','false')}})}
const modal=document.getElementById('proposta');function openModal(){if(modal){if(typeof modal.showModal==='function')modal.showModal();else modal.setAttribute('open','')}}
document.querySelectorAll('[data-proposta]').forEach(b=>b.addEventListener('click',e=>{e.preventDefault();openModal()}));document.querySelectorAll('[data-modal-close]').forEach(b=>b.addEventListener('click',()=>modal?.close()));modal?.addEventListener('click',e=>{if(e.target===modal)modal.close()});
document.querySelectorAll('[data-tabs]').forEach(tabs=>{let buttons=[...tabs.querySelectorAll('[role=tab]')],panels=[...tabs.querySelectorAll('[role=tabpanel]')];buttons.forEach(btn=>btn.addEventListener('click',()=>{buttons.forEach(b=>{const active=b===btn;b.setAttribute('aria-selected',String(active));b.tabIndex=active?0:-1});panels.forEach(p=>p.hidden=p.id!==btn.getAttribute('aria-controls'))}));});
})();
// Keep the language switcher next to the proposal button on every localized page.
(function () {
  'use strict';
  const match = window.location.pathname.match(/^(.*\/)(pt_br|en)(\/.*)$/);
  if (!match) return;
  const [, base, current, suffix] = match;
  const header = document.querySelector('.topbar .container');
  const proposal = header?.querySelector(':scope > [data-proposta]');
  if (!proposal) return;
  const switcher = document.createElement('nav');
  switcher.className = 'language-switcher';
  switcher.setAttribute('aria-label', current === 'en' ? 'Choose language' : 'Escolher idioma');
  for (const option of [
    {code: 'pt_br', text: 'PT-BR', flag: '🇧🇷', label: 'Português (Brasil)', lang: 'pt-BR'},
    {code: 'en', text: 'EN', flag: '🇺🇸', label: 'English', lang: 'en'}
  ]) {
    const link = document.createElement('a');
    link.className = 'language-option' + (current === option.code ? ' active' : '');
    link.href = base + option.code + suffix + window.location.search + window.location.hash;
    link.lang = option.lang;
    link.setAttribute('aria-label', option.label);
    link.setAttribute('hreflang', option.lang);
    if (current === option.code) link.setAttribute('aria-current', 'page');
    const flag = document.createElement('span');
    flag.className = 'language-flag';
    flag.textContent = option.flag;
    flag.setAttribute('aria-hidden', 'true');
    const label = document.createElement('span');
    label.textContent = option.text;
    link.append(flag, label);
    switcher.appendChild(link);
  }
  proposal.after(switcher);
})();
