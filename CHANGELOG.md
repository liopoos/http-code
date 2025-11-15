# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.3] - 2025-11-15

### Changed
- Improved code documentation with comprehensive PHPDoc comments for all HTTP status codes
- Enhanced test coverage with detailed test cases for all status code categories
- Added better method documentation for `isSuccessful()` and `__callStatic()` methods

## [1.0.2] - 2025-01-13

### Fixed
- Fixed namespace issues

## [1.0.1]

### Fixed
- Fixed namespace issues
- Removed unrelated files

## [1.0.0]

### Added
- Initial release with HTTP status code constants
- Support for all standard HTTP status codes (1xx, 2xx, 3xx, 4xx, 5xx)
- Magic method support for accessing constants as static methods
- `isSuccessful()` helper method for checking 2xx status codes
