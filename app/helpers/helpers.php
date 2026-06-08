<?php

/**
 * Returns an active CSS class if the given link matches the current route.
 * Otherwise returns empty string.
 */
function isLinkActive(string $path): string {
    $current = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

    return $current === $path ? "menu-link--active" : "";
}

/**
 * Helper. Joins the site URL with a given path.
 */
function asset(string $path): string {
    return rtrim(BASE_URL, "/") . "/" . ltrim($path, "/");
}