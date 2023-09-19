# Janitor

## Install Janitor in your project
``` bash
composer require gedachtegoed/janitor --dev
```

Then run the install command to set up Janitor's configs in your project:

``` bash
php artisan janitor:install
```

***NOTE:*** You will be prompted to optionally publish 3rd party config files & Github Actions scripts. This is recommended for GDD projects. You may skip this prompt by adding the `--publish-configs` & `--publish-actions` options

## Usage
The following composer script aliases will be automatically installed inside your project:

``` bash
# Linting and fixing
composer lint
composer fix

# Static analysis
composer analyze
composer baseline
```

Note that you can forward options and flags to the underlying composer scripts by suffixing the command with `--`. You may pass any options from either [tighten/duster](https://github.com/tighten/duster) for the `lint` and `fix` commands or [phpstan/phpstan](https://phpstan.org/config-reference) for the `analyze` and `baseline` commands.

For example, if you'd only like to fix dirty files you may use

``` bash
composer lint -- --dirty
```

## Keeping rules up-to-date
Linter, fixer and static analysis rules may change over time. Fortunately it's a breeze to update these locally. Simply run:

``` bash
php artisan janitor:update
```
You will be asked again to whether you'd like to publish 3rd party configs. Again, this is recommended. But if you'd like to skip the prompt, simply pass the `--publish-configs` option along with the command.

**Important:** If you choose not to publish third party configs you will opt out of any upstream configuration updates and use the underlying tooling as is.

## Github Actions
If you've chosen to install the Github Actions scripts along when installing Janitor there is nothing left to do. Sensible defaults will work with your next Pull request. However you are free to tweak the file's as you like.

If you've skipped this installation step, not to worry; Simply run `php artisan vendor:publish --tag=janitor-3rd-party-configs` to publish the files now.
## Roadmap

- [ ] Customize Linter & fixer configuration according to GDD flavored styleguide specifications
- [ ] Suggest IDE integrations for code highlighting & in IDE code fixing
- [ ] Consider integrating pre-commit hooks for code fixing & static analysis
