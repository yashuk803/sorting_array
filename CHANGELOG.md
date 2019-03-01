# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
## Changed
- Updated PHP Unit version to ^8.0 in composer.json and .lock
- Updated dependencies in composer.lock

## [1.3.1] - 2019-01-31
### Added
- `.php_cs.dist` configuration file

### Changed
- Ignore `.php_cs` file
- `php_cs.cache` cache file renamed to `.php_cs.cache`
- Moved PHP 7 only rules in `.php_cs.dist` config to top of file

## [1.3.0] - 2019-01-08
### Added
- New year date in README.md and LICENSE files

### Changed
- Updated PHP version to >= 7.3 in composer.json and .lock
- Updated PHP-CS-Fixer version to ^2.14 in composer.json and .lock
- Updated PHP Unit version in composer.lock

## [1.2.0] - 2018-12-10
### Changed
- Updated PHP version to >=7.2 in composer.json and .lock
- Updated PHPUnit to ^7.5 in composer.json and .lock
- Updated PHP-CS-Fixer version to ^2.13 in composer.json and .lock

## [1.1.0] - 2018-10-15
### Added
- `bin/console` PHP CLI script template

### Changed
- Updated composer dependencies (composer.lock file)

## [1.0.0] - 2018-09-17
### Added
- `src/` catalog for source code
- `tests/` catalog for test cases
- `.gitignore` file with basic files and directories to exclude them from Git
- `.php_cs` with CS rules for PHP-CS-Fixer tool
- `composer.json` witch depend on PHP >=7.1 and PHPUnit, PHP-CS-Fixer as dev
- `phpunit.xml.dist` file with basic configuration for PHPUnit test framework
- Changelog file
- Readme file
- License file
