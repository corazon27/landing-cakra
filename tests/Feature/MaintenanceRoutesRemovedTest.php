<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class MaintenanceRoutesRemovedTest extends TestCase
{
    /**
     * The unauthenticated maintenance URIs that must no longer exist.
     *
     * @var array<int, string>
     */
    private const REMOVED_URIS = [
        'bersih-cache-cakra',
        'perbaiki-gambar-cakra',
    ];

    public function test_bersih_cache_route_returns_not_found(): void
    {
        $this->get('/bersih-cache-cakra')->assertNotFound();
    }

    public function test_perbaiki_gambar_route_returns_not_found(): void
    {
        $this->get('/perbaiki-gambar-cakra')->assertNotFound();
    }

    public function test_maintenance_uris_are_not_registered(): void
    {
        $registeredUris = array_map(
            static fn ($route) => $route->uri(),
            Route::getRoutes()->getRoutes()
        );

        foreach (self::REMOVED_URIS as $uri) {
            $this->assertNotContains(
                $uri,
                $registeredUris,
                "Maintenance URI [{$uri}] must not be registered under any HTTP method or middleware group."
            );
        }
    }
}
