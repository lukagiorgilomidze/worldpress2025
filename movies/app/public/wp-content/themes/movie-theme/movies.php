<?php 
// Template Name: Movies

get_header();

$customPosts = get_field('post');

echo '<pre>';
var_dump($customPosts);
echo '</pre>';

?>

<?php echo the_title(); ?>











<?php get_footer(); ?>