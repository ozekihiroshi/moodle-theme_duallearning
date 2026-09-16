# Reviewer guide

Dual Learning is a small Boost child theme for Moodle 5.2. It changes presentation only: visible keyboard focus, a clearer standard dashboard, comfortable reading width, and safe overflow for learning media, code, tables, and diagrams.

## Install

1. Install the release ZIP through **Site administration > Plugins > Install plugins**.
2. Complete Moodle's normal plugin upgrade.
3. Open **Site administration > Appearance > Themes > Theme selector**.
4. Select **Dual Learning**.

No external service, API key, Composer step, npm step, scheduled task, database table, custom capability, or JavaScript build is required.

## Suggested checks

- Open a standard Topics course and confirm Boost navigation, the course index, activities, completion controls, assignment pages, and grade reports remain available.
- Use Tab and Shift+Tab on links, buttons, form fields, and Moodle dialogs. Interactive controls should have a solid teal two-pixel outline with a two-pixel offset. The LessonMark presentation canvas uses a quieter one-pixel frame.
- Open the standard dashboard and confirm its blocks and course cards have clear, restrained grouping.
- At a narrow viewport, open a page containing images, video, an iframe, code, a wide table, or a wide diagram. Media should fit the content region; code, tables, and wide diagrams should remain accessible with scrolling inside their own region.
- Open LessonMark presentation mode on a desktop display. The slide should use a wide teaching surface while the ordinary lesson view retains its reading measure.
- Switch back to Boost through the normal theme selector. The theme stores no course or user data.

## Privacy and dependencies

The theme implements Moodle's Privacy API null provider. It depends only on the Boost theme included with Moodle and sends no data to an external service.
