<?php
$site = [
  'name' => 'BOBI x YaarWin',
  'short_name' => 'BOBI',
  'url' => 'https://bestonlinebettingindia.com',
  'register_url' => 'https://yaarwin.org/#/register?invitationCode=72238107987',
  'login_url' => 'https://yaarwin.org/#/login',
  'telegram_url' => 'https://t.me/YaarWinappBot',
  'invite_code' => '72238107987',
];

$games = [
  ['name' => 'Wingo', 'label' => 'Colour Prediction', 'image' => '/assets/img/provider-games/wingo.webp', 'url' => '/wingo-game-india/'],
  ['name' => 'Aviator', 'label' => 'Crash Game', 'image' => '/assets/img/provider-games/aviator.webp', 'url' => '/aviator-betting-india/'],
  ['name' => 'Teen Patti', 'label' => 'Card Game', 'image' => '/assets/img/provider-games/teen-patti.webp', 'url' => '/teen-patti-online/'],
  ['name' => 'Cricket', 'label' => 'Sports Betting', 'image' => '/assets/img/provider-games/cricket-exchange.webp', 'url' => '/cricket-betting-india/'],
  ['name' => 'Rummy', 'label' => 'Real Money Cards', 'image' => '/assets/img/provider-games/teen-patti.webp', 'url' => '/rummy-game-india/'],
  ['name' => 'Slots', 'label' => 'Jackpot Games', 'image' => '/assets/img/provider-games/wingo.webp', 'url' => '/slots-game-india/'],
  ['name' => 'Live Casino', 'label' => 'Real Dealer', 'image' => '/assets/img/provider-games/teen-patti.webp', 'url' => '/live-casino-india/'],
  ['name' => 'Andar Bahar', 'label' => 'Fast Card Round', 'image' => '/assets/img/provider-games/teen-patti.webp', 'url' => '/andar-bahar-online/'],
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
