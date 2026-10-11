# Dual Learning theme

Give learning content room to read. Dual Learning is a Boost-based Moodle
theme for site administrators and teachers who want a calm visual environment
for text-rich lessons, classroom teaching, and independent study.

Keep familiar Moodle controls. Teal accents, balanced spacing, visible keyboard
focus, and responsive content surfaces refine the presentation while retaining
Boost layouts and navigation. The theme uses local system fonts and adds no
JavaScript, external font downloads, or CDN requests.

## Get the theme

Dual Learning is published on [Moodle Marketplace](https://marketplace.moodle.com/plugins/theme_duallearning).
Download the installable package there, or choose an attached ZIP from
[GitHub Releases](https://github.com/ozekihiroshi/moodle-theme_duallearning/releases).
The documented release is [0.1.0-alpha7](https://github.com/ozekihiroshi/moodle-theme_duallearning/releases/tag/v0.1.0-alpha7),
an alpha for evaluation on Moodle 5.2.

Try it with an existing course. Install the theme, select **Dual Learning**,
and review a lesson, a wide table, and the course navigation on desktop and
mobile. No content conversion or post-install build step is required.

Use it independently. Standard Moodle course formats work with this theme.
Optional styling also complements [LessonMark](https://github.com/ozekihiroshi/moodle-mod_lessonmark)
reading and presentation views and the [Dual Learning course format](https://github.com/ozekihiroshi/moodle-format_duallearning).
Neither plugin is required; Moodle's core Boost theme is the parent.

## Features

- Inherits Moodle's standard Boost layouts and navigation.
- Adds a calm teal visual system, balanced spacing, and clear content surfaces.
- Gives keyboard focus a consistent visible outline.
- Keeps images, video, iframes, code blocks, wide tables, and diagrams usable on narrow screens.
- Stacks standard section navigation on phones and gives standalone LessonMark images the full reading surface width.
- Adds a restrained reading typography layer for LessonMark, Page, and Book resources.
- Gives LessonMark presentation mode a wide teaching surface while keeping ordinary lesson pages comfortable to read.
- Gives the standard dashboard clearer card grouping without replacing Boost components.
- Uses local system fonts and adds no JavaScript, font download, CDN request, renderer override, or settings page.
- Stores no personal data and sends no data to an external service.

## Screenshots

| Learning workspace | Narrow learning content |
|---|---|
| ![Learning workspace](docs/screenshots/04-learning-workspace-desktop.png) | ![Narrow learning content](docs/screenshots/05-learning-content-narrow.png) |

The screenshots use the public Dual Learning demonstration course and were captured with this theme selected. Browser chrome, account names, and notification controls are excluded.

## Installation

Install the release ZIP through **Site administration > Plugins > Install plugins**, or extract its single duallearning directory into Moodle's theme directory. Complete Moodle's standard plugin upgrade, then select **Dual Learning** through the theme selector.

No Composer, npm, or post-install build step is required.

Wide Mermaid diagrams in LessonMark and wide tables scroll within their own content region. In Page or Book, an author can preserve an unusually wide image by wrapping it in `<div class="duallearning-scrollable">...</div>` in the HTML editor. Ordinary images remain responsive.

## Compatibility

The declared target is Moodle 5.2. The alpha7 release has been checked with PHP 8.3 and PHP 8.4 in CI and installed independently with MariaDB 11.8.

## Privacy

Dual Learning implements Moodle's Privacy API null provider. It stores no additional personal data.

## Licence

Copyright 2026 Hiroshi Ozeki.

This plugin is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License, either version 3 of the License, or any later version.
