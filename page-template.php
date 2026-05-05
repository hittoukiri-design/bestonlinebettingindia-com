<?php
require_once __DIR__ . '/includes/config.php';

$slug = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$promotion_cards = [
  [
    'title' => 'YaarWin Daily Salary Promotion India: Do Not Miss the Promoter Window',
    'label' => 'YaarWin Promotion',
    'description' => 'Daily salary promotion guide for serious YaarWin promoters in India, covering referral habits, support readiness and the timing window before attention rises.',
    'image' => '/assets/img/promos/daily-salary.webp',
    'url' => 'https://yaarwinapp.co/blog/yaarwin-daily-salary-promotion-india/',
  ],
  [
    'title' => 'YaarWin Referral Promotion India: Build Your Network Before the Next Wave',
    'label' => 'YaarWin Promotion',
    'description' => 'Referral promotion guide for YaarWin users who want to build a cleaner member-get-member flow before launch momentum rises.',
    'image' => '/assets/img/promos/referral.webp',
    'url' => 'https://yaarwinapp.co/blog/yaarwin-referral-promotion-india/',
  ],
  [
    'title' => 'YaarWin Deposit Bonus India: Claim the Offer Before Your First Serious Session',
    'label' => 'YaarWin Promotion',
    'description' => 'Deposit bonus promotion guide explaining how adult users should prepare wallet details, screenshots, terms and first-session limits.',
    'image' => '/assets/img/promos/deposit-bonus.webp',
    'url' => 'https://yaarwinapp.co/blog/yaarwin-deposit-bonus-promotion-india/',
  ],
  [
    'title' => 'YaarWin Ads Fee Promotion India: Turn Promotion Effort Into a Smarter Opportunity',
    'label' => 'YaarWin Promotion',
    'description' => 'Ads fee promotion guide for users planning traffic, community posting or paid promotion with cleaner records and better support context.',
    'image' => '/assets/img/promos/ads-fee.webp',
    'url' => 'https://yaarwinapp.co/blog/yaarwin-ads-fee-promotion-india/',
  ],
];

$pages = [
  'best-online-betting-india' => [
    'title' => 'Best Online Betting India 2026 | YaarWin, Aviator, Teen Patti, Rummy & Cricket Betting',
    'description' => 'Best Online Betting India guide with YaarWin access, Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, UPI recharge, bonuses and fast withdrawal.',
    'h1' => 'Best Online Betting India with YaarWin Access',
    'kicker' => 'India betting guide',
    'intro' => 'BOBI x YaarWin gives Indian players a clean starting point for popular online betting games, account access, payment checks and safer first-session habits.',
    'sections' => [
      ['Why YaarWin fits Indian betting intent', 'YaarWin is presented as a simple access path for players who want Aviator, Teen Patti, Rummy, Wingo colour prediction, slots, cricket betting and live casino categories in one mobile-friendly place. The goal is not only to start fast, but to understand login, bonus, recharge and withdrawal steps before adding funds.'],
      ['Popular games to compare before playing', 'Aviator is popular because cashout timing feels fast and exciting. Teen Patti, Rummy and Andar Bahar keep card-game players active. Wingo and colour prediction attract users who like short rounds. Cricket betting remains one of the strongest India-focused topics during match season.'],
      ['Payment and withdrawal readiness', 'Before playing, users should keep account details consistent, confirm UPI or wallet information, understand bonus terms and avoid switching payment methods too often during active sessions.'],
    ],
  ],
  'yaarwin-game-login' => [
    'title' => 'YaarWin Game Login India | Aviator, Teen Patti, Rummy, Wingo & Fast Withdrawal',
    'description' => 'YaarWin Game Login India guide for mobile account access, register path, invite code, Aviator, Teen Patti, Rummy, Wingo, cricket betting, UPI and fast withdrawal.',
    'h1' => 'YaarWin Game Login India',
    'kicker' => 'Login and register guide',
    'intro' => 'Use this page before opening your YaarWin account area, checking games, adding funds or asking a human teacher for help.',
    'sections' => [
      ['How YaarWin login should work', 'Open the official access path, use your registered mobile details, keep OTP and password private, then review wallet, bonus and game menus before placing any real money play.'],
      ['Register with the locked invite code', 'The invite code should stay fixed at 72238107987 so new users follow the intended YaarWin access path. If the code changes or the page looks unfamiliar, stop and contact support first.'],
      ['Game menu after login', 'After login, users usually compare Aviator, Wingo, Teen Patti, Rummy, slots, cricket betting and live casino categories. Start small, check rules and avoid chasing losses.'],
    ],
  ],
  'aviator-betting-india' => [
    'title' => 'Aviator Betting India | YaarWin Crash Game, Cashout Timing & Safe Play Guide',
    'description' => 'Aviator Betting India guide for YaarWin users covering crash game basics, cashout timing, bankroll discipline, login access, UPI and responsible play.',
    'h1' => 'Aviator Betting India with YaarWin',
    'kicker' => 'Crash game guide',
    'intro' => 'Aviator stays hot in India because every round feels quick, but the safest users treat it as entertainment with strict limits.',
    'sections' => [
      ['How Aviator works', 'Aviator is a multiplier crash game. The multiplier rises while the round is active, and players must cash out before the round ends. Waiting longer can increase payout, but it also increases risk.'],
      ['Cashout discipline', 'Set a target before the round begins. Many beginners use small amounts and lower cashout goals while learning the pattern of the game interface.'],
      ['YaarWin access and safety', 'Use the YaarWin login path, keep OTP private, and avoid screenshots or chats from unknown accounts that claim guaranteed Aviator results.'],
    ],
  ],
  'teen-patti-online' => [
    'title' => 'Teen Patti Online India | YaarWin Card Games, Rummy, Andar Bahar & Bonus Guide',
    'description' => 'Teen Patti Online India guide with YaarWin access, Rummy, Andar Bahar, live casino card games, register steps, bonus checks and safer play reminders.',
    'h1' => 'Teen Patti Online India and YaarWin Card Games',
    'kicker' => 'Card game lobby',
    'intro' => 'Teen Patti, Rummy and Andar Bahar are major India card-game categories, especially for users who prefer rounds that feel social and familiar.',
    'sections' => [
      ['Teen Patti interest in India', 'Teen Patti remains familiar to many Indian players, but online play still needs budget control and responsible session limits.'],
      ['Rummy and Andar Bahar', 'Rummy is often searched by users who prefer card strategy, while Andar Bahar is faster and simpler. YaarWin users can compare both before choosing a session.'],
      ['Bonus and wallet checks', 'Read bonus terms before adding funds. Card game promos can look attractive, but users should understand wagering rules and withdrawal conditions.'],
    ],
  ],
  'rummy-game-india' => [
    'title' => 'Rummy Game India | YaarWin Card Game Access, Login, Bonus & Safer Play',
    'description' => 'Rummy Game India guide for YaarWin users covering card game access, login, bonus terms, wallet checks, UPI payment guidance and responsible play.',
    'h1' => 'Rummy Game India with YaarWin Access',
    'kicker' => 'Rummy betting guide',
    'intro' => 'Rummy attracts Indian players who like card decisions, sequence building and longer sessions compared with crash or colour prediction games.',
    'sections' => [
      ['Why Rummy gets attention', 'Rummy feels familiar and skill-oriented, but real money play still requires personal limits and clear bankroll discipline.'],
      ['Before starting', 'Check login details, wallet status, bonus terms and support options before joining any Rummy table.'],
      ['Related YaarWin games', 'Users who like Rummy may also compare Teen Patti, Andar Bahar, live casino tables and cricket betting guides.'],
    ],
  ],
  'wingo-game-india' => [
    'title' => 'Wingo Game India | YaarWin Colour Prediction, Fast Rounds & Withdrawal Guide',
    'description' => 'Wingo Game India guide for YaarWin colour prediction players covering fast rounds, login, bonus checks, UPI recharge and withdrawal readiness.',
    'h1' => 'Wingo Game India and YaarWin Colour Prediction',
    'kicker' => 'Colour prediction guide',
    'intro' => 'Wingo and colour prediction games are popular because rounds are short, simple and easy to understand on mobile.',
    'sections' => [
      ['How Wingo-style rounds feel', 'Users usually choose colours, numbers or round options depending on the interface. The simplicity is attractive, but outcomes are still risky.'],
      ['Start small', 'Short rounds can make users play too quickly. Set a limit before starting and avoid increasing bet size after losses.'],
      ['YaarWin login path', 'Use the official YaarWin access path and confirm payment details before entering fast-round categories.'],
    ],
  ],
  'cricket-betting-india' => [
    'title' => 'Cricket Betting India | YaarWin Sports Betting, IPL Games, UPI & Fast Withdrawal',
    'description' => 'Cricket Betting India guide with YaarWin access, IPL-style match interest, sports betting basics, UPI payment guidance and fast withdrawal checks.',
    'h1' => 'Cricket Betting India with YaarWin',
    'kicker' => 'Sports betting guide',
    'intro' => 'Cricket betting is one of the strongest India search intents, especially during IPL-style match periods and live sports schedules.',
    'sections' => [
      ['Match-day betting interest', 'Indian users often compare teams, odds, timing and wallet readiness before joining sports betting sessions.'],
      ['Keep it responsible', 'Live sports can move quickly. Decide your budget before match time and do not chase losses after sudden odds changes.'],
      ['Related betting games', 'Cricket users often explore Aviator, Teen Patti, Rummy and slots when sports events are not active.'],
    ],
  ],
  'fast-withdrawal-betting-india' => [
    'title' => 'Fast Withdrawal Betting India | YaarWin UPI Cashout, Wallet & Payment Guide',
    'description' => 'Fast Withdrawal Betting India guide for YaarWin users covering UPI cashout readiness, wallet details, order checks, account safety and common delay reasons.',
    'h1' => 'Fast Withdrawal Betting India with YaarWin',
    'kicker' => 'UPI and payout guide',
    'intro' => 'Fast withdrawal starts before the cashout request. The safest users keep account details, wallet details and payment screenshots ready.',
    'sections' => [
      ['Prepare before requesting withdrawal', 'Use correct wallet information, avoid repeated changes and make sure your account details match the payment method.'],
      ['Common delay reasons', 'Delays often come from incomplete account details, bank or UPI review, mismatched information, bonus terms or repeated requests during busy periods.'],
      ['When to contact a human teacher', 'If a withdrawal is pending or failed and you have an order number or transfer proof, contact the YaarWin human teacher instead of submitting random repeated requests.'],
    ],
  ],
  'slots-game-india' => [
    'title' => 'Slots Game India | YaarWin Jackpot Games, Bonus Checks & Fast Withdrawal Guide',
    'description' => 'Slots Game India guide for YaarWin users covering jackpot games, login access, bonus terms, wallet safety, UPI payments and responsible play.',
    'h1' => 'Slots Game India with YaarWin',
    'kicker' => 'Jackpot game guide',
    'intro' => 'Slots attract players who want simple rounds, jackpot themes and bonus-driven entertainment.',
    'sections' => [
      ['Slots and bonus terms', 'Read bonus rules carefully before playing slots, because offers can have conditions that affect withdrawal timing.'],
      ['Session control', 'Slots move quickly. Decide how many rounds or how much budget you will use before opening the game.'],
      ['Related categories', 'Players who like slots often compare live casino, Aviator and Wingo colour prediction games.'],
    ],
  ],
  'live-casino-india' => [
    'title' => 'Live Casino India | YaarWin Real Dealer, Teen Patti, Baccarat & Roulette Guide',
    'description' => 'Live Casino India guide with YaarWin access, real dealer games, Teen Patti, Baccarat, Roulette, wallet checks and responsible betting reminders.',
    'h1' => 'Live Casino India with YaarWin',
    'kicker' => 'Real dealer guide',
    'intro' => 'Live casino users usually want real dealer energy, card tables and familiar games in one mobile-friendly lobby.',
    'sections' => [
      ['Popular live casino games', 'Teen Patti, Baccarat, Roulette and card tables are common live casino searches for Indian players.'],
      ['Before joining a live table', 'Check your budget, connection stability and wallet readiness before opening a live dealer game.'],
      ['Human teacher support', 'If login or payment issues appear, use the support path before continuing.'],
    ],
  ],
  'andar-bahar-online' => [
    'title' => 'Andar Bahar Online India | YaarWin Card Game Access and Betting Guide',
    'description' => 'Andar Bahar Online India guide for YaarWin users covering card game access, login, bonus checks, UPI payments and responsible session limits.',
    'h1' => 'Andar Bahar Online India with YaarWin',
    'kicker' => 'Fast card game guide',
    'intro' => 'Andar Bahar is a fast card-game category that appeals to users who want simple rules and quick rounds.',
    'sections' => [
      ['Why Andar Bahar is searched', 'The rules are easy to understand, but fast rounds can lead to rushed decisions.'],
      ['Play with limits', 'Set a budget before starting and do not increase stake size after a losing streak.'],
      ['YaarWin card game lobby', 'Compare Andar Bahar with Teen Patti, Rummy and live casino tables before choosing a game.'],
    ],
  ],
  'blog' => [
    'title' => 'YaarWin Promotion Guides India | Salary, Referral, Deposit Bonus & Ads Fee',
    'description' => 'YaarWin promotion guides for India covering daily salary, referral rewards, deposit bonus, ads fee support, account readiness and safer first-session habits.',
    'h1' => 'YaarWin Promotion Guides India',
    'kicker' => 'Promotion guide hub',
    'intro' => 'Use this promotion lobby as a clean starting point before you register, promote or prepare your first serious session with YaarWin.',
    'sections' => [
      ['Why this hub exists', 'BOBI x YaarWin gives readers a polished first stop, then sends serious users to the original YaarWin promotion guides for full details.'],
    ],
    'promo_hub' => true,
  ],
  'guides' => [
    'title' => 'YaarWin Promotion Guides India | Salary, Referral, Deposit Bonus & Ads Fee',
    'description' => 'YaarWin promotion guides for India covering daily salary, referral rewards, deposit bonus, ads fee support, account readiness and safer first-session habits.',
    'h1' => 'YaarWin Promotion Guides India',
    'kicker' => 'Promotion guide hub',
    'intro' => 'Use this promotion lobby as a clean starting point before you register, promote or prepare your first serious session with YaarWin.',
    'sections' => [],
    'promo_hub' => true,
  ],
  'how-to' => [
    'title' => 'How to Start with YaarWin Promotions | India Bonus, Referral & Promoter Guides',
    'description' => 'How to start with YaarWin promotions in India, including daily salary, referral, deposit bonus, ads fee guidance, account checks and human teacher support.',
    'h1' => 'How to Start with YaarWin Promotions',
    'kicker' => 'How-to hub',
    'intro' => 'Start here if you want a simple path from BOBI x YaarWin into the original YaarWin promotion guides and official access links.',
    'sections' => [],
    'promo_hub' => true,
  ],
];

$data = $pages[$slug] ?? null;
if (!$data) {
  http_response_code(404);
  $data = [
    'title' => 'Page Not Found | BOBI x YaarWin',
    'description' => 'The requested BOBI x YaarWin page could not be found.',
    'h1' => 'Page Not Found',
    'kicker' => '404',
    'intro' => 'The page you are looking for is not available. Return to the BOBI x YaarWin lobby.',
    'sections' => [],
  ];
}

$meta = [
  'title' => $data['title'],
  'description' => $data['description'],
  'canonical' => $site['url'] . '/' . ($slug ? $slug . '/' : ''),
  'robots' => $slug ? 'index, follow' : 'noindex, follow',
];
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
      [
        '@type' => 'ListItem',
        'position' => 2,
        'name' => $data['h1'],
        'item' => $meta['canonical'],
      ],
    ],
  ],
  [
    '@type' => 'Article',
    'headline' => $data['h1'],
    'description' => $data['description'],
    'mainEntityOfPage' => $meta['canonical'],
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
];
if (!empty($data['promo_hub'])) {
  $schema_items[] = [
    '@type' => 'ItemList',
    'name' => 'YaarWin Promotion Guides India',
    'itemListElement' => array_map(static function ($card, $index) {
      return [
        '@type' => 'ListItem',
        'position' => $index + 1,
        'url' => $card['url'],
        'name' => $card['title'],
      ];
    }, $promotion_cards, array_keys($promotion_cards)),
  ];
}
require __DIR__ . '/includes/header.php';
?>
<?php if (!empty($data['promo_hub'])): ?>
<section class="page-hero promo-hero">
  <div class="container">
    <span class="eyebrow"><?= e($data['kicker']) ?></span>
    <h1><?= e($data['h1']) ?></h1>
    <p><?= e($data['intro']) ?></p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Open YaarWin Register</a>
      <a class="btn btn-ghost" href="/yaarwin-game-login/">Read Login Guide</a>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="section-head">
      <div>
        <span class="eyebrow">Featured promotion guides</span>
        <h2>Four YaarWin articles worth reading before you act</h2>
      </div>
      <p>Each card gives a short summary here, then opens the complete YaarWin article for deeper details. This keeps the journey simple: quick comparison here, full context on YaarWinApp.co.</p>
    </div>
    <div class="promotion-grid">
      <?php foreach ($promotion_cards as $card): ?>
        <article class="promotion-card">
          <img src="<?= e($card['image']) ?>" alt="<?= e($card['title']) ?>" loading="lazy" decoding="async" width="520" height="782">
          <div class="promotion-card__body">
            <span><?= e($card['label']) ?></span>
            <h3><?= e($card['title']) ?></h3>
            <p><?= e($card['description']) ?></p>
            <a class="btn btn-primary" href="<?= e($card['url']) ?>" rel="noopener" target="_blank">Read Promotion Guide</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="promo-support">
      <article>
        <span class="eyebrow">Clean promotion path</span>
        <h2>BOBI works as a simple YaarWin promotion lobby</h2>
        <p>This page helps Indian users compare salary, referral, deposit bonus and ads fee opportunities from one clean screen. Use the summaries to choose what matters, then open the original YaarWin guide when you want full details.</p>
      </article>
      <article>
        <h3>Continue with the YaarWin access path</h3>
        <p>Before acting on any promotion, users should understand login, registration, invite code, game categories and payment readiness.</p>
        <div class="link-row">
          <a href="/yaarwin-game-login/">YaarWin Game Login</a>
          <a href="/best-online-betting-india/">Best Online Betting India</a>
          <a href="/fast-withdrawal-betting-india/">Fast Withdrawal Guide</a>
          <a href="<?= e($site['telegram_url']) ?>" rel="nofollow noopener" target="_blank">Human Teacher</a>
        </div>
      </article>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; return; ?>
<?php endif; ?>
<section class="page-hero">
  <div class="container">
    <span class="eyebrow"><?= e($data['kicker']) ?></span>
    <h1><?= e($data['h1']) ?></h1>
    <p><?= e($data['intro']) ?></p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Register with YaarWin</a>
      <a class="btn btn-ghost" href="/yaarwin-game-login/">Read Access Guide</a>
    </div>
  </div>
</section>
<article class="container article-body">
  <?php foreach ($data['sections'] as $section): ?>
    <h2><?= e($section[0]) ?></h2>
    <p><?= e($section[1]) ?></p>
  <?php endforeach; ?>
  <h2>Popular YaarWin game links</h2>
  <p>Continue with <a href="/aviator-betting-india/">Aviator betting India</a>, <a href="/teen-patti-online/">Teen Patti online</a>, <a href="/wingo-game-india/">Wingo colour prediction</a>, <a href="/cricket-betting-india/">cricket betting India</a>, <a href="/fast-withdrawal-betting-india/">fast withdrawal betting India</a> and the main <a href="/yaarwin-game-login/">YaarWin Game Login</a> guide.</p>
  <div class="cta-band">
    <h2>Ready to start with YaarWin?</h2>
    <p>If you are ready to play smarter with BOBI x YaarWin, use the register button below and keep your invite code fixed.</p>
    <a class="btn btn-primary" href="<?= e($site['register_url']) ?>" rel="nofollow noopener" target="_blank">Open YaarWin Register</a>
  </div>
</article>
<?php require __DIR__ . '/includes/footer.php'; ?>
