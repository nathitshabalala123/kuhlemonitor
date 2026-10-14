# Kuhle Monitor

A Nextcloud dashboard for monitoring employee productivity, task progress and team performance.

Requires Nextcloud 31–34. Licensed AGPL-3.0-or-later.

## Development

```bash
nvm use
npm ci
npm run watch      # or: npm run build
```

Copy or symlink this folder to your Nextcloud `apps/` directory as `kuhlemonitor`, then:

```bash
php occ app:enable kuhlemonitor
```

## Releasing

1. Bump `<version>` in `appinfo/info.xml` and update `CHANGELOG.md`.
2. Tag and push: `git tag v1.0.1 && git push origin v1.0.1`.
3. The `Release` workflow builds, signs and attaches the tarball to a GitHub release.
   Set the repository variable `PUBLISH_TO_APPSTORE` to `true` (and secret `APPSTORE_TOKEN`) to also submit it to the App Store.

Required repository secret: `APP_PRIVATE_KEY` (contents of your `kuhlemonitor.key`).
