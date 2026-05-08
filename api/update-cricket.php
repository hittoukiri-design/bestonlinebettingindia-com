<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'error' => 'method_not_allowed']);
  exit;
}

$privateConfig = dirname(__DIR__, 2) . '/private_bot/config.php';
$config = is_file($privateConfig) ? require $privateConfig : [];
$expected = (string)($config['BOBI_CRICKET_SYNC_SECRET'] ?? $config['WEBHOOK_SECRET'] ?? '');
$provided = (string)($_SERVER['HTTP_X_BOBI_CRICKET_SECRET'] ?? $_SERVER['HTTP_X_PANEL_AUTO_SYNC_SECRET'] ?? '');

if ($expected === '' || !hash_equals($expected, $provided)) {
  http_response_code(403);
  echo json_encode(['ok' => false, 'error' => 'forbidden']);
  exit;
}

define('BOBI_CRICKET_INTERNAL', true);
$result = require dirname(__DIR__) . '/tools/update-cricket-cache.php';
echo json_encode(is_array($result) ? $result : ['ok' => false, 'error' => 'sync_failed'], JSON_UNESCAPED_SLASHES);
