<?php
require_once __DIR__ . '/includes/config.php';
$meta = ['canonical' => 'https://bestonlinebettingindia.com/'];
$reviewed_item = [
  '@type' => 'Organization',
  '@id' => $site['url'] . '/#organization',
  'name' => $site['name'],
  'url' => $site['url'],
];

$schema_reviews = array_map(static function ($review) use ($reviewed_item) {
  return [
    '@type' => 'Review',
    'name' => 'BOBI x YaarWin user note by ' . $review['name'],
    'author' => [
      '@type' => 'Person',
      'name' => $review['name'],
    ],
    'datePublished' => $review['date'],
    'reviewBody' => $review['text'],
    'itemReviewed' => $reviewed_item,
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
    '@id' => $site['url'] . '/#organization',
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
  ],
  ...$schema_reviews,
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
    'image' => [
      $site['url'] . '/assets/img/bobi-yaarwin-logo.webp',
      $site['url'] . '/assets/img/bobi-yaarwin-logo-header.webp',
    ],
    'author' => [
      '@type' => 'Organization',
      'name' => $site['name'],
      'url' => $site['url'] . '/',
    ],
    'publisher' => [
      '@type' => 'Organization',
      'name' => $site['name'],
      'logo' => [
        '@type' => 'ImageObject',
        'url' => $site['url'] . '/assets/img/favicon-192.png',
      ],
    ],
    'datePublished' => '2026-05-04T00:00:00+05:30',
    'dateModified' => '2026-05-07T00:00:00+05:30',
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

$cricket_matches = [
  [
    'league' => 'Indian Premier League',
    'teams' => 'LSG vs RCB',
    'team_a' => 'LSG',
    'team_b' => 'RCB',
    'date_label' => 'Today',
    'time_label' => '7:30 PM',
    'venue' => 'Ekana Cricket Stadium, Lucknow',
    'calendar_dates' => '20260507T140000Z/20260507T173000Z',
  ],
  [
    'league' => 'Indian Premier League',
    'teams' => 'DC vs KKR',
    'team_a' => 'DC',
    'team_b' => 'KKR',
    'date_label' => 'Tomorrow',
    'time_label' => '7:30 PM',
    'venue' => 'Arun Jaitley Stadium, Delhi',
    'calendar_dates' => '20260508T140000Z/20260508T173000Z',
  ],
  [
    'league' => 'Indian Premier League',
    'teams' => 'RR vs GT',
    'team_a' => 'RR',
    'team_b' => 'GT',
    'date_label' => 'May 9',
    'time_label' => '7:30 PM',
    'venue' => 'Sawai Mansingh Stadium, Jaipur',
    'calendar_dates' => '20260509T140000Z/20260509T173000Z',
  ],
];

function calendar_url(array $match): string {
  return 'https://calendar.google.com/calendar/render?' . http_build_query([
    'action' => 'TEMPLATE',
    'text' => 'BOBI Cricket Reminder: ' . $match['teams'],
    'dates' => $match['calendar_dates'],
    'details' => 'Cricket reminder from BOBI x YaarWin. Check the match guide before playing and keep betting decisions responsible.',
    'location' => $match['venue'],
  ]);
}
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
          <p class="hero-copy">Use BOBI as a clean YaarWin register and YaarWin login guide for Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, slots, live casino and fast UPI withdrawal guidance from one simple lobby-style platform.</p>
          <div class="hero-actions">
            <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Play Now</a>
            <a class="btn btn-ghost" href="/yaarwin-game-login/">YaarWin Login Guide</a>
          </div>
        </div>
        <aside class="hero-card" aria-label="YaarWin quick access">
          <h2>One Platform. Popular Games. Fast Access.</h2>
          <p>Start with the official YaarWin register path, keep your invite code ready, and check YaarWin login, payment and withdrawal details before playing.</p>
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

<section class="section" id="cricket-live">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">Live lobby</span>
        <h2>Trending YaarWin betting games Indian players check first</h2>
      </div>
      <p>These sections are built for real player intent: YaarWin login, YaarWin register, game choice, UPI recharge, bonus check and withdrawal readiness.</p>
    </div>
    <div class="cricket-lobby">
      <div class="cricket-main">
        <article class="cricket-scoreboard">
          <div class="scoreboard-head">
            <div>
              <span class="live-dot">Today Match</span>
              <h3>Lucknow Super Giants vs Royal Challengers Bengaluru</h3>
              <p>IPL 2026 • Ekana Cricket Stadium, Lucknow • Today, 7:30 PM IST</p>
            </div>
            <a class="reminder-btn" href="<?= e(calendar_url($cricket_matches[0])) ?>" target="_blank" rel="nofollow noopener" aria-label="Set reminder for Lucknow Super Giants vs Royal Challengers Bengaluru">🔔</a>
          </div>
          <div class="score-grid">
            <div class="team-score">
              <span class="team-badge">LSG</span>
              <div><strong>Lucknow Super Giants</strong><small>Home watchlist starts 7:30 PM IST</small></div>
            </div>
            <div class="team-score">
              <span class="team-badge gold">RCB</span>
              <div><strong>Royal Challengers Bengaluru</strong><small>Awaiting toss and playing XI</small></div>
            </div>
            <div class="score-status">
              <strong>Latest watch update</strong>
              <span>SRH posted 235/4; PBKS were 74/4 after 9 overs in the latest public feed.</span>
            </div>
          </div>
          <div class="market-list">
            <div class="market-row"><span>Match Winner Watchlist</span><strong>LSG vs RCB</strong></div>
            <div class="market-row"><span>Toss / Playing XI</span><strong>Check before first ball</strong></div>
            <div class="market-row"><span>Total Runs Range</span><strong>Review after pitch report</strong></div>
            <div class="market-row"><span>Search Intent</span><strong>YaarWin cricket betting India</strong></div>
          </div>
          <div class="cricket-article-links" aria-label="Cricket match articles">
            <a href="/srh-vs-pbks-235-4-recap-ipl-2026/">Read SRH vs PBKS 235/4 Recap</a>
            <a href="/dc-vs-csk-result-ipl-2026/">Read DC vs CSK Recap</a>
            <a href="/srh-vs-pbks-preview-ipl-2026/">Read SRH vs PBKS Preview</a>
          </div>
          <a class="cricket-link" href="/cricket-betting-india/">Open Cricket Betting Guide →</a>
        </article>
      </div>
      <aside class="cricket-sidebar">
        <article class="upcoming-card">
          <h3>Upcoming Matches</h3>
          <div class="upcoming-list">
            <?php foreach ($cricket_matches as $match): ?>
              <div class="upcoming-row">
                <div>
                  <small><?= e($match['league']) ?></small>
                  <strong><?= e($match['team_a']) ?> <span>vs</span> <?= e($match['team_b']) ?></strong>
                </div>
                <span><?= e($match['date_label']) ?><br><?= e($match['time_label']) ?></span>
                <a class="bell-link" href="<?= e(calendar_url($match)) ?>" target="_blank" rel="nofollow noopener" aria-label="Set reminder for <?= e($match['teams']) ?>">🔔</a>
              </div>
            <?php endforeach; ?>
          </div>
          <a class="view-all" href="/cricket-betting-india/">View Cricket Guide</a>
        </article>
        <article class="side-benefit green">
          <h3>Fast Withdrawals</h3>
          <p>Prepare UPI and wallet details before requesting cashout.</p>
        </article>
        <article class="side-benefit">
          <h3>Responsible Play</h3>
          <p>Check limits, local rules and match timing before entering a session.</p>
        </article>
      </aside>
    </div>
    <div class="dashboard-grid compact-dashboard">
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
      <article class="panel">
        <h3>Cricket Scores & Fixtures</h3>
        <div class="win-list">
          <div class="win-row"><span>Sunrisers Hyderabad 235/4 vs Punjab Kings 74/4</span><span class="amount">Latest feed</span></div>
          <div class="win-row"><span>Delhi Capitals 155/7 vs Chennai Super Kings 159/2</span><span class="amount">CSK won</span></div>
          <div class="win-row"><span>Lucknow Super Giants vs Royal Challengers Bengaluru</span><span class="amount">Today</span></div>
          <div class="win-row"><span>Delhi Capitals vs Kolkata Knight Riders</span><span class="amount">May 8</span></div>
        </div>
      </article>
    </div>
    <div class="match-article-grid">
      <article class="match-article-card">
        <img src="/assets/img/articles/cricket-betting-india-match.webp" alt="SRH vs PBKS 235 for 4 cricket betting India recap" loading="lazy" decoding="async" width="1200" height="675">
        <div>
          <span class="eyebrow">IPL 2026 Watch Recap</span>
          <h3>SRH vs PBKS 235/4: Hyderabad runfest before the next YaarWin cricket window</h3>
          <a class="text-link" href="/srh-vs-pbks-235-4-recap-ipl-2026/">Read watch recap</a>
        </div>
      </article>
      <article class="match-article-card">
        <img src="/assets/img/articles/cricket-betting-india-match.webp" alt="Cricket betting India match recap" loading="lazy" decoding="async" width="1200" height="675">
        <div>
          <span class="eyebrow">IPL 2026 Recap</span>
          <h3>DC vs CSK Result: Chennai chase fast in Delhi</h3>
          <a class="text-link" href="/dc-vs-csk-result-ipl-2026/">Read match recap</a>
        </div>
      </article>
      <article class="match-article-card">
        <img src="/assets/img/articles/cricket-betting-india-match.webp" alt="SRH vs PBKS cricket betting preview India" loading="lazy" decoding="async" width="1200" height="675">
        <div>
          <span class="eyebrow">Upcoming Match</span>
          <h3>SRH vs PBKS Preview: Hyderabad night session</h3>
          <a class="text-link" href="/srh-vs-pbks-preview-ipl-2026/">Read match preview</a>
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
        <article class="review-card">
          <div class="stars" aria-label="<?= e($review['rating']) ?> out of 5 stars">★★★★★</div>
          <p><?= e($review['text']) ?></p>
          <strong><?= e($review['name']) ?></strong>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
