# Joplin File Titles for Nextcloud

**Version:** 1.0.8
**Author:** Schuyler "Rocky" Reidel, Reidel Law Firm <schuyler@reidellawfirm.com>
**License:** GPL-3.0-or-later
**Requires:** Nextcloud 28+ · PHP 8.1+

Show real Joplin note titles instead of GUID filenames when browsing a Joplin sync folder in Nextcloud Files.

Joplin stores notes as `.md` files named with a GUID (for example `93b58f6f0b404dc5908b7bfc0b8d4879.md`) and writes the note's title as the first line of the file. This app reads that first line and displays it as the filename — **without renaming anything on disk**, so your Joplin sync stays intact.

## Features

- **Automatic detection** of Joplin sync folders via the `info.json` marker — no configuration
- **Reads the first line** of each GUID-named `.md` file as the title
- **Display-only** — files are never renamed on disk
- **Handles notes and notebooks** (Joplin folder entries)
- **Works across navigation** without page reloads

## Why this and not Joplin for Nextcloud?

This is a small Files-app enhancement: it only changes what filenames *look like*. For a full notebook browser with search and Markdown rendering, see **Joplin for Nextcloud** (`joplin_nc_app`). Both can be enabled together.

## Installation

```bash
cd /path/to/nextcloud/custom_apps
tar -xzf joplinfiles_nc_app-1.0.8.tar.gz
sudo -u www-data php occ app:enable joplinfiles_nc_app
```

No configuration needed — open any Joplin sync folder in Files and the titles appear.

## License

GPL-3.0-or-later. See [LICENSE](LICENSE).
