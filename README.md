# CloudPanel Laravel Git deployment demo

Disposable Laravel 12 deployment example. No production data or credentials.

- Branch: `main`
- Project folder: `.`
- Frontend build, migrations, deploy script: off
- Public repository: Git token not needed
- Expected homepage: `CloudPanel Git deployment demo - release 2`

Composer dependencies are pinned in composer.lock. The panel creates the runtime .env and application key. File sessions and cache avoid a database dependency for this smoke test.
