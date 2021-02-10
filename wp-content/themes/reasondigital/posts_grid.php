

<div class="post-category-sel">
	<a class="categ-sel categ-sel-active">All</a>
<?php 
	if( $terms = get_terms( array(
    'taxonomy' => 'category',
    'orderby' => 'name'
) ) ) : 
	foreach ( $terms as $term ) :
		echo '<a class="categ-sel" id="' . $term->term_id . '">' . $term->name . '</a>'; // ID of the category as an option value
	endforeach;
endif;
	?>
</div>


	
<ul class="home-posts">
	
</ul>


<script>
	
	function get_posts(category)
	{
        var str = '&action=categ_filter' +'&category=' + category;
        jQuery.ajax({
            type: "POST",
            dataType: "html",
            url: "<?php echo site_url() ?>/wp-admin/admin-ajax.php",
            data: str,
            success: function (data) {
				var payload = jQuery.parseJSON( data );
				
				$('.home-posts').empty(); 
				
				if (payload.success == true)
				{
					for (i = 0, len = payload.results.length; i < len; i++) {
					   $('.home-posts').append('<div class="home-tiles d-inline-block text-center col-md-4"><a class="" href="' + payload.results[i].link + '">' + '<img class="home-posts-thumbnail" src="'+ payload.results[i].thumbnail +'" /><span class="home-posts-title">' + payload.results[i].title + '</span><span class="home-posts-categ">' + payload.results[i].category + '</span</a></div>'); 
					
					}
				}
				else
				{
				}
				
				
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus);
            }
        });
        return false;
	}
	
	
	$( ".categ-sel" ).click(function() {
		get_posts( this.id );
		$( ".categ-sel-active" ).each(function( index ) {
		  $(this).removeClass('categ-sel-active');
		});
		$(this).addClass('categ-sel-active');
	});
	
	$( document ).ready(function() {
		get_posts("");
		
		
		
	});
	
	
	
</script>