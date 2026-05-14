# 10XTO Theme Workflow

## Canonical Theme Location
The primary working directory where theme files (`.php`, `.css`, `assets`, etc.) are actively edited is:
`c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme`

This is the exact folder where any theme changes should be made.

## Other Copies
There is a supplementary project folder located at:
`d:\Documents\Hotel X Toronto\10XTO Website`

This secondary folder contains utility scripts (now moved to a `tools/` subfolder) and raw assets like "Staff Headshots". It is **not** a live WordPress theme folder. Changes to theme files should not be made here.

## Git Repository
The Git repository for version control is located exactly at the canonical theme root:
`c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme`
Commits are pushed from this folder to the `main` branch of the `origin` remote.

## Staging Deployment Mechanism
Commits to the `main` branch automatically trigger a GitHub Actions workflow (`.github/workflows/deploy.yml`) which zips the theme folder and uploads it via FTP to the staging environment at `http://staging-wp284157.wpdns.ca/`. 
Alternatively, running `python d:\Documents\Hotel X Toronto\10XTO Website\tools\deploy_now.py` manually SFTPs the current theme folder to the staging server.
The staging site serves files from `public_html/wp-content/themes/10xto-wordpress-theme/`. Note that Web Hosting Canada (WHC) applies aggressive server-side caching, so changes may not appear instantly in the browser without clearing the cache via the WP Admin dashboard.

## Production Deployment Mechanism
Staging gets promoted to Live manually. The user reviews the staging site, and upon approval, uses the Web Hosting Canada (WHC) dashboard to push the Staging environment to the Production environment.

## Git Tracking Scope
**Tracked:** All theme files including `*.php`, `css/`, `js/`, and theme `assets/`.
**Not Tracked:** The WordPress database, `wp-config.php`, `wp-content/uploads/` (user-uploaded media), third-party plugins, and WordPress core files are not version controlled.
