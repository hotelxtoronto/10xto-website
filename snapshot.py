import subprocess
import urllib.request
import os

THEME_DIR = r"c:\Users\mattb\Local Sites\10XTO\app\public\wp-content\themes\10xto-wordpress-theme"

def run_git_cmd(args):
    try:
        return subprocess.check_output(['git', '-C', THEME_DIR] + args, stderr=subprocess.STDOUT).decode('utf-8').strip()
    except subprocess.CalledProcessError as e:
        return f"Error: {e.output.decode('utf-8').strip()}"

def fetch_url(url):
    try:
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req, timeout=10) as response:
            return response.read().decode('utf-8').strip()
    except Exception as e:
        return f"Error fetching: {e}"

print("=== 10XTO Theme Deployment Snapshot ===\n")

# Local Status
local_commit = run_git_cmd(['rev-parse', 'HEAD'])
local_status = run_git_cmd(['status', '--short'])
print(f"Local Theme Directory: {THEME_DIR}")
print(f"Local Commit: {local_commit}")
if local_status:
    print("Uncommitted changes:")
    print(local_status)
else:
    print("Uncommitted changes: None")
print("")

# Origin Status
print("Checking origin/main...")
origin_ls = run_git_cmd(['ls-remote', 'origin', 'main'])
if origin_ls and not origin_ls.startswith("Error"):
    origin_commit = origin_ls.split()[0]
    print(f"Origin Commit: {origin_commit}")
else:
    origin_commit = "unknown"
    print(f"Origin Commit: {origin_ls}")
print("")

# Staging Status
print("Checking staging...")
staging_url = "http://staging-wp284157.wpdns.ca/wp-content/themes/10xto-wordpress-theme/current_commit.php"
staging_commit = fetch_url(staging_url)
print(f"Staging Commit: {staging_commit}")
print("")

# Live Status
print("Checking live production...")
live_url = "https://www.10xto.com/wp-content/themes/10xto-wordpress-theme/current_commit.php"
live_commit = fetch_url(live_url)
print(f"Live Commit: {live_commit}")
print("")

# Summary
print("=== Summary of Mismatches ===")
mismatch = False
if local_commit != origin_commit:
    print("- Local commit does not match Origin commit.")
    mismatch = True
if staging_commit not in [local_commit, origin_commit] and staging_commit != "unknown":
    print("- Staging commit does not match Local or Origin.")
    mismatch = True
if live_commit != staging_commit and live_commit != "unknown" and staging_commit != "unknown":
    print("- Live production commit is out of sync with Staging.")
    mismatch = True

if not mismatch:
    print("Everything appears to be in sync!")
else:
    print("Mismatches detected. Review the above logs.")
