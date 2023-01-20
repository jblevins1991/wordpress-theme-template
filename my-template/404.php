<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

        <?php wp_head(); ?>
    </head>

    <body>
        <?php get_header(); ?>

        <main>
            <!-- html content here. -->
            <h1 class="font-sans text-4xl font-bold">
                Not Found | 404
            </h1>

            <p>This is embarrassing. It looks like we couldn't find that page.</p>
        </main>

        <?php get_footer(); ?>
    </body>
</html>
