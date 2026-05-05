<?php
$site = [
  'name' => 'BOBI x YaarWin',
  'short_name' => 'BOBI',
  'url' => 'https://bestonlinebettingindia.com',
  'register_url' => 'https://yaarwin.org/#/register?invitationCode=72238107987',
  'telegram_url' => 'https://t.me/bestonlinebettingindia',
  'invite_code' => '72238107987',
];

$site_reviews = [
  [
    'name' => 'Rohit K.',
    'rating' => 5,
    'date' => '2026-05-01',
    'text' => 'The YaarWin access flow felt clear on mobile. I checked the invite code first, reviewed the login page, and understood the wallet steps before starting.',
  ],
  [
    'name' => 'Priya S.',
    'rating' => 5,
    'date' => '2026-05-02',
    'text' => 'The guides made it easier to compare Aviator, Teen Patti and Wingo before opening the account area. The human teacher link is helpful when payment details need checking.',
  ],
  [
    'name' => 'Amit R.',
    'rating' => 5,
    'date' => '2026-05-03',
    'text' => 'I liked having login, bonus and withdrawal guidance in one place. It feels more organized than jumping between random links and chats.',
  ],
];

$games = [
  ['name' => 'Wingo', 'label' => 'Colour Prediction', 'image' => '/assets/img/provider-games/wingo-88.webp', 'url' => '/wingo-game-india/'],
  ['name' => 'Aviator', 'label' => 'Crash Game', 'image' => '/assets/img/provider-games/aviator-88.webp', 'url' => '/aviator-betting-india/'],
  ['name' => 'Teen Patti', 'label' => 'Card Game', 'image' => '/assets/img/provider-games/teen-patti-88.webp', 'url' => '/teen-patti-online/'],
  ['name' => 'Cricket', 'label' => 'Sports Betting', 'image' => '/assets/img/provider-games/cricket-exchange-88.webp', 'url' => '/cricket-betting-india/'],
  ['name' => 'Rummy', 'label' => 'Real Money Cards', 'image' => '/assets/img/provider-games/teen-patti-88.webp', 'url' => '/rummy-game-india/'],
  ['name' => 'Slots', 'label' => 'Jackpot Games', 'image' => '/assets/img/provider-games/wingo-88.webp', 'url' => '/slots-game-india/'],
  ['name' => 'Live Casino', 'label' => 'Real Dealer', 'image' => '/assets/img/provider-games/teen-patti-88.webp', 'url' => '/live-casino-india/'],
  ['name' => 'Andar Bahar', 'label' => 'Fast Card Round', 'image' => '/assets/img/provider-games/teen-patti-88.webp', 'url' => '/andar-bahar-online/'],
];

function e($value) {
  return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function page_meta($overrides = []) {
  $defaults = [
    'title' => 'Best Online Betting India 2026 | YaarWin, Aviator, Teen Patti, Rummy & Fast Withdrawal',
    'description' => 'Best Online Betting India guide for YaarWin login, Aviator, Teen Patti, Rummy, Wingo colour prediction, cricket betting, UPI payments, bonuses and fast withdrawal access.',
    'canonical' => 'https://bestonlinebettingindia.com/',
  ];
  return array_merge($defaults, $overrides);
}
?>
