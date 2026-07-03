# Hello Harmozi

A tiny Kanboard plugin that prints a random **Alex Hormozi** quote as a quiet
line at the bottom of every page. It is a homage to WordPress's classic
*Hello Dolly* — the smallest useful plugin, here to be pleasant and to prove a
point.

It also serves as the **reference example** for how to structure a plugin that
is installable through [ModMenu](https://github.com/carmelosantana/ModMenu):
a normal Kanboard plugin, packaged as a zip whose single top-level folder is
`HelloHarmozi/` and published as a GitHub release asset.

## What it does

- On every page, a `template:layout:bottom` hook renders one random quote from a
  bundled list (see `Model/Quotes.php`) — no network calls, no configuration,
  no database.

```
─────────────────────────────────────────────
Kanboard · "Discipline is doing it when you don't feel like it." — Alex Hormozi
```

## Install

- **Via ModMenu:** Browse the plugin directory and click *Install*, or upload
  the release zip on the *Upload* tab.
- **Manually:** copy the `HelloHarmozi/` folder into your Kanboard `plugins/`
  directory.

Enable/disable/remove it from ModMenu's *Installed* tab.

## Requirements

- Kanboard `>= 1.2.47`
- PHP `>= 8.4`

## How a ModMenu-installable plugin repo is structured

This repo is intentionally minimal so you can copy the shape:

```
HelloHarmozi/
  Plugin.php            # metadata + hook registration
  plugin.json           # machine-readable metadata (name, version, …)
  Model/Quotes.php       # the quote list
  Template/footer/quote.php
  Assets/css/hello-harmozi.css
  Test/                 # PHPUnit tests
```

A GitHub **release** attaches `HelloHarmozi-<version>.zip` (whose top-level
folder is `HelloHarmozi/`); a directory's `plugins.json` points its `download`
field at that release asset. See the
[ModMenu directory](https://github.com/carmelosantana/kanboard-modmenu-directory)
for the listing format.

## License

MIT © 2026 Carmelo Santana
