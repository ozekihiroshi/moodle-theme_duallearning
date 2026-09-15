# Reviewer guide

Dual Learning is a small Boost child theme for Moodle 5.2. It changes presentation only: visible keyboard focus and safe sizing for learning media and code blocks on narrow screens.

## Install

1. Install the release ZIP through **Site administration > Plugins > Install plugins**.
2. Complete Moodle's normal plugin upgrade.
3. Open **Site administration > Appearance > Themes > Theme selector**.
4. Select **Dual Learning**.

No external service, API key, Composer step, npm step, scheduled task, database table, custom capability, or JavaScript build is required.

## Suggested checks

- Open a standard Topics course and confirm Boost navigation, the course index, activities, completion controls, assignment pages, and grade reports remain available.
- Use Tab and Shift+Tab on links, buttons, form fields, and Moodle dialogs. Focus should have a solid blue three-pixel outline with a two-pixel offset.
- At a narrow viewport, open a page containing images, video, an iframe, or a code block. Media should fit the content region and code should remain accessible with horizontal scrolling inside the code block.
- Switch back to Boost through the normal theme selector. The theme stores no course or user data.

## Privacy and dependencies

The theme implements Moodle's Privacy API null provider. It depends only on the Boost theme included with Moodle and sends no data to an external service.
