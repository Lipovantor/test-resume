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
?>

<main class="home">
  <div class="container">
    <div class="background-block"></div>
    <section class="left-block">
      <div class="box">
        <h1 class="box__title" data-aos="fade-down" data-aos-delay="50">JONH</h1>
        <h1 class="box__subtitle" data-aos="fade-down" data-aos-delay="200">SMITHSON</h1>
        <h2 class="box__name" data-aos="fade-down" data-aos-delay="300" >DESIGNER</h2>
      </div>
      <div class="social" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <h2 class="social__title">Social Media</h2>
        <a class="social__item social__instagram">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_13_45)">
            <path d="M12 2C14.717 2 15.056 2.01 16.122 2.06C17.187 2.11 17.912 2.277 18.55 2.525C19.21 2.779 19.766 3.123 20.322 3.678C20.8305 4.1779 21.224 4.78259 21.475 5.45C21.722 6.087 21.89 6.813 21.94 7.878C21.987 8.944 22 9.283 22 12C22 14.717 21.99 15.056 21.94 16.122C21.89 17.187 21.722 17.912 21.475 18.55C21.2247 19.2178 20.8311 19.8226 20.322 20.322C19.822 20.8303 19.2173 21.2238 18.55 21.475C17.913 21.722 17.187 21.89 16.122 21.94C15.056 21.987 14.717 22 12 22C9.283 22 8.944 21.99 7.878 21.94C6.813 21.89 6.088 21.722 5.45 21.475C4.78233 21.2245 4.17753 20.8309 3.678 20.322C3.16941 19.8222 2.77593 19.2175 2.525 18.55C2.277 17.913 2.11 17.187 2.06 16.122C2.013 15.056 2 14.717 2 12C2 9.283 2.01 8.944 2.06 7.878C2.11 6.812 2.277 6.088 2.525 5.45C2.77524 4.78218 3.1688 4.17732 3.678 3.678C4.17767 3.16923 4.78243 2.77573 5.45 2.525C6.088 2.277 6.812 2.11 7.878 2.06C8.944 2.013 9.283 2 12 2ZM12 7C10.6739 7 9.40215 7.52678 8.46447 8.46447C7.52678 9.40215 7 10.6739 7 12C7 13.3261 7.52678 14.5979 8.46447 15.5355C9.40215 16.4732 10.6739 17 12 17C13.3261 17 14.5979 16.4732 15.5355 15.5355C16.4732 14.5979 17 13.3261 17 12C17 10.6739 16.4732 9.40215 15.5355 8.46447C14.5979 7.52678 13.3261 7 12 7V7ZM18.5 6.75C18.5 6.41848 18.3683 6.10054 18.1339 5.86612C17.8995 5.6317 17.5815 5.5 17.25 5.5C16.9185 5.5 16.6005 5.6317 16.3661 5.86612C16.1317 6.10054 16 6.41848 16 6.75C16 7.08152 16.1317 7.39946 16.3661 7.63388C16.6005 7.8683 16.9185 8 17.25 8C17.5815 8 17.8995 7.8683 18.1339 7.63388C18.3683 7.39946 18.5 7.08152 18.5 6.75ZM12 9C12.7956 9 13.5587 9.31607 14.1213 9.87868C14.6839 10.4413 15 11.2044 15 12C15 12.7956 14.6839 13.5587 14.1213 14.1213C13.5587 14.6839 12.7956 15 12 15C11.2044 15 10.4413 14.6839 9.87868 14.1213C9.31607 13.5587 9 12.7956 9 12C9 11.2044 9.31607 10.4413 9.87868 9.87868C10.4413 9.31607 11.2044 9 12 9V9Z" fill="#E94D35"/>
            </g>
            <defs>
            <clipPath id="clip0_13_45">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
            </defs>
          </svg> 
          <span class="social__link">@flowbase.co</span>
        </a>
        <a href="#" class="social__item social__ball">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_13_50)">
          <path d="M19.989 11.572C19.907 9.99791 19.3596 8.4836 18.416 7.221C18.1285 7.53063 17.8212 7.82124 17.496 8.091C16.4969 8.92085 15.3805 9.59819 14.183 10.101C14.35 10.451 14.503 10.79 14.638 11.11V11.113C14.6761 11.2024 14.7128 11.2924 14.748 11.383C16.262 11.213 17.858 11.275 19.405 11.484C19.611 11.512 19.805 11.542 19.989 11.572ZM10.604 4.122C11.5785 5.49517 12.4772 6.92064 13.296 8.392C14.519 7.91 15.53 7.302 16.344 6.625C16.6266 6.39213 16.8925 6.13985 17.14 5.87C15.701 4.65972 13.8803 3.99733 12 4C11.532 3.99968 11.0649 4.04017 10.604 4.121V4.122ZM4.253 9.997C4.93423 9.97981 5.61464 9.93878 6.293 9.874C7.93264 9.72734 9.55828 9.4525 11.155 9.052C10.3205 7.60221 9.41955 6.19171 8.455 4.825C7.42472 5.3354 6.51626 6.06141 5.79124 6.95379C5.06623 7.84617 4.54162 8.88404 4.253 9.997ZM5.783 17.035C6.171 16.468 6.681 15.83 7.358 15.136C8.812 13.646 10.528 12.486 12.514 11.846L12.576 11.828C12.411 11.464 12.256 11.139 12.1 10.833C10.264 11.368 8.33 11.702 6.403 11.875C5.463 11.96 4.62 11.997 4 12.003C3.99823 13.8356 4.62829 15.6128 5.784 17.035H5.783ZM15.005 19.415C14.6194 17.4703 14.0735 15.5607 13.373 13.706C11.371 14.433 9.776 15.496 8.543 16.764C8.0454 17.2664 7.60382 17.8213 7.226 18.419C8.60481 19.4478 10.2797 20.0025 12 20C13.0299 20.0015 14.0504 19.8035 15.005 19.417V19.415ZM16.878 18.34C18.4393 17.1398 19.5028 15.4057 19.865 13.47C19.525 13.385 19.094 13.3 18.62 13.234C17.5661 13.0822 16.4968 13.0711 15.44 13.201C16.0351 14.8798 16.5155 16.5971 16.878 18.341V18.34ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22Z" fill="#E94D35"/>
          </g>
          <defs>
          <clipPath id="clip0_13_50">
          <rect width="24" height="24" fill="white"/>
          </clipPath>
          </defs>
          </svg>
          <span href="#" class="social__link">https://dribbble.com/flowbase</span>
        </a>
      </div>

      <div class="education" data-aos="fade-right" data-aos-delay="50">
        <h2 class="education__logo">Education</h2>
        <div class="education__box">
          <h3 class="education__title">Degree title here</h3>
          <p class="education__subtitle">Description</p>
          <span class="education__years">2020-2022</span>
        </div>
        <div class="education__box">
          <h3 class="education__title">Degree title here</h3>
          <p class="education__subtitle">Description</p>
          <span class="education__years">2020-2022</span>
        </div>
      </div>

      <div class="skills" data-aos="fade-right" data-aos-delay="200">
        <h2 class="skills__logo">Skills</h2>
        <div class="skills__box">
          <h3 class="skills__title">Photo Editing</h3>
          <progress class="progress-file" id="file" max="100" value="90"> 90% </progress>
          <h3 class="skills__title">Illustration</h3>
          <progress class="progress-file" id="file" max="100" value="60"> 60% </progress>
          <h3 class="skills__title">UX Design</h3>
          <progress class="progress-file" id="file" max="100" value="90"> 90% </progress>
          <h3 class="skills__title">Wireframing</h3>
          <progress class="progress-file" id="file" max="100" value="40"> 40% </progress>
        </div>
      </div>

    </section>

    <section class="right-block" data-aos="flip-left" data-aos-delay="100">
      <p class="right-block__title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p class="right-block__title">Cepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      <img src="img/Profile.jpg" alt="Profile" class="right-block__img">
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