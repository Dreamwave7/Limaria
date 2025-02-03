<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';

    protected $description = 'Generate sitemap';

    public function handle()
    {
        SitemapGenerator::create('https://limaria.com.ua')
            ->hasCrawled(function (Url $url) {
                if ($url->segment(1) === 'contact') {
                    $url->setPriority(0.9)
                        ->setLastModificationDate(Carbon::create('2016', '1', '1'));
                }

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }

}
