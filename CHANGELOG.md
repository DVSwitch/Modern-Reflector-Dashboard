# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added
- `config.config.example.php` template; per-install profiles are no longer committed (see `.gitignore`).
- Blocked direct web access to `config/` and `db/` plus security headers (CSP, nosniff, X-Frame-Options, Referrer-Policy) in `.htaccess`.
- Mode badge colors for P25, YSF, NXDN and DMR (`index.css`).
- `version.php` exposing `DASHBOARD_VERSION`.
- GitHub Actions lint workflow (`php -l`), Dependabot config, and a bug report issue template.

### Fixed
- `update_db.php` now refuses to run from the web (CLI-only), matching `setup.php`.
- PHP 8.4 PCRE/CSV compatibility: `fgetcsv()` now passes the `$escape` argument explicitly.
- Browser page titles no longer hardcoded to P25Reflector (`index.php`, `help.php`).

## [3.3] - 2026-04-15

### Added
- Real-time disk usage telemetry in System Stats.
- GDPR-compliant callsign anonymization mode (`GDPR_MODE`).

## [3.2] - 2026-04-15

### Added
- Universal mode support for P25, YSF and NXDN via a unified log ingestion engine.
- Triple-check discovery in `setup.php` (binaries, `.ini` headers, filename patterns).
- Multi-tenant switcher.
- SQLite-backed user identity tooltips with numeric ID translation.
- `help.php` local documentation engine.
- Glassmorphism UI with network pulse.