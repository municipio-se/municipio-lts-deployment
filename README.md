# Municipio LTS Boilerplate

This boilerplate contains all you need to create a new Municipio LTS website.

## Setting up a new site

1. Clone this repository
2. Run `composer install` to install the PHP dependencies
3. Create a `.env` file in the root directory based on the `.env.example` file
   and update it for your environment
4. Run `wp db create` to create the database
5. Import the boilerplate database with `wp db import boilerplate.sql`
6. Recommended: Remove the `boilerplate.sql` file
7. Set a new password for the WordPress admin user with
   `wp user update 1 --user_pass=<new_password>`
8. Update the site’s name and other settings as needed
9. Recommended: Update this README file with your project information

## Additional steps for local development

1. Run `pnpm install` to install the JavaScript dependencies
2. Run `valet link --secure <your-local-domain>` to make the site available at
   `https://<your-local-domain>.test`
3. Go to `https://<your-local-domain>.test/wp-admin` in your browser
4. Log in with username `admin` and the password you set in the previous step

## Requirements

- **ACF Pro**: This project requires
  [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/). You
  will need to purchase a license and install it manually or configure your own
  repository for it.
  - **Manual Installation**: Extract the plugin to
    `web/app/mu-plugins/advanced-custom-fields-pro`.
