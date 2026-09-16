# Changelog

## 0.1.0-alpha5 - 2026-09-16

- Refine dashboard cards and headings so the standard Moodle dashboard matches the learning workspace.
- Widen long-form content, add balanced inline padding, and improve code-block contrast without adding another accent colour.
- Keep wide tables and diagrams readable with local horizontal scrolling instead of compressing their contents.
- Let LessonMark presentation slides use a wide teaching surface while ordinary lessons retain a comfortable reading measure.
- Reduce the presentation-canvas focus frame while retaining clear keyboard focus on interactive controls.

## 0.1.0-alpha4 - 2026-09-15

- Add a calm teal visual system, a light learning-workspace background, and a clear content surface while retaining Boost layouts and controls.
- Use a local system-font stack and improved spacing for Japanese and English interfaces without downloading fonts.
- Improve long-form readability in LessonMark, Page, and Book resources, including code and wide tables.
- Keep narrow-screen layouts compact and reduce heading sizes on very small displays.
- Replace the theme-selector and documentation screenshots with representative images of the updated theme.

## 0.1.0-alpha3 - 2026-09-15

- Add the required theme configuration title and a 500 by 400 theme-selector screenshot.
- Replace the `:where()` focus selector with an equivalent expanded selector list for Moodle's bundled SCSS compiler.
- Align PHP boilerplate with the current Moodle coding standard and include the full GPL v3 licence text.
- Add independent Moodle 5.2 install and Moodle Plugin CI release checks.

## 0.1.0-alpha2 - 2026-09-15

- Ensure the visible focus outline wins over Boost's component focus rules.
- Add authenticated 320px student and teacher regression coverage.

## 0.1.0-alpha1 - 2026-09-14

- Add the Moodle 5.2 Boost child-theme scaffold.
- Add a privacy null provider and English component strings.
- Add initial focus and narrow-content safeguards without JavaScript or external dependencies.
- Load the Boost preset and the theme-specific SCSS through an explicit theme callback.
