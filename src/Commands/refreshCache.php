<?php namespace Omt\CoreTheme\Commands;

use Omt\CoreTheme\Facades\Theme;

class refreshCache extends baseCommand
{
    protected $signature = 'theme:refresh-cache';
    protected $description = 'Rebuilds the cache of "theme.json" files for each theme';

    public function handle()
    {
        // Rebuild Themes Cache
        Theme::rebuildCache();

        $this->info("Themes cache was refreshed. Currently theme caching is: " . (Theme::cacheEnabled() ? "ENABLED" : "DISABLED"));
    }

}
