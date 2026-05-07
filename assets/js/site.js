const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('#site-menu');
if (navToggle && navMenu) {
  navToggle.addEventListener('click', () => {
    const expanded = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!expanded));
    navMenu.classList.toggle('is-open', !expanded);
  });
}

(() => {
  const params = new URLSearchParams(window.location.search);
  if (params.get('bobi_admin') === '1') {
    localStorage.setItem('bobiAdminOptout', '1');
  }
  if (params.get('bobi_admin') === '0') {
    localStorage.removeItem('bobiAdminOptout');
  }
  if (localStorage.getItem('bobiAdminOptout') === '1') {
    return;
  }

  const today = new Date().toISOString().slice(0, 10);
  const seenKey = 'bobiPromoSeenDate';
  if (localStorage.getItem(seenKey) === today) {
    return;
  }

  const body = document.body;
  const registerUrl = body.dataset.registerUrl || '/register/';
  const endpoint = body.dataset.visitEndpoint || '/api/visit-signal.php';
  let visitorId = localStorage.getItem('bobiVisitorId');
  if (!visitorId) {
    visitorId = Math.random().toString(36).slice(2) + Date.now().toString(36);
    localStorage.setItem('bobiVisitorId', visitorId);
  }

  const sendSignal = () => {
    const payload = JSON.stringify({
      event: 'promo_shown',
      visitor_id: visitorId,
      path: window.location.pathname || '/',
      title: document.title || '',
      referrer: document.referrer || '',
    });
    if (navigator.sendBeacon) {
      navigator.sendBeacon(endpoint, new Blob([payload], { type: 'application/json' }));
      return;
    }
    fetch(endpoint, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: payload,
      keepalive: true,
    }).catch(() => {});
  };

  const showPromo = () => {
    if (document.querySelector('.promo-nudge')) {
      return;
    }
    localStorage.setItem(seenKey, today);

    const promo = document.createElement('aside');
    promo.className = 'promo-nudge';
    promo.setAttribute('role', 'dialog');
    promo.setAttribute('aria-label', 'YaarWin registration reminder');
    promo.innerHTML = `
      <button class="promo-nudge__close" type="button" aria-label="Close promotion">×</button>
      <div class="promo-nudge__eyebrow">YaarWin register window</div>
      <strong>Ready to start with invite code 72238107987?</strong>
      <p>Open the official YaarWin registration path before the next cricket betting India session.</p>
      <a class="promo-nudge__cta" href="${registerUrl}" target="_blank" rel="nofollow noopener">Register Now</a>
    `;

    promo.querySelector('.promo-nudge__close').addEventListener('click', () => {
      promo.remove();
    });

    document.body.appendChild(promo);
    requestAnimationFrame(() => promo.classList.add('is-visible'));
    sendSignal();
  };

  window.setTimeout(showPromo, 8000);
})();
