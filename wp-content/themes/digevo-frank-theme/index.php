<?php get_header(); ?>

  <main class="index-content">

    <div class="main-index" id="home_section">
      <section>
        <h1><?= apply_filters('the_title', get_post(14)->post_title); ?></h1>
        <article>
          <?= apply_filters('the_content', get_post(14)->post_content); ?>
        </article>
      </section>
    </div>

    <section class="contact-section" id="contact_section">
      <article class="wrapp-contact-section">

        <h2>CONTACT FORM</h2>
        <?php echo do_shortcode('[testfk]'); ?>

      </article>
    </section>

  </main>

<?php get_footer(); ?>
