<?php
declare(strict_types=1);

$privateBot = dirname(__DIR__, 2) . '/private_bot/bot.php';

if (!is_file($privateBot)) {
  http_response_code(500);
  error_log('BOBI Telegram bot private entry file is missing: ' . $privateBot);
  echo 'Bot private entry is not configured.';
  exit;
}

require $privateBot;
