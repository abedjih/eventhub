## Configuration Git Hooks

Après le clone du projet, active les hooks Git :
```bash
git config core.hooksPath .githooks
```

Ces hooks vérifient automatiquement le code avec PHPCS avant chaque commit.

Pour bypasser temporairement : `git commit --no-verify`
