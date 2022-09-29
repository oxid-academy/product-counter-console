# OXID Academy Product Counter Console
This package is part of the OXID Academy Training Development Basics. Please see our website for current [training offers](https://www.oxid-esales.com/ressourcen/academy/schulungen/).

## Description
This extension is an OXID eShop Component. It introduces a new command to the OXID Console of your OXID eShop. The command uses the [OXID Academy Product Counter Service](https://github.com/oxid-academy/product-counter-service), which counts all available products in the shop. The extension allows to receive the number of products directly from the CLI.

## Installation
You only need to run a single Composer command to install this extension in your OXID eShop:
```
composer require oxid-academy/product-counter-console
```

## Usage
Simply run the introduced command on your CLI:

```
./vendor/bin/oe-console oxac:product-counter:count
```

## Troubleshooting
If you encounter any issues after installation, please clear your `source/tmp` directory. You can do this by running the `oe:cache:clear` command:

```
./vendor/bin/oe-console oe:cache:clear
```
