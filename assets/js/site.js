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

    const closeButton = document.createElement('button');
    closeButton.className = 'promo-nudge__close';
    closeButton.type = 'button';
    closeButton.setAttribute('aria-label', 'Close promotion');
    closeButton.textContent = '×';

    const eyebrow = document.createElement('div');
    eyebrow.className = 'promo-nudge__eyebrow';
    eyebrow.textContent = 'YaarWin register window';

    const headline = document.createElement('strong');
    headline.textContent = 'Ready to start with invite code 72238107987?';

    const copy = document.createElement('p');
    copy.textContent = 'Open the guided YaarWin registration path before the next cricket betting India session.';

    const cta = document.createElement('a');
    cta.className = 'promo-nudge__cta';
    cta.href = registerUrl;
    cta.target = '_blank';
    cta.rel = 'nofollow noopener';
    cta.textContent = 'Register Now';

    promo.append(closeButton, eyebrow, headline, copy, cta);

    closeButton.addEventListener('click', () => {
      promo.remove();
    });

    document.body.appendChild(promo);
    requestAnimationFrame(() => promo.classList.add('is-visible'));
    sendSignal();
  };

  window.setTimeout(showPromo, 8000);
})();
