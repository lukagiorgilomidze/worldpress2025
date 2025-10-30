<?php 
$hero_section = get_field('hero_section');

$hero_image = $hero_section['hero_image'];
$hero_title = $hero_section['title'];
$hero_spam = $hero_section['spam'];
$hero_button = $hero_section['button_text'];
$hero_button_link = $hero_section['button_link'];
echo "<pre>";
print_r($hero_section);
echo "</pre>";

?>

<section>

    <div class="hero-section" style="background-image: url(<?php echo $hero_image['url']; ?>);">
        <div class="hero-content">
            <h1><?php echo $hero_title; ?>
            <span><?php echo $hero_spam; ?></span>
        </h1>
        
            <a href="<?php echo $hero_button_link; ?>" class="hero-button"><?php echo $hero_button; ?></a>
        </div>
    </div>

</section>