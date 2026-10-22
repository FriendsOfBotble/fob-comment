# Changelog

All notable changes to `fob-comment` will be documented in this file

## Unreleased

- Security: public comment JSON now exposes only public fields, excluding commenter email, IP address, user agent and author records.
- Security: nested replies follow the same visibility rules as top-level comments; pending replies are visible only from the submitting IP, and spam and trashed replies are excluded.
- Security: Gravatar URLs no longer include an email-based Unavatar fallback.

## 1.3.1 - 2026-10-22

- Fix: store the page URL of a comment. `reference_url` was not fillable, so it was dropped on save and comments on pages without a reference model never showed.
- Fix: the comment count on a page without a reference model counted every such comment on the site; it now counts the approved comments of that page's URL.
- Fix: the comment count included pending, spam and trashed comments of the reference.
- Fix: a preloaded comment count threw a `TypeError` instead of returning the count, and preloading an empty collection loaded the counts of every reference.
- Security: the comment page URL, including the Referer fallback, must be an http(s) URL of this site, since it is shown as a link in the admin and in emails.

## 1.3.0 - 2026-10-21

- Fix: store and compare the visitor's IP (`request()->ip()`) instead of `Helper::getIpFromThirdParty()`, which returned the server's own IP. Every comment stored the same IP, the rate limit was shared by the whole site, and pending comments were shown to every visitor.
- Fix: replies now respect the "disable guest comments" setting, the rate limit and the `allow_comments` option, like new comments.
- Security: comments and replies can only target public content (models registered with the slug helper, never user accounts).

## 1.2.10 - 2026-05-16

- Add `deactivate()` lifecycle method to clear the runtime comment counter binding on deactivation. Persistent data (the `fob_comments` table and `fob_comment_*` settings) is preserved so re-activating the plugin restores all state.

## 1.2.9 - 2026-04-19

- Fix "This format is invalid" error when saving the settings page after the color picker stored an 8-character hex (with alpha). The color validator now accepts 4/8-character hex and HSL/HSLA values in addition to 3/6-character hex, rgb, and rgba.

## 1.0.0 - 2024-03-12

- First release 🥳
