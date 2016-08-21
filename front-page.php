<?php
/**
 *
 * Template Name: Home Page
 *
 */
get_header(); ?>

<section>
    <div class="parallax-window" data-parallax="scroll" data-image-src="http://personal_site.com/wp-content/uploads/2016/08/20150710_142109.jpeg" data-natural-width="2560" data-natural-height="1440" data-bleed="10" data-speed="0.2" style="height:700px"></div>
</section>

<section style="margin-top: 1em;">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php echo the_title(); ?></h1>
                <h2>Test</h2>
                <?php echo the_content(); ?>
            <?php endwhile; endif; ?>
        </main>
    </div>
</section>

<section>
    <div class="parallax-window" data-parallax="scroll" data-image-src="http://personal_site.com/wp-content/uploads/2016/08/20150524_181830-e1471810939894.jpg" data-natural-width="5312" data-natural-height="2988" data-bleed="10" data-speed="0.2" style="height:700px"></div>
</section>

<section>
    <p>
        Bacon ipsum dolor amet shank tongue doner, strip steak alcatra hamburger capicola pork belly sirloin shoulder landjaeger venison short ribs prosciutto boudin.
        Filet mignon kielbasa alcatra frankfurter, cupim turkey shank. Cow biltong ground round strip steak pastrami pig meatloaf ribeye venison beef ribs ball tip rump bresaola.
        Shoulder shank venison shankle beef ribs, bresaola biltong filet mignon alcatra capicola brisket short loin. Leberkas capicola pork, ham brisket pork belly sirloin
        landjaeger pig shankle flank bacon. Pastrami bacon capicola andouille. T-bone spare ribs frankfurter tri-tip.
        T-bone capicola shoulder doner cupim turkey beef ribs cow. Salami pork loin prosciutto shoulder bacon meatloaf venison landjaeger pork belly
        bresaola short loin turkey picanha capicola tri-tip. Alcatra pork pig sirloin beef ribs bresaola ribeye pancetta t-bone meatball meatloaf. Short loin shank capicola meatball.
        Kevin bacon beef ribs turkey. Sausage prosciutto alcatra, drumstick tenderloin hamburger kielbasa pork chop andouille sirloin beef ribs pancetta.
        Beef ribs spare ribs pig, jerky porchetta drumstick kielbasa meatball t-bone. Tail boudin pork pork belly. Kevin rump ball tip bresaola cupim pig tri-tip ham.
        Pork loin shankle strip steak pork chop. Meatball cupim shank beef t-bone rump. Spare ribs pork chicken cupim t-bone corned beef landjaeger filet
        mignon shankle porchetta bacon salami tongue strip steak. Short loin doner spare ribs kevin flank, beef ribs hamburger short ribs.
        Picanha flank prosciutto cow biltong andouille bacon cupim spare ribs venison shank tongue short loin beef ribs. Pork chicken kevin chuck alcatra,
        drumstick shoulder ham short loin leberkas spare ribs beef ribs jowl ribeye shankle. Boudin pork turducken, swine doner strip steak shank sirloin kevin shankle t-bone.
        Pig corned beef sirloin, tail cow shankle swine pork belly ham hock. Porchetta meatloaf pig pork chop. Swine tenderloin shoulder tongue ribeye biltong strip
        steak landjaeger pastrami ball tip, ham hock chicken turducken shank.
    </p>
</section>

<section>
    <div class="parallax-window" data-parallax="scroll" data-image-src="http://personal_site.com/wp-content/uploads/2016/08/20150207_175143-e1471814497533.jpg" data-natural-width="5312" data-natural-height="2988" data-bleed="10" data-speed="0.2" style="height:700px"></div>
</section>

<section>
    <p>
        Bacon ipsum dolor amet shank tongue doner, strip steak alcatra hamburger capicola pork belly sirloin shoulder landjaeger venison short ribs prosciutto boudin.
        Filet mignon kielbasa alcatra frankfurter, cupim turkey shank. Cow biltong ground round strip steak pastrami pig meatloaf ribeye venison beef ribs ball tip rump bresaola.
        Shoulder shank venison shankle beef ribs, bresaola biltong filet mignon alcatra capicola brisket short loin. Leberkas capicola pork, ham brisket pork belly sirloin
        landjaeger pig shankle flank bacon. Pastrami bacon capicola andouille. T-bone spare ribs frankfurter tri-tip.
        T-bone capicola shoulder doner cupim turkey beef ribs cow. Salami pork loin prosciutto shoulder bacon meatloaf venison landjaeger pork belly
        bresaola short loin turkey picanha capicola tri-tip. Alcatra pork pig sirloin beef ribs bresaola ribeye pancetta t-bone meatball meatloaf. Short loin shank capicola meatball.
        Kevin bacon beef ribs turkey. Sausage prosciutto alcatra, drumstick tenderloin hamburger kielbasa pork chop andouille sirloin beef ribs pancetta.
        Beef ribs spare ribs pig, jerky porchetta drumstick kielbasa meatball t-bone. Tail boudin pork pork belly. Kevin rump ball tip bresaola cupim pig tri-tip ham.
        Pork loin shankle strip steak pork chop. Meatball cupim shank beef t-bone rump. Spare ribs pork chicken cupim t-bone corned beef landjaeger filet
        mignon shankle porchetta bacon salami tongue strip steak. Short loin doner spare ribs kevin flank, beef ribs hamburger short ribs.
        Picanha flank prosciutto cow biltong andouille bacon cupim spare ribs venison shank tongue short loin beef ribs. Pork chicken kevin chuck alcatra,
        drumstick shoulder ham short loin leberkas spare ribs beef ribs jowl ribeye shankle. Boudin pork turducken, swine doner strip steak shank sirloin kevin shankle t-bone.
        Pig corned beef sirloin, tail cow shankle swine pork belly ham hock. Porchetta meatloaf pig pork chop. Swine tenderloin shoulder tongue ribeye biltong strip
        steak landjaeger pastrami ball tip, ham hock chicken turducken shank.
    </p>
</section>


<?php get_footer(); ?>
