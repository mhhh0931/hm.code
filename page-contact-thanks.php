<?php get_header();?>

<main>
    <section id="contact__page">
        <div class="contact__wapper">
        <h2 class="contact__title">Contact</h2>
        <p class="contact__subtitle">-<?php the_title(); ?>-</p>
<div class="contact-check">
        <div class="main-container">
        	<div class="check-container">
        		<div class="check-background">
        			<svg viewBox="0 0 65 51" fill="none" xmlns="http://www.w3.org/2000/svg">
        				<path d="M7 25L27.3077 44L58.5 7" stroke="white" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
        			</svg>
        		</div>
        		<div class="check-shadow"></div>
        	</div>
        </div>
    <div class="contact__thanks--text">
        <p><?php the_content(); ?></p>
    </div>
        
    <button class="contact__thanks--button">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOMEに戻る</a>
        </button>
		 
  </div>
</section>
</main>		   
				      
			
		
		 
	


  
</div>
    </section>
</main>
<?php get_footer(); ?>