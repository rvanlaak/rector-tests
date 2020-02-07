<?php
declare(strict_types=1);

namespace App\ArrayMerge;

final class Redirect
{
    private array $urlParts;

    function __construct($url, $redirectLocation)
    {
        $this->urlParts = array_merge($this->parseUrl($url), $this->parseUrl($redirectLocation));
    }

    /**
     * @return string[]
     */
    private function parseUrl(string $url): array
    {
        /** @var array<string,string> $urlParts */
        $urlParts = parse_url($url);

        return array_filter($urlParts);
    }
}
