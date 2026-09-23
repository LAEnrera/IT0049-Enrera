# CodeIgniter 4 POS Foundations

A basic four-page Point-of-Sale system built with CodeIgniter 4 for IT0049 Web System Technologies.

## Features

- Landing page
- About page
- Customer Accounts page
- User Accounts page
- Navigation links between all pages
- Customer and user records displayed from static PHP arrays
- `foreach` loops used to display account records
- No database is used in this version

## Requirements

- XAMPP with Apache
- PHP
- Composer
- CodeIgniter 4

## Local Setup

1. Clone this repository into the XAMPP `htdocs` folder.
2. Open the project folder in VS Code.
3. Create a `.env` file from the `env` file if needed.
4. Set the environment to development:

   ```env
   CI_ENVIRONMENT = development