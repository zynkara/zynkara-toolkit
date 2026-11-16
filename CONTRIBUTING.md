# Contributing to Zynkara Toolkit

Thanks for helping keep this 100% free.

## Rules
1. **No PRO upsell / no paywalled modules.** Ever.
2. **OFF = loads nothing.** A disabled module must not enqueue anything.
3. **Deactivate = no broken pages.** Provide a safe fallback.
4. Keep modules small and focused — one job per module.
5. Same UI — don't restyle the dashboard in a PR unless asked.
6. Don't use "Bricks" in a module / file / class name as a brand — say "for Bricks Builder" in the description only.

## How to add a module
Create `modules/my-module/module.php` + optional `module.json`:
```json
{"name":"My Module","description":"What it does","version":"1.0"}
```
See `modules/focus-point/module.php` as the example.

## How to submit
1. Fork > branch `feature/my-module`
2. Test on WordPress 7.1.4 + Bricks 1.9+ (staging / Local)
3. Run `php -l` on every changed PHP file
4. Open a PR with: what it does, how to test it, screenshot if it has UI

## Reporting a bug
Open an Issue with: WordPress version, Bricks version, plugin version, steps to reproduce, screenshot.
