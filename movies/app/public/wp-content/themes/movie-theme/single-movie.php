<?php 
// Template Name: Movies

get_header();

$customPosts = get_field('post');
$movie_author = get_the_terms(get_the_ID(), 'films-author');
$movie_category = get_the_terms(get_the_ID(), 'films-category');
$customAuthor = get_field('authors', 'films-author_' . $movie_author[0]->term_id);

?>

<div class="single-movie">
    <h1><?php echo $customPosts['title_films']; ?></h1>
    <img src="<?php echo $customPosts['title_image']; ?>" alt="">
    <h3> <?php echo $customPosts['movie_language']; ?> </h3>
<h3>Date:     <time datetime=""><?php echo $customPosts['movie_date']; ?></time> </h3>
    <h4 > Gener: <?php echo $movie_category[0]->name; ?></h4>
<p><?php echo $customPosts['films_discpt']; ?></p>
<iframe width="640" height="360"
    src="https://www.youtube.com/embed/<?php echo $customPosts['trailer']; ?>"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen>
</iframe>
<div class="author">
    <h2> Author: <?php echo $movie_author[0]->name; ?></h2>
    <div class="flexbox">
        <img src="<?php echo $customAuthor['author_image']; ?>" alt="">
        <p><?php echo $customAuthor['author_info']; ?></p>
    </div>
</div>
</div>
