# Changelog

All notable changes to `fob-comment` will be documented in this file

## 1.2.10 - 2026-05-16

- Add `deactivate()` lifecycle method to clear the runtime comment counter binding on deactivation. Persistent data (the `fob_comments` table and `fob_comment_*` settings) is preserved so re-activating the plugin restores all state.

## 1.2.9 - 2026-04-19

- Fix "This format is invalid" error when saving the settings page after the color picker stored an 8-character hex (with alpha). The color validator now accepts 4/8-character hex and HSL/HSLA values in addition to 3/6-character hex, rgb, and rgba.

## 1.0.0 - 2024-03-12

- First release 🥳
