<?php get_header(); ?>


  <div class="hero-image" id="home">
    <div class="col-lg-6 text-left hero-text">
      <h1>Hi.<br />I'm Tim Rodgers.</h1>
      <h3>I make websites.</h3>
      <h5>(Responsive Wordpress Developer)</h5>
    </div>
  </div>

  <div id="bio">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2>I am a web designer, developer and owner of Divine Connections Design.</h2>
          <h4>I specialize in websites that are both dynamic and informative, and look great on any device.</h4> 

          <p>I can help you build your online presence.  Why is that important?  We live in a <strong>connected</strong> world. Shoot, even our refrigerators connect to the internet nowadays!  You want the <strong>message</strong> of your organization or your business's products and services to reach the eyes of the users that need or want it most.  I can <strong>optimize</strong> your site so that search engines list it at the top of their search results.</p>

          <p>I like websites that get your attention but it is more important that it meets the needs of your organization.  I have experience building custom <strong>Wordpress</strong> themes from Photoshop designs that are <strong>"responsive"</strong>, meaning whether your users are viewing your site with a mobile device, a tablet or a desktop, the site adjusts to their screen size.</p>
        </div>
        <div class="col-md-4">
          <img src="images/tablet-desktop-mobile.png" class="img-responsive">
        </div>
      </div>  
    </div>
  </div>

  <div id="portfolio" class="container-fluid">

      <div class="row">
	<div class="pf-section col-md-6 col-md-offset-2">
          <div class="col-md-5 pf-image">
            <img src="images/portfolio/setfree-thumb.jpg" class="img-responsive">
	  </div>
          <div class="col-md-5 col-md-offset-1">
	    <h5>Set Free Band</h5>
            <h6>Static HTML/PHP site</h6>
            <p>Site built with static HTML and a scratch PHP template system. The band had some great images from a recent photo shoot and used one for a hero image and landing page. Site contained bios of each member, upcoming events calendar and embedded Youtube videos.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="pf-section col-md-5 col-md-offset-1 pf-dsparks">
          <div class="col-md-5">
	    <h5>Deborah Sparks Realty</h5>
            <h6>Wordpress Site</h6>
            <p>Custom Wordpress theme for a client of 5pints Media.  One-page design with hero slider, parallax section, FAQ with dropdowns, testimonial gallery, contact form and embedded Google map widget.</p>
          </div>
	  <div class="col-md-6 col-md-offset-1 pf-image">
            <img src="images/portfolio/dsparks-thumb.jpg">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="pf-section col-md-6 col-md-offset-2">
          <div class="col-md-5 pf-image">
            <img src="images/portfolio/newlife-thumb.jpg">
	  </div>
	  <div class="col-md-5 col-md-offset-1">
	    <h5>New Life Worship Center</h5>
            <h6>Wordpress Site</h6>
            <p>Rebranded my old church from a logo redesign a friend drew up after we changed our name.  Integrated colors and styles from the new logo.  Originally a static site built on a scratch PHP template system, then later converted to Wordpress. Customized an events section from Google Calendar and embedded slider graphics from the weekly overhead announcements. Also contained a media page that populates the most recent sermons from a podcast.</p>
          </div>
        </div>
      </div>
  </div>

<!-- The Wordpress Loop -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
<!-- Loop End -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
