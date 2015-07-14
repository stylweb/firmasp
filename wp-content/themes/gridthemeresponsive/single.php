<?php get_header(); ?>
<div id="home-logo"><a href="<?php bloginfo('url'); ?>"></a></div>

    <div class="single_left">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <ul id="single-header">
            <li id="single-home">Home</li>
            <li id="single-news">Novidades</li>
            <li id="single-about">Sobre</li>
            <li id="single-contact">Contato</li>
        </ul>
      
        <div id="single-profile">
            <h1><?php the_title(); ?></h1>
        </div>
            
             <div id="single-bg">
                <?php if ( has_post_thumbnail() ) {
    the_post_thumbnail();
} ?>
            </div>
        <div class="single-box">
            <div class="single-news">
                <h2>Novidades</h2>
            <?php the_content(); ?>
        </div>
            
            
            <br/><br/>
            <div class="description">
                <h2>Sobre</h2>
                <p><?php echo get_field('descricao'); ?></p>
                <br/><br/>
            </div>
            <h2 id="single-title">Contato</h2>
            <div class="map"><?php echo get_field('mapa'); ?></div>
            <div class="details"><p><?php echo get_field('detalhes'); ?></p></div>
            <div class="comments">
                <?php comments_template(); ?>
            </div>
        
        </div>
            
        
        <?php endwhile; else: ?>
        
            <h3>Sorry, no posts matched your criteria.</h3>
        
        <?php endif; ?>    
    
        <div class="clear"></div>                    
    </div><!--//single_left-->
    
    
    <?php get_sidebar(); ?>
    
<?php get_footer(); ?>