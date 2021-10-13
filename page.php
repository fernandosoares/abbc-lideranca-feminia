<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= get_the_title() ?> | <?= get_bloginfo('site_name')?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-5"><?= get_the_title()?></h1>
                <?= get_the_content() ?>
            </div>
        </div>
    </div>

<?php wp_footer(); ?>
</body>

</html>