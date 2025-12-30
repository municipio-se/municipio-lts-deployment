# Municipio LTS Deployment

This boilerplate contains all you need to create a new Municipio LTS website. It
relies heavily on
[the accompanying package bundle](https://github.com/municipio-se/municipio-lts)
which contains the Municipio theme and a set of required and recommended
plugins.

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
8. Update the site’s name and other settings as needed via WP-CLI or the
   WordPress admin interface
9. Recommended: Replace this README file with one suited for your project

## Additional steps for local development

This boilerplate contains configuration for Prettier and Valet to help with
local development. Locally we recommend following these additional steps:

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

## Deployment

This project uses a **standard Bedrock-based WordPress setup**.

WordPress core, plugins, and themes are managed via **Composer**. The structure follows the default Bedrock layout without additional abstractions or custom deployment logic.

Deployment follows the standard Bedrock approach. Refer to the official documentation for details:

* [https://roots.io/bedrock/docs/deployment/](https://roots.io/bedrock/docs/deployment/)

For server provisioning and automated deployments, the setup is compatible with **Trellis**:

* [https://roots.io/trellis/](https://roots.io/trellis/)

Trellis is optional. The project can be deployed using any workflow that supports Bedrock-based WordPress installations.
