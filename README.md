# Zynkara Toolkit — v1.0

Free, open-source toolkit for [Bricks Builder](https://bricksbuilder.io).

One plugin. Small modules. No bloat. No PRO upsell. **OFF = loads nothing.**

> **This is v1.0** — Simple UI. Focus Point, Inline Conditions, Newsletter.
> v1.1 (Bold Gradient dashboard + Upload Module) will come as a later release.

[![License: GPL v2](https://img.shields.io/badge/License-GPLv2-blue.svg)](LICENSE)

**Website:** https://zynkaratech.com
**Sponsor:** https://zynkaratech.com/donate — Sponsor on Zynkara
**Author:** Amel-Nokoe
**Contributors:** zynkara, aetherisinnovate, amel65, kelvinpiousnokoe

> Zynkara Toolkit is an independent project. Not affiliated with, endorsed by, or sponsored by Bricks Builder or its makers. "Bricks" is a trademark of its respective owner and is used here only to describe compatibility.

---

## What you get in v1.0

### 1. Image Focus Point
Stop your hero image cropping faces off on mobile. Pick Focus X / Y on any Image element. Pure CSS, no frontend JS. Deactivate = falls back to center. Nothing breaks.

### 2. Inline Conditions in Dynamic Data
Stop duplicating elements just to show different text.
```
{post_meta_stock:if>0:In Stock|Out of Stock}
```
Also: `if_empty`, `if_not_empty`, `if_contains:`, `==`, `!=`, `>`, `<`, `>=`, `<=`

### 3. Newsletter Form Actions
Turn any Bricks Form into a signup form. Providers: MailPoet (no API key), MailerLite, Kit (ConvertKit). Map Email field = `email`, Name field = `name`. Done.

### Our rule
- OFF = loads nothing
- ON modules load only on pages that use them
- Deactivate = your pages keep working

## Installation

1. Install and activate the Bricks Builder theme.
2. Download the latest release from [Releases](../../releases) — `zynkara-toolkit.zip`
3. WordPress > Plugins > Add New > Upload Plugin > upload the zip > Activate.
4. Go to **Tools > Zynkara** (v1.0 menu location).
5. Turn on the modules you want. Save.
6. For Newsletter: Bricks Form > Actions > Add > **Zynkara: Newsletter Signup**.

> Do NOT download the repo as a zip and install that directly — GitHub adds `-main` to the folder name. Use the **Releases** zip, which is named `zynkara-toolkit.zip`.

## FAQ

**Does it work without Bricks?** No. Bricks Builder theme must be active.
**Does it slow down my site?** No. OFF = 0 bytes loaded. ON modules load only where they are used.
**Newsletter says "Not connected" — why?** MailPoet: install + activate MailPoet. MailerLite / Kit: add API key in Zynkara > Newsletter, then hit Test Connection.
**What happens if I deactivate it?** Focus Point falls back to center. Inline Conditions leave the original tag. Newsletter stops running. No broken pages.

## Contributing
PRs welcome. Keep modules small, OFF = loads nothing, no paywalled code. See [CONTRIBUTING.md](CONTRIBUTING.md).

## License
GPLv2 or later. See [LICENSE](LICENSE).
