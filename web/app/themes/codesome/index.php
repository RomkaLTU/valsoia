<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <?php if (is_front_page() || is_home() || is_page_template('template-about.blade.php')) : ?>
      <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"
      />
    <?php endif ?>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <?php do_action('get_header'); ?>

    <div id="app" class="overflow-hidden" x-data="app">
      <?php echo view(app('sage.view'), app('sage.data'))->render(); ?>
    </div>

    <?php do_action('get_footer'); ?>

    <?php if (is_front_page() || is_home() || is_page_template('template-about.blade.php')) : ?>
      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <?php endif ?>

    <?php if (is_page_template('template-search.blade.php')) : ?>
      <script src="//destinilocators.com/valsoia/site/install/"></script>

      <script>
        document.addEventListener('DOMContentLoaded', (event) => {
          destini.init("destinidiv");
          destini.loadWidget("ASSOCIATIONID");
        })
      </script>
    <?php endif ?>

    <?php wp_footer(); ?>
  </body>
</html>
