# Wordpress Theme Template Repository

You can use this github template to build themes for wordpress. It comes with a docker-based development system for local testing and configuration and tooling for x-unit testing.

## File Structure

WordPress themes have a very particular file naming convention. But you only need the `index.php`, `style.css`, and `functions.php` file to have a theme. All other files are add-ons for more content.

### Additional Files

- 404.php - the 404 page for when a post or page is not found.
- archive.php - 
- attachment.php - 
- author.php - 
- category.php - the page that shows all posts for a given category.
- comments.php - 
- date.php - 
- front-page.php - 
- functions.php - the file where all of your hooks and business logic goes.
- home.php - 
- image.php - 
- index.php - 
- page.php - 
- rtl.css - 
- single.php - 
- style.css - the main stylesheet for the theme.
- tag.php - the page that shows all posts for a given tag.
- taxonomy.php - 

## Starting the Development Environment

Our development environments use Docker to start up an Apache, PHP, and MySQL server. The docker-compose.yml configuration file can be found at `.docker/`.

The `.docker/config/` directory contains the environment configuration for the different services that run. The `Dockerfile` at the root contains the configuration for our Apache web service.

```shell
    # cd into our docker directory
    cd .docker

    # run our docker compose services
    docker compose up -d
```