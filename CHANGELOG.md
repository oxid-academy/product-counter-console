# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.0.2] - 2022-09-29
### Changed
- Removed class parameter from `services.yaml` since it is not needed.
- Removed command name from `services.yaml` since it is no longer necessary in OXID eShop 6.5.
- Enhanced the `README.md`.

### Fixed
- `CountCommand::execute()` now returns 0 to remove errors in OXID eShop 6.5.

## [1.0.1] - 2022-02-14
### Changed
- Increased required PHP version to 8.0.
- Added strict type mode to `CountCommand`.
- Added additional hints for installation to `README.md`.

## [1.0.0] - 2020-08-14
### Added
- Introduced the **OXID Academy Product Counter Service** as a console command.
