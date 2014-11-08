TYPO3 Repository Client API/CLI
===============================

[![Build Status](https://travis-ci.org/NamelessCoder/typo3-repository-client.svg?branch=master)](https://travis-ci.org/NamelessCoder/typo3-repository-client) [![Coverage Status](https://img.shields.io/coveralls/NamelessCoder/typo3-repository-client.svg)](https://coveralls.io/r/NamelessCoder/typo3-repository-client)

TYPO3 Extension Repository (TER) client library and CLI commands

Usage
-----

Each command which can be executed has a corresponding class, for example `NamelessCoder\TYPO3RepositoryClient\Uploader` and a CLI script which acts as a wrapper for said class. The parameters which should be passed to each CLI script *must be the same arguments and in the same order as required by the class' method*.

### Uploader

As component:

```php
$uploader = new \NamelessCoder\TYPO3RepositoryClient\Uploader();
$uploader->upload('/path/to/extension', 'myusername', 'mypassword', 'An optional comment');
```

And as CLI command:

```bash
./bin/upload /path/to/extension myusername mypassword "An optional comment"
```