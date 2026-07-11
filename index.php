<?php
header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
header("X-Content-Type-Options: nosniff");
header("X-Frame-Options: SAMEORIGIN");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=()");
header("Content-Security-Policy: default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; font-src 'self' https://fonts.gstatic.com data:; img-src 'self' data: blob: https:; media-src 'self' https://estrada-tan.vercel.app; connect-src 'self' https://*.supabase.co wss://*.supabase.co https://estrada-tan.vercel.app; frame-src 'self' https://www.youtube.com https://open.spotify.com https://yandex.com https://www.google.com; object-src 'none'; base-uri 'self'; frame-ancestors 'self'");
readfile(__DIR__ . '/app.html');
