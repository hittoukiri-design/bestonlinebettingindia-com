<?php
$meta = ['canonical' => 'https://bestonlinebettingindia.com/'];
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <div class="container">
    <div class="announcement">
      <span>Welcome to BOBI x YaarWin, a cleaner betting and gaming access hub for India.</span>
      <span>15:42 IST • India</span>
    </div>
    <div class="hero-banner">
      <div class="hero-inner">
        <div>
          <div class="kicker">Best Online Betting India • YaarWin Access</div>
          <h1>Best Online Betting India with YaarWin Games</h1>
          <p class="hero-copy">Play and explore Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, slots, live casino and fast UPI withdrawal guidance from one simple lobby-style platform.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="/register/">Play Now</a>
            <a class="btn btn-ghost" href="/yaarwin-game-login/">YaarWin Login Guide</a>
          </div>
        </div>
        <aside class="hero-card" aria-label="YaarWin quick access">
          <h2>One Platform. Popular Games. Fast Access.</h2>
          <p>Start with the official YaarWin registration path, keep your invite code ready, and check payment details before playing.</p>
          <div class="win-pill"><span>Welcome access</span><strong>₹25,000</strong></div>
          <div class="win-pill"><span>Invite code</span><strong><?= e($site['invite_code']) ?></strong></div>
        </aside>
      </div>
    </div>
    <div class="game-lobby" aria-label="Popular game lobby">
      <?php foreach ($games as $game): ?>
        <a class="game-tile" href="<?= e($game['url']) ?>">
          <img src="<?= e($game['image']) ?>" alt="<?= e($game['name']) ?> online betting India" loading="lazy" width="64" height="64">
          <strong><?= e($game['name']) ?></strong>
          <span><?= e($game['label']) ?></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">Live lobby</span>
        <h2>Trending YaarWin betting games Indian players check first</h2>
      </div>
      <p>These sections are built for real player intent: login, register, game choice, UPI recharge, bonus check and withdrawal readiness.</p>
    </div>
    <div class="dashboard-grid">
      <article class="panel">
        <h3>Trending Games</h3>
        <div class="trending-list">
          <?php foreach (array_slice($games, 0, 5) as $index => $game): ?>
            <a class="trend-row" href="<?= e($game['url']) ?>">
              <span class="rank"><?= $index + 1 ?></span>
              <span><?= e($game['name']) ?> <small><?= e($game['label']) ?></small></span>
              <span class="mini-btn">Play Now</span>
            </a>
          <?php endforeach; ?>
        </div>
      </article>
      <article class="live-card">
        <h3>Live Cricket Betting</h3>
        <p>IPL-style match interest, cricket betting guides and responsible game selection for India.</p>
        <div class="match"><span>Mumbai</span><span>VS</span><span>Chennai</span></div>
        <div class="odds"><span>1.72</span><span>2.10</span><span>Live</span></div>
      </article>
      <article class="panel">
        <h3>Live Winnings Signals</h3>
        <div class="win-list">
          <div class="win-row"><span>Aviator cashout</span><span class="amount">2.35x</span></div>
          <div class="win-row"><span>Teen Patti round</span><span class="amount">₹32,450</span></div>
          <div class="win-row"><span>Wingo colour</span><span class="amount">Green</span></div>
          <div class="win-row"><span>Slots jackpot</span><span class="amount">₹19,500</span></div>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="promo-grid">
      <article class="promo-card">
        <h3>Mega Welcome Bonus Guide</h3>
        <p>Use the official YaarWin register path, keep the invite code locked, and check bonus terms before adding funds.</p>
        <a class="btn btn-primary" href="/register/">Claim Access</a>
      </article>
      <article class="promo-card light">
        <h3>Fast Withdrawal India</h3>
        <p>Prepare correct wallet details, UPI information and order checks before requesting cashout.</p>
        <a class="text-link" href="/fast-withdrawal-betting-india/">Read withdrawal guide →</a>
      </article>
      <article class="promo-card light">
        <h3>Download and Login</h3>
        <p>Open YaarWin access from mobile, review your account safety, and use the human teacher if stuck.</p>
        <a class="text-link" href="/yaarwin-game-login/">Open login guide →</a>
      </article>
    </div>
    <div class="trust-bar">
      <div class="trust-item">24/7 Teacher <span>Telegram support path</span></div>
      <div class="trust-item">Fast Withdrawal <span>UPI-friendly guidance</span></div>
      <div class="trust-item">Secure Login <span>Keep OTP private</span></div>
      <div class="trust-item">Fair Play <span>Check limits first</span></div>
      <div class="trust-item">Best Games <span>Aviator, Wingo, cards</span></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">SEO guide cluster</span>
        <h2>BOBI x YaarWin guides that support real player decisions</h2>
      </div>
      <p>Guide content stays below the lobby, so the homepage feels like a betting platform while still giving Google strong context.</p>
    </div>
    <div class="content-grid">
      <article class="content-card">
        <div><h3>Best Online Betting India</h3><p>Compare the game lobby, payment basics, YaarWin access and responsible play checklist.</p></div>
        <a class="text-link" href="/best-online-betting-india/">Open guide →</a>
      </article>
      <article class="content-card">
        <div><h3>Aviator Betting India</h3><p>Crash game timing, cashout discipline and safer session habits for beginners.</p></div>
        <a class="text-link" href="/aviator-betting-india/">Read Aviator guide →</a>
      </article>
      <article class="content-card">
        <div><h3>Teen Patti and Rummy</h3><p>Card game interest, account setup, bonus checks and game menu navigation.</p></div>
        <a class="text-link" href="/teen-patti-online/">Explore card games →</a>
      </article>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
