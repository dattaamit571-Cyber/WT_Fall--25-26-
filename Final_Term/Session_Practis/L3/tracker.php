<?php
// tracker.php
session_start();

$page = basename($_SERVER['PHP_SELF']);
$now = time();

// ---------- Total visits cookie ----------
$totalVisits = isset($_COOKIE['total_visits']) ? (int)$_COOKIE['total_visits'] : 0;
$totalVisits++;
setcookie('total_visits', (string)$totalVisits, $now + 60 * 60 * 24 * 365, "/"); // keep long

// ---------- Unique visitor detection + first visit ----------
if (!isset($_COOKIE['visitor_id'])) {
    $visitorId = bin2hex(random_bytes(8));
    setcookie('visitor_id', $visitorId, $now + 60 * 60 * 24 * 365, "/");

    // store first visit timestamp cookie
    setcookie('first_visit', (string)$now, $now + 60 * 60 * 24 * 365, "/");
}

// ---------- Last visit timestamp ----------
setcookie('last_visit', (string)$now, $now + 60 * 60 * 24 * 365, "/");

// ---------- Track last 5 visits with timestamps in a cookie ----------
$history = [];
if (isset($_COOKIE['visit_history'])) {
    $decoded = json_decode($_COOKIE['visit_history'], true);
    if (is_array($decoded)) $history = $decoded;
}
array_unshift($history, ['page' => $page, 'time' => $now]);
$history = array_slice($history, 0, 5);
setcookie('visit_history', json_encode($history), $now + 60 * 60 * 24 * 365, "/");

// ---------- Count visits in last 24 hours (from cookie array) ----------
$visitsLast24h = 0;
$cutoff = $now - 24 * 60 * 60;
foreach ($history as $h) {
    if (($h['time'] ?? 0) >= $cutoff) $visitsLast24h++;
}

// ---------- Session duration + pages visited in session ----------
if (!isset($_SESSION['session_start'])) {
    $_SESSION['session_start'] = $now;
}
if (!isset($_SESSION['pages'])) {
    $_SESSION['pages'] = [];
}
$_SESSION['pages'][] = $page;
// optional: keep unique list
$_SESSION['pages'] = array_values(array_unique($_SESSION['pages']));

$sessionDuration = $now - (int)$_SESSION['session_start'];

// Make variables available to pages:
$firstVisitTs = isset($_COOKIE['first_visit']) ? (int)$_COOKIE['first_visit'] : null;
$lastVisitTs  = isset($_COOKIE['last_visit']) ? (int)$_COOKIE['last_visit'] : null;
$visitHistory = $history;
$pagesThisSession = $_SESSION['pages'];
