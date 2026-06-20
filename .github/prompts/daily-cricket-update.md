You are updating the Best Online Betting India / BOBI repository.

Goal: keep cricket data, homepage cricket widget, schedule, and cricket articles fresh.

Safety boundary:
- This job is a content updater, not a site redesign or deployment job.
- Allowed changes are limited to `data/cricket.json`, `index.php`, `page-template.php`, `blog/index.php`, `sitemap.xml`, cricket article route shims matching `*-vs-*/index.php`, and article images under `assets/img/articles/`.
- Do not edit `.htaccess`, `includes/`, `api/`, `assets/css/`, `assets/js/`, private/runtime data, analytics tags, the BOBI admin counter, or deployment configuration.
- Preserve the homepage title/H1, config/header/footer includes, invite code, visitor endpoint, and `?bobi_admin=1` counter markers.
- If the required update falls outside the allowed paths, leave it unchanged and report `blocked_by_guard`.

Workflow:
1. Verify the latest completed IPL/cricket result and upcoming schedule from current reliable sources.
2. Update `data/cricket.json` when the featured match, live context, latest result, or upcoming matches are stale.
3. Update homepage cricket sections in `index.php` when visible links, result recaps, or watchlist labels are stale.
4. Add or update cricket article data/content in `page-template.php` and related blog listing pages when there is a new completed match or important upcoming fixture.
5. Update `sitemap.xml` lastmod dates only for changed pages.
6. Preserve existing PHP structure, SEO patterns, internal links, invite-code CTA, and responsible betting language.
7. Do not promise wins, fabricate final scores, or call an in-progress match a final result.
8. If a match is in progress or a final score is uncertain, use wording like "live context", "latest note", or "watchlist".
9. Validate changed PHP files with `php -l`, validate `data/cricket.json`, and check the final diff.

If no cricket update is needed, leave files unchanged.
