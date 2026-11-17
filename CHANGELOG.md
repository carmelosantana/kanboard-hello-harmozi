# Changelog

All notable changes to Hello Harmozi are documented here.
This project follows [Keep a Changelog](https://keepachangelog.com/en/1.0.0/).

## 1.0.1 — 2026-11-17

### Fixed
- Read the plugin version from plugin.json.

## [1.0.0] — 2026-07-03

### Added

- Random Alex Hormozi quote rendered in the page footer via the
  `template:layout:bottom` hook (a Hello Dolly homage).
- Bundled set of quotes in `Model/Quotes.php` (no network, no config).
- PHPUnit tests for the quotes model and plugin metadata.
