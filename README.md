# nette/bootstrap pre-configuration

- %projectRoot% parameter with project root path
- Debug mode according to APP_DEBUG === 'true' environment variable
- Logs in /var/log
- Cache in /var/temp
- Config files:
  - /config/boot.neon - for infrastructure setup (extensions, etc.)
  - /config/app.neon - for application setup (DI services, etc.)
  - /config/local.env.neon - for setting up parameters from environment variables
  - /config/local.neon - optional - for local overrides (should be gitignored)