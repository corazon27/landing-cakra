# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Security

- Removed the two unauthenticated maintenance endpoints that were reachable by any
  visitor without authentication, authorization, or CSRF protection:
  - `GET /bersih-cache-cakra` — previously executed `view:clear`, `config:clear`,
    and `cache:clear` directly from a public web request.
  - `GET /perbaiki-gambar-cakra` — previously attempted `symlink()` calls directly
    from a public web request.
  
  Both URLs were removed rather than reimplemented. No replacement public endpoint
  or browser-based command interface was added, and no storage-link or filesystem
  behavior was reintroduced in this change.

### Changed files

- `routes/web.php` — removed both maintenance route closures and the now-unused
  `Illuminate\Support\Facades\Artisan` import.
- `tests/Feature/MaintenanceRoutesRemovedTest.php` — new regression test asserting
  both maintenance URIs return HTTP 404 and are absent from the registered route
  collection.
- `CHANGELOG.md` — this file.

### Tests

- `tests/Feature/MaintenanceRoutesRemovedTest.php` — feature tests asserting
  `GET /bersih-cache-cakra` and `GET /perbaiki-gambar-cakra` return 404, and that
  neither URI is registered under any HTTP method or middleware group.

### Verification limitations and outstanding risks

- This change removes the routes at the application layer only. It has **not** been
  deployed to the production site. Until the updated `routes/web.php` is uploaded and
  verified on the host, the production endpoints may remain reachable.
- Removal is verified by application-level 404 responses. A web-server-level
  (`.htaccess`) deny rule, if applied, would return 403 before the request reaches
  Laravel; such a layer is not part of this change.
- Storage-link repair capability is intentionally not restored here. The prior
  endpoint depended on PHP `symlink()`, which is disabled on the production host.
  A replacement mechanism (for example a fixed-path `ln -s` run through cPanel Cron,
  or enabling the function at the host) remains an open follow-up and must be
  evaluated separately.

### Removed

- Untracked the following root-level artifacts from the Git index (local working
  copies preserved; the files were not deleted):
  - `db_cakra_inovasi.sql`
  - `public.zip`
  - `vendor.zip`
- Added narrow root-level `.gitignore` rules so the same exact files cannot be
  re-added accidentally: `/db_cakra_inovasi.sql`, `/public.zip`, `/vendor.zip`.

### Repository hygiene — scope and residual risks

- This change affects the current Git index only. The files remain present in
  **historical Git commits**; no history rewrite was performed.
- Local working copies remain intact and unmodified (verified by SHA-256
  before/after).
- No production-host cleanup was performed. The three files may still exist on the
  server and remain downloadable if the document root exposes them.
- The sensitivity of `db_cakra_inovasi.sql` — whether it contains secrets, personal
  data, or production schema/data — remains **unassessed**; its contents were not
  opened or inspected.
- This change does not prove or alter the security posture of the production
  document root.
