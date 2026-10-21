<?php

namespace Tests\Feature;

use Tests\TestCase;

class PageRenderingTest extends TestCase
{
    public function test_quiz_pages_share_one_layout_and_load_their_own_scripts(): void
    {
        $pages = [
            '/admin' => ['admin.dashboard', 'js/index.js'],
            '/admin-page/table-datatable' => ['admin.pages.table-datatable', 'js/table-datatable.js'],
            '/admin-page/ecommerce-products-grid' => ['admin.pages.ecommerce-products-grid', 'js/app.js'],
            '/admin-page/charts-apex-chart' => ['admin.pages.charts-apex-chart', 'plugins/apexcharts-bundle/js/apex-custom.js'],
        ];

        foreach ($pages as $url => [$view, $script]) {
            $response = $this->get($url)->assertOk()->assertViewIs($view);
            $html = $response->getContent();
            foreach (['<!doctype html>', '<head>', '<body>', '<main ', 'class="top-header"', 'class="sidebar-wrapper"'] as $tag) {
                $this->assertSame(1, substr_count($html, $tag), $url.' '.$tag);
            }
            $response->assertSee('/admin/assets/'.$script, false);
            preg_match_all('/<script[^>]+src="([^"]+)"/', $html, $scripts);
            $this->assertSame($scripts[1], array_values(array_unique($scripts[1])), $url);
            $this->assertLocalAssetsExist($html);
        }
    }

    public function test_every_admin_page_and_its_local_assets_are_available(): void
    {
        $urls = ['/admin'];
        foreach (glob(resource_path('views/admin/pages/*.blade.php')) as $file) {
            $urls[] = '/admin-page/'.basename($file, '.blade.php');
        }

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertOk();
            $html = $response->getContent();
            foreach (['<!doctype html>', '<head>', '<body', '<main ', '</main>'] as $tag) {
                $this->assertSame(1, substr_count($html, $tag), $url.' '.$tag);
            }
            $isAuthentication = str_contains($url, '/authentication-');
            foreach (['class="top-header"', 'class="sidebar-wrapper"'] as $tag) {
                $this->assertSame($isAuthentication ? 0 : 1, substr_count($html, $tag), $url.' '.$tag);
            }
            preg_match_all('/<script[^>]+src="([^"]+)"/', $html, $scripts);
            $this->assertSame($scripts[1], array_values(array_unique($scripts[1])), $url);
            $this->assertStringNotContainsString('href="assets/', $html, $url);
            $this->assertStringNotContainsString('src="assets/', $html, $url);
            $this->assertDoesNotMatchRegularExpression('/href="[a-zA-Z0-9-]+\.html"/', $html, $url);
            $this->assertLocalAssetsExist($html);
        }
    }

    public function test_unknown_admin_pages_return_not_found(): void
    {
        $this->get('/admin-page/does-not-exist')->assertNotFound();
        $this->get('/admin-page/layouts.sidebar')->assertNotFound();
    }

    public function test_landing_has_one_document_and_loads_local_assets(): void
    {
        $response = $this->get('/')->assertOk();
        $html = $response->getContent();
        $this->assertSame(1, substr_count($html, '<head>'));
        $this->assertSame(1, substr_count($html, '</head>'));
        $this->assertSame(1, substr_count($html, '<body>'));
        $response->assertSee('/landing/css/custom.css', false);
        $this->assertStringNotContainsString('src="img/', $html);
        $this->assertLocalAssetsExist($html);
    }

    private function assertLocalAssetsExist(string $html): void
    {
        preg_match_all('/(?:src|href|data-background)="([^"]+)"/', $html, $matches);
        foreach ($matches[1] as $url) {
            $path = parse_url($url, PHP_URL_PATH);
            if ($path && preg_match('#^/(admin/assets|landing)/#', $path)) {
                $this->assertFileExists(public_path(ltrim($path, '/')), $url);
            }
        }
    }
}
