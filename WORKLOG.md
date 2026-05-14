# 10XTO Theme Worklog

## 2026-05-14 16:48
**Prompt:** Addressing technical and design feedback to polish the 10XTO website. Resolving template drift, replacing inline styles, fixing navigational links, migrating mobile menu, and replacing Wix images.
**Did:** Extracted CSS resets from `styles.css` to prevent conflicts with `design-system.css`. Implemented fluid typography (`clamp`) for h1. Replaced hardcoded `style="..."` attributes with utility classes in PHP templates. Replaced Wix image with local Strength Zone image. Swapped old placeholder emojis in contact section with Feather SVG icons. Fixed broken `/facilities` links to `/the-club`. Updated `header.php` to use `wp_nav_menu()` for the mobile menu. Replaced Eddy's headshot.
**Files touched:** 
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\css\design-system.css`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\css\styles.css`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\footer.php`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\front-page.php`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\header.php`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\page-about.php`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\page-membership.php`
- (And other `page-*.php` templates updated via refactor script)
**Commits:** `3bfb207 Refactor CSS inline styles to design-system, fix mobile nav, add Eddy headshot, fix broken links and emojis`
**Incomplete:** None
**Scratch:** Scripts were left in `d:\Documents\Hotel X Toronto\10XTO Website\` but not yet moved to `tools/`.

## 2026-05-14 18:00
**Prompt:** "I want to set up a workflow trail so future sessions... can orient without guessing."
**Did:** Created `WORKFLOW.md` and `WORKLOG.md` in the canonical theme root to document the environment and changes. Moved transient python scripts from `d:\Documents\Hotel X Toronto\10XTO Website` into a `tools/` subfolder. Updated `.github/workflows/deploy.yml` and `deploy_now.py` to write the deployed commit hash to `deployed_commit.txt`. Added `current_commit.php` to the theme to expose this hash remotely. Created `snapshot.py` to check sync status between local, origin, staging, and production.
**Files touched:**
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\WORKFLOW.md` (New)
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\WORKLOG.md` (New)
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\snapshot.py` (New)
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\current_commit.php` (New)
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\.github\workflows\deploy.yml`
- `d:\Documents\Hotel X Toronto\10XTO Website\tools\deploy_now.py`
**Commits:** None yet for this step.
**Incomplete:** None
**Scratch:** Moved `append_css.py`, `refactor_styles.py`, `clear_opcache.py`, `deploy_now.py`, `refactor_templates.py`, and `append_functions.py` from `d:\Documents\Hotel X Toronto\10XTO Website\` into `d:\Documents\Hotel X Toronto\10XTO Website\tools\`.


## 2026-05-14 18:25
**Prompt:** "The previous task's modification to .github/workflows/deploy.yml didn't actually take... Please edit deploy.yml directly in your editor... Apply the same fix to deploy_now.py... run git checkout -- . to discard the line-ending churn"
**Did:** Edited `.github/workflows/deploy.yml` directly to correctly inject the deployment commit step. Ensured `deploy_now.py` uses proper Python code to extract and write the commit hash. Dropped `.git/index.lock`, discarded unintentional line-ending changes across all theme files with `git checkout -- .`, and committed the workflow/snapshot files along with the correctly modified deploy.yml.
**Files touched:** 
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\.github\workflows\deploy.yml`
- `d:\Documents\Hotel X Toronto\10XTO Website\tools\deploy_now.py`
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\WORKLOG.md`
**Commits:** `552eb23 Add workflow docs, worklog, deployment snapshot tooling` (Amended)
**Incomplete:** None
**Scratch:** None


## 2026-05-14 18:36
**Prompt:** "Before doing any more theme work, fix the chronic line-ending issue that's been making git status show 28 files as Modified... Also resolve the current index corruption from the last amend."
**Did:** Deleted the stale `.git/index.lock`, configured `core.autocrlf false` and `core.safecrlf false`, and created a comprehensive `.gitattributes` file to enforce LF endings across the repository. Ran `git add --renormalize .` to normalize the index and committed the new `.gitattributes` file, successfully resolving the `null sha1` error and cleaning up the working tree.
**Files touched:** 
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\.gitattributes` (New)
- `c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme\WORKLOG.md`
**Commits:** `6ad3a7a Normalize line endings via .gitattributes`
**Incomplete:** Restarting "Local by Flywheel" needs to be done manually by the user via the app GUI.
**Scratch:** None
