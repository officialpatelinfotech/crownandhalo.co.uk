Project-specific Copilot instructions

This CodeIgniter 4 application uses the standard CI4 structure with a small
shop/catalog app built in `app/`. The guidance below focuses on patterns,
commands, and examples that make an AI coding agent productive immediately.

- Project summary: PHP 8.1+, CodeIgniter 4 framework (see `composer.json`).
- Docroot: the public-facing front controller is `public/index.php` — webserver
  should point to the `public/` folder (not project root).

Quick setup & common commands
- Install dependencies: `composer install`
- Copy runtime env: duplicate `env` -> `.env` and set `app.baseURL`/DB settings.
- Run tests: `./phpunit` (or `vendor/bin/phpunit`). `composer test` runs PHPUnit.
- CLI tasks: use `spark` (project root) for framework CLI commands.

Key files to reference
- App config: `app/Config/App.php` (baseURL, indexPage, CSP, timezone).
- Autoload: `app/Config/Autoload.php` (PSR-4 namespace mapping; `App\` -> `app/`).
- Front controller: `public/index.php` (bootstraps via `app/Config/Paths.php`).
- Tests config: `phpunit.xml.dist` (coverage, source include/exclude rules).

Architecture & conventions (concrete patterns)
- Controllers extend `App\Controllers\BaseController` and should preload
  helpers/models there when widely used. Example: `HomeController::index()` uses
  `helper(['url','text'])` then instantiates `App\Models\ProductModel`.
- Views are plain PHP in `app/Views/`. Controllers return concatenated view
  fragments, e.g. `view('layout/header') . view('home', $data) . view('layout/footer')`.
- Models extend `CodeIgniter\Model`; they use `$allowedFields`, `$useTimestamps`,
  and return arrays (`protected $returnType = 'array'`). Example methods: `findAllProducts()`, `findProductById()` in `app/Models/ProductModel.php`.

Error-handling & DB resilience
- Several controllers guard DB access with try/catch (see `HomeController`) —
  tests or local runs may run without a configured DB. Follow that pattern when
  adding optional data on public pages: degrade gracefully to an empty set.

Testing notes
- PHPUnit config (`phpunit.xml.dist`) mounts `./app` as source and excludes
  `app/Views` and `app/Config/Routes.php`. If adding tests that need views,
  include them explicitly or adjust the XML.
- DB tests: update `phpunit.xml.dist` env variables or set `tests` DB group in
  `app/Config/Database.php` / `.env` to run DB tests.

Style & small idioms
- Helpers: controllers often call `helper([...])` locally instead of globally.
- View composition: header/footer wrappers are manually concatenated in code.
- Pagination: models use `$model->paginate(12)` and expose `$model->pager`.

When modifying boot/paths
- `public/index.php` and `spark` require correct `app/Config/Paths.php` — if you
  move the `app` folder, update the path in those files.

What to watch for when editing
- Don't change PSR-4 namespace mapping without updating `app/Config/Autoload.php`.
- Keep `public/` as the document root; moving index.php without updating Paths
  may break bootstrapping.
- Tests assume PHP 8.1+ (composer.json); run `./phpunit` after changes.

If unsure where to change something, check these files first:
- `app/Config/App.php`, `app/Config/Autoload.php`, `public/index.php`, `spark`, `composer.json`, `phpunit.xml.dist`, and `app/Controllers/*`.

Example quick tasks (explicit examples an agent can run/edit)
- Add a new route-backed controller action: extend `BaseController`, use
  `helper(['url'])`, call a model like `new ProductModel()`, and return
  `view('layout/header') . view('products/detail', $data) . view('layout/footer')`.
- Add a migration/seeder: follow CodeIgniter 4 conventions in `app/Database/Migrations` and `Seeds` and run via `spark migrate` / `spark db:seed`.

If this file is missing important project specifics, tell me what command or
location you'd like highlighted and I will update this guidance.
