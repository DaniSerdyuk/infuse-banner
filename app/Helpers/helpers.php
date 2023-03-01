<?php

/**
 * @param string      $key
 * @param string|null $default
 *
 * @return string|array|null
 */
function env(string $key, ?string $default = null): string|array|null
{
    return $_ENV[$key] ?? $default;
}
