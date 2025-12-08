# Municipio LTS Boilerplate

This boilerplate contains all you need to create a new Municipio LTS website.

## Setting up a new site

1. Clone this repository
2. Run `composer install` to install the PHP dependencies
3. Run `wp db create` to create the database (if using local environment)
4. Copy `.env.example` to `.env` and update it for your environment
5. Run `wp core install` or import a database
6. Log in to the WordPress admin
7. Update the site’s name and other settings as needed
8. Recommended: Update this README file with your project information

## Requirements

*   **ACF Pro**: This project requires [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/). You will need to purchase a license and install it manually or configure your own repository for it.
    *   **Manual Installation**: Extract the plugin to `web/app/mu-plugins/advanced-custom-fields-pro`.


