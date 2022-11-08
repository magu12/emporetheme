<footer class="footer">
    <div class="wrap">
        <a href="/" class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/image/logo.png" alt="">
        </a>
        <ul>
            <li>
                <a href="#hero">
                    Home
                </a>
            </li>
            <li>
                <a href="#about">
                    About
                </a>
            </li>
            <li>
                <a href="#history">
                    History
                </a>
            </li>
            <li>
                <a href="#game">
                    Games
                </a>
            </li>
            <li>
                <a href="#team">
                    Team
                </a>
            </li>
            <li>
                <a href="#careers   ">
                    Careers
                </a>
            </li>
            <li>
                <a href="#news">
                    News
                </a>
            </li>
        </ul>
        <div class="soc">
            <a href="mailto:<?php echo the_field('mail', 125) ?>?subject=<?php echo the_field('mail_subject_footer', 125) ?>" class="soc__item">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_6626_1754)">
                        <path d="M13.1429 25.7143V17.0297L20 21.6L26.8571 17.0297V25.7143H13.1429Z" fill="white" />
                        <path d="M20 19.5429L13.8286 15.4286H26.1714L20 19.5429Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.2857 8C9.02335 8 8 9.02335 8 10.2857V29.7143C8 30.9767 9.02335 32 10.2857 32H29.7143C30.9767 32 32 30.9767 32 29.7143V10.2857C32 9.02335 30.9767 8 29.7143 8H10.2857ZM11.9307 26.9265C12.2522 27.248 12.6882 27.4286 13.1429 27.4286H26.8571C27.3118 27.4286 27.7478 27.248 28.0693 26.9265C28.3908 26.605 28.5714 26.1689 28.5714 25.7143V15.4286C28.5714 14.9739 28.3908 14.5379 28.0693 14.2164C27.7478 13.8949 27.3118 13.7143 26.8571 13.7143H13.1429C12.7008 13.7139 12.2757 13.8842 11.9563 14.1897C11.6369 14.4953 11.4478 14.9124 11.4286 15.354V25.7143C11.4286 26.1689 11.6092 26.605 11.9307 26.9265Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_6626_1754">
                            <rect width="24" height="24" fill="white" transform="translate(8 8)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div>
        <div class="footer__image">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/image/Bella_Egyptian_Full 1.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/image/Icon_GiftOpen 1.png" alt="">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/image/Bella_zulu.png" alt="">
        </div>
        <div class="footer__bottom">
            <div class="copyright">
                © Empire Games. All rights reserved.
            </div>
            <div class="footer__law">
                <a href="<?php echo get_post_permalink(3); ?>" class="footer__law-link">Privacy Policy</a> | <a href="<?php echo get_post_permalink(134); ?>" class="footer__law-link">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php wp_footer(); ?>
</body>

</html>
