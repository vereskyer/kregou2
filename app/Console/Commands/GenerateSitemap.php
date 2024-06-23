<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $sitemap = Sitemap::create();

        // 获取所有 GET 路由
        $routes = Route::getRoutes();
    
        foreach ($routes as $route) {
            if ($route->methods()[0] === 'GET' && !in_array('admin', $route->middleware())) {
                $sitemap->add(Url::create($route->uri())->setPriority(0.8));
            }
        }
    
        $sitemap->writeToFile(public_path('sitemap.xml'));
    
        return 'Sitemap generated!';
    }
}
