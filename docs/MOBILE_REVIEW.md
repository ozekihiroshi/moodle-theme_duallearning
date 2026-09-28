# Mobile reading review — 2026-09-28

This working change spans the theme, `mod_lessonmark`, and `format_duallearning`.
No release version, public submission, or production deployment was changed.

## Changes

- The theme reduces nested reading padding, wraps long titles and links, and moves header actions below the title on small reading screens. LessonMark's duplicate top-level activity heading is hidden only when Boost's page header already supplies a title; authored content headings are retained.
- LessonMark renders Contents and Presentation options as native, initially closed disclosures on both mobile and desktop. Links remain available without JavaScript. Print excludes presentation options.
- The course format stacks previous activity, activity selector, and next activity on small screens, retaining DOM/keyboard order and three desktop columns. Mobile buttons and selectors are at least 44 CSS pixels high.

## Validation

Local Moodle at port 8083, published Japanese guided course 43, LessonMark activity 761, with a temporary student account. The browser was headless Microsoft Edge, with viewport widths 320, 390, 430, and 1280 CSS pixels.

The running local site mounts an older in-repository theme copy. To test the publication repository without replacing that copy, the updated SCSS was compiled with the running Moodle's `core_scss` compiler and Boost preset. Playwright substituted that stylesheet in its own browser requests, preserving the site's resolved font-face rules. LessonMark and course-format changes used their existing local bind mounts. The theme changes therefore are not enabled for ordinary browsing of the local site yet.

Passed:

- Moodle SCSS compilation and PHP syntax checks for the modified renderer and view.
- Real renderer output: one initially closed Contents disclosure and all three heading links in a Japanese/duplicate-heading fixture.
- No page-wide horizontal overflow at all four widths; mobile reading widths were 288, 358, and 398 CSS pixels.
- Enter/Space disclosure operation, heading-anchor navigation, and reachable presentation links.
- Previous/next links at least 44 CSS pixels high on mobile; actual next-lesson navigation succeeded.
- A 1200px table remained horizontally scrollable inside its wrapper. A long URL and a long code line did not cause page-wide overflow at 390px.
- Presentation options hidden in print media, and presentation controls available after opening presentation mode.
- Course overview at 390px without page-wide overflow.

Local captures and measurements: `build/mobile-review/lesson-*.png`, `navigation-*.png`, `course-390.png`, `results.json`, and `interaction-results.json`. These are ignored build artifacts, not release contents.

## Remaining device checks

This was browser viewport testing, not an iOS Safari or Android device test. Page and Book share the new spacing rules but were not exercised with separate authenticated fixtures. Full PHPUnit was unavailable in the running production-style container; the renderer behavior was checked directly and the existing PHPUnit test was extended for the disclosure contract.

Boost's floating drawer buttons retain their existing placement and may cover part of a text line. Their positioning, real-device touch/zoom/landscape behavior, and Page/Book coverage remain follow-up review items before release.
