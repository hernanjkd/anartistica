<?php

include('blog/wp-load.php');

get_header();

?>




<table><tr>
<td id="left">

<h2 class="title" style="font-size: 2.3em">Archives</h2>

<?php

echo '<table id="archives">';


$posts = get_posts('numberposts=-1&order=DESC&orderby=post_date');
foreach ($posts as $post) { 

	start_wp();

 	echo '<tr> <td><img src="http://'. $_SERVER['HTTP_HOST'] .'/blog/wp-content/themes/twentyten/images/flor.jpg"</td> 

		<td class="arctitles"> <a href="';

	the_permalink();
	echo '">';
	the_title();
    
	echo '</a> </td> <td style="font-weight:normal">';

	the_time('F j');

	echo '</td></tr>';
}

?>

</table>

</td><td id="right">

<?php get_sidebar(); ?>

</td>
</tr></table>

<?php get_footer(); ?>