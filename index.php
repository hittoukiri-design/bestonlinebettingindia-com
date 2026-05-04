<?php
require_once __DIR__ . '/includes/config.php';
$meta = ['canonical' => 'https://bestonlinebettingindia.com/'];
$schema_reviews = array_map(static function ($review) use ($site) {
  return [
    '@type' => 'Review',
    'author' => [
      '@type' => 'Person',
      'name' => $review['name'],
    ],
    'datePublished' => $review['date'],
    'reviewBody' => $review['text'],
    'itemReviewed' => [
      '@type' => 'Organization',
      'name' => $site['name'],
      'url' => $site['url'],
    ],
    'reviewRating' => [
      '@type' => 'Rating',
      'ratingValue' => (string) $review['rating'],
      'bestRating' => '5',
      'worstRating' => '1',
    ],
  ];
}, $site_reviews);

$schema_items = [
  [
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
      [
        '@type' => 'ListItem',
        'position' => 1,
        'name' => 'Home',
        'item' => $site['url'] . '/',
      ],
    ],
  ],
  [
    '@type' => 'Organization',
    'name' => $site['name'],
    'url' => $site['url'],
    'logo' => $site['url'] . '/assets/img/favicon-192.png',
    'sameAs' => [
      'https://yaarwinapp.co/',
      $site['telegram_url'],
    ],
    'aggregateRating' => [
      '@type' => 'AggregateRating',
      'ratingValue' => '4.8',
      'reviewCount' => '3',
      'bestRating' => '5',
      'worstRating' => '1',
    ],
    'review' => $schema_reviews,
  ],
  [
    '@type' => 'SoftwareApplication',
    'name' => 'YaarWin',
    'applicationCategory' => 'GameApplication',
    'operatingSystem' => 'Android, iOS, Web',
    'url' => $site['register_url'],
    'description' => 'YaarWin access for Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, live casino, UPI guidance and fast withdrawal support.',
    'offers' => [
      '@type' => 'Offer',
      'price' => '0',
      'priceCurrency' => 'INR',
    ],
    'aggregateRating' => [
      '@type' => 'AggregateRating',
      'ratingValue' => '4.8',
      'reviewCount' => '3',
      'bestRating' => '5',
      'worstRating' => '1',
    ],
  ],
  [
    '@type' => 'FAQPage',
    'mainEntity' => [
      [
        '@type' => 'Question',
        'name' => 'What is BOBI x YaarWin?',
        'acceptedAnswer' => [
          '@type' => 'Answer',
          'text' => 'BOBI x YaarWin is a clean India-focused access hub for YaarWin login, registration, popular betting games, UPI payment guidance, bonuses and withdrawal readiness.',
        ],
      ],
      [
        '@type' => 'Question',
        'name' => 'Which games are highlighted?',
        'acceptedAnswer' => [
          '@type' => 'Answer',
          'text' => 'The main highlighted categories are Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, slots, live casino and Andar Bahar.',
        ],
      ],
      [
        '@type' => 'Question',
        'name' => 'How do I register with the YaarWin invite code?',
        'acceptedAnswer' => [
          '@type' => 'Answer',
          'text' => 'Use the official register button on this page. The invite code is 72238107987 and should remain fixed during registration.',
        ],
      ],
    ],
  ],
  [
    '@type' => 'Article',
    'headline' => 'Best Online Betting India with YaarWin Games',
    'description' => $meta['description'] ?? page_meta()['description'],
    'mainEntityOfPage' => $site['url'] . '/',
    'author' => [
      '@type' => 'Organization',
      'name' => $site['name'],
    ],
    'publisher' => [
      '@type' => 'Organization',
      'name' => $site['name'],
      'logo' => [
        '@type' => 'ImageObject',
        'url' => $site['url'] . '/assets/img/favicon-192.png',
      ],
    ],
    'datePublished' => '2026-05-04',
    'dateModified' => '2026-05-04',
  ],
  [
    '@type' => 'ItemList',
    'name' => 'Popular YaarWin Betting Games India',
    'itemListElement' => array_map(static function ($game, $index) use ($site) {
      return [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'url' => $site['url'] . $game['url'],
        'name' => $game['name'] . ' ' . $game['label'],
      ];
    }, $games, array_keys($games)),
  ],
];
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
            <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Play Now</a>
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
        <div class="live-card__top">
          <span>Today • 7:30 PM IST</span>
          <strong>Match 47</strong>
        </div>
        <h3>Cricket Match Spotlight</h3>
        <p>Mumbai Indians vs Lucknow Super Giants at Wankhede Stadium, Mumbai. High-interest T20 match timing for Indian cricket betting readers.</p>
        <div class="match">
          <span>MI</span>
          <span>VS</span>
          <span>LSG</span>
        </div>
        <div class="cricket-tags">
          <span>Wankhede Stadium</span>
          <span>IPL 2026</span>
          <span>Match build-up</span>
        </div>
        <a class="cricket-link" href="/cricket-betting-india/">Open Cricket Betting Guide →</a>
      </article>
      <article class="panel">
        <h3>Next Cricket Fixtures</h3>
        <div class="win-list">
          <div class="win-row"><span>Delhi Capitals vs Chennai Super Kings</span><span class="amount">May 5</span></div>
          <div class="win-row"><span>Sunrisers Hyderabad vs Punjab Kings</span><span class="amount">May 6</span></div>
          <div class="win-row"><span>Lucknow Super Giants vs Royal Challengers Bengaluru</span><span class="amount">May 7</span></div>
          <div class="win-row"><span>Delhi Capitals vs Kolkata Knight Riders</span><span class="amount">May 8</span></div>
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
        <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Claim Access</a>
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
        <span class="eyebrow">Player guide hub</span>
        <h2>BOBI x YaarWin guides for safer first sessions</h2>
      </div>
      <p>Helpful pages stay below the lobby so visitors can move from game choice to login, bonus, payment and withdrawal checks without confusion.</p>
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
<section class="section testimonial-section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">Player notes</span>
        <h2>What users like before joining YaarWin</h2>
      </div>
      <p>Short experience notes focused on access, guidance and support readiness for Indian users.</p>
    </div>
    <div class="review-grid">
      <?php foreach ($site_reviews as $review): ?>
        <article class="review-card" itemprop="review" itemscope itemtype="https://schema.org/Review">
          <div class="stars" aria-label="<?= e($review['rating']) ?> out of 5 stars">★★★★★</div>
          <p itemprop="reviewBody"><?= e($review['text']) ?></p>
          <strong itemprop="author"><?= e($review['name']) ?></strong>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
