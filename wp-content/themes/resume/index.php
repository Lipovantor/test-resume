<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Test Theme
 * @since Test Theme 1.0
 */

get_header();
$leftSide = get_field('left_side');
$rightSide = get_field('right_side');
$rightSide = get_field('right_side');

$social = get_field('social');

$education = get_field('education');
$educationGroup1 = get_field('education_group_1');
$educationGroup2 = get_field('education_group_2');
$educationGroup3 = get_field('education_group_3');
?>

<main class="home">
  <div class="container">
    <div class="background-block" style="background-color: <?php echo get_field('bg_color') ?>"></div>
    <section class="left-block">
      <div class="box">
        <h1 class="box__title" data-aos="fade-down" data-aos-delay="50"><?php echo $leftSide['name'] ?></h1>
        <h1 class="box__subtitle" data-aos="fade-down" data-aos-delay="200"><?php echo $leftSide['last_name'] ?></h1>
        <h2 class="box__name" data-aos="fade-down" data-aos-delay="300" ><?php echo $leftSide['position'] ?></h2>
      </div>
      <div class="social" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <h2 class="social__title"><?php echo $social['title'] ?></h2>
        <a class="social__item social__instagram" href="<?php echo $social['first_link']['url'] ?>" target="<?php echo $social['first_link']['target'] ?>">
          <img src="<?php echo $social['first_link_image'] ?>" alt="" class="social__img">
          <span class="social__link"><?php echo $social['first_link']['title'] ?></span>
        </a>
        <a href="#" class="social__item social__ball" href="<?php echo $social['second_link']['url'] ?>" target="<?php echo $social['second_link']['target'] ?>">
          <img src="<?php echo $social['second_link_image'] ?>" alt="" class="social__img">
          <span href="#" class="social__link"><?php echo $social['second_link']['title'] ?></span>
        </a>
      </div>

      <div class="education" data-aos="fade-right" data-aos-delay="50">
        <h2 class="education__logo"><?php echo get_field('education_title') ?></h2>
        <?php if($educationGroup1['name'] && $educationGroup1['description'] && $educationGroup1['years']) { ?>
          <div class="education__box">
            <h3 class="education__title"><?php echo $educationGroup1['name'] ?></h3>
            <p class="education__subtitle"><?php echo $educationGroup1['description'] ?></p>
            <span class="education__years"><?php echo $educationGroup1['years'] ?></span>
          </div>
        <?php } ?>
        <?php if($educationGroup2['name'] && $educationGroup2['description'] && $educationGroup2['years']) { ?>
          <div class="education__box">
            <h3 class="education__title"><?php echo $educationGroup2['name'] ?></h3>
            <p class="education__subtitle"><?php echo $educationGroup2['description'] ?></p>
            <span class="education__years"><?php echo $educationGroup2['years'] ?></span>
          </div>
        <?php } ?>
        <?php if($educationGroup3['name'] && $educationGroup3['description'] && $educationGroup3['years']) { ?>
          <div class="education__box">
            <h3 class="education__title"><?php echo $educationGroup3['name'] ?></h3>
            <p class="education__subtitle"><?php echo $educationGroup3['description'] ?></p>
            <span class="education__years"><?php echo $educationGroup3['years'] ?></span>
          </div>
        <?php } ?>
      </div>

      <?php 
      $skills = get_field('skills');

      $skillsGroup1 = get_field('skills_group_1');
      $skillsGroup2 = get_field('skills_group_2');
      $skillsGroup3 = get_field('skills_group_3');
      $skillsGroup4 = get_field('skills_group_4');
      ?>

      <div class="skills" data-aos="fade-right" data-aos-delay="200">
        <h2 class="skills__logo"><?php echo get_field('skills_title') ?></h2>
        <div class="skills__box">
          <?php if($skillsGroup1['title']) { ?>
            <h3 class="skills__title"><?php echo $skillsGroup1['title'] ?></h3>
            <progress class="progress-file" id="file" max="100" value="<?php echo $skillsGroup1['progress'] ?>"><?php echo $skillsGroup1['progress'] ?>%</progress>
          <?php } ?>
          <?php if($skillsGroup2['title']) { ?>
            <h3 class="skills__title"><?php echo $skillsGroup2['title'] ?></h3>
            <progress class="progress-file" id="file" max="100" value="<?php echo $skillsGroup2['progress'] ?>"><?php echo $skillsGroup2['progress'] ?>%</progress>
          <?php } ?>
          <?php if($skillsGroup3['title']) { ?>
            <h3 class="skills__title"><?php echo $skillsGroup3['title'] ?></h3>
            <progress class="progress-file" id="file" max="100" value="<?php echo $skillsGroup3['progress'] ?>"><?php echo $skillsGroup3['progress'] ?>%</progress>
          <?php } ?>
          <?php if($skillsGroup4['title']) { ?>
            <h3 class="skills__title"><?php echo $skillsGroup4['title'] ?></h3>
            <progress class="progress-file" id="file" max="100" value="<?php echo $skillsGroup4['progress'] ?>"><?php echo $skillsGroup4['progress'] ?>%</progress>
          <?php } ?>
        </div>
      </div>

    </section>

    <section class="right-block" data-aos="flip-left" data-aos-delay="100">
      <p class="right-block__title"><?php echo $rightSide['text_top'] ?></p>
      <p class="right-block__title"><?php echo $rightSide['text_bottom'] ?></p>
      <img src="<?php echo $rightSide['photo'] ?>" alt="Profile" class="right-block__img">
      <h2 class="right-block__experience">Work Experience</h2>
      <div class="info" data-aos="fade-up" data-aos-delay="10">
        <ul class="info__item">
          <li class="info__present">April 2020 - Present</li>
          <li class="info__title">Senior UX/UI Designer</li>
          <li class="info__text">Company name here.</li>
          <li class="info__text_bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
      </div>

      <div class="info" data-aos="fade-up" data-aos-delay="150">
        <ul class="info__item">
          <li class="info__present">May 2018 - April 2020</li>
          <li class="info__title">Mid-level UX/UI Designer</li>
          <li class="info__text">Company name here.</li>
          <li class="info__text_bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
      </div>

      <div class="info" data-aos="fade-up" data-aos-delay="300">
        <ul class="info__item">
          <li class="info__present">April 2014 - May 2018</li>
          <li class="info__title">Junior UX/UI Designer</li>
          <li class="info__text">Company name here.</li>
          <li class="info__text_bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</li>
        </ul>
      </div>
  </section>
  </div>
</main>

<?php
get_footer();