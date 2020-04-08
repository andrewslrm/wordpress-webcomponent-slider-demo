<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Example web components">
    <meta name="author" content="">

    <title>Web Components</title>
    <?php wp_head();?>
</head>

<body>
    <main>
        <macro-carousel pagination loop>

            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <article class="slide">
                    <figure>
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <h3><?php the_title(); ?></h3>
                </article>
            <?php endwhile; endif; ?>
        </macro-carousel>
    </main>

    <?php wp_footer(); ?>
</body>
</html>