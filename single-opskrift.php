<?php get_header(); ?>

	<?php get_sidebar('opskrift'); ?>

<!-- Row for main content area -->
	<div class="small-12 large-9 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article>
	
 <?php
echo get_the_term_list( $post->ID, 'type',
'', ', ', '' );
?>

			<header>
				<h1><?php the_title(); ?></h1>
			</header>
<hr/>


<div class="large-4 columns">
<div class="row">
<table width=100%>
  <thead>
    <tr>
      <th>

 <form style="margin: 0 0 -1em;">
  <div class="row">
    <div class="large-12 columns">
      <div class="row collapse">

      	<div class="small-3 columns">
      <span class="prefix">Til</span>
    </div>
        <div class="small-4 columns">
         <input type="text" placeholder="2">
        </div>
        <div class="small-5 columns">
          <span class="postfix radius">personer</span>
        </div>
      </div>
    </div>
  </div>
</form>



    </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><form class="custom"><label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> 200g <span data-tooltip class="has-tip" title="100 gram koster 29,95 i Kvickly kun i dag">hvid chokolade</span></label></form></td>
    </tr>
  </tbody>
</table>
</div>

</div>
<div class="large-8 columns"><?php the_content(); ?></div>


			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>

		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>