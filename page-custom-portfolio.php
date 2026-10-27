<?php
/* Template Name: Page Development for Portfolio */

get_header();

remove_action( 'astra_entry_top', 'astra_entry_top_content_template' );
?>


<main id="main" class="site-main w-100 p-0 m-0">

            <div class="portfolio-hero-wrapper w-100 p-0 m-0">
                <?php
                if (have_posts()):
                    while (have_posts()):
                        the_post();
                        the_content(); 
                    endwhile;        
                endif;
                ?>
            </div>
    <section class="custom-content-section py-5 bg-white text-dark w-100 pb-5">
    <h2 class="display-4 text-center mb-3">Title two</h2> 
    <div class="container"> 

        <div class="row mb-5 gx-5 gy-4"> 
        
    
        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">1</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading one</h3> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi ducimus dolorem amet aut quae, et in cupiditate temporibus mollitia est, dignissimos facilis dolorum ab labore sequi vel beatae non voluptatum!</p> 
            </div> 
            </div> 
        </div> 


        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">2</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading two</h3> 
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p> 
            </div> 
            </div> 
        </div> 

    
        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">3</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading three</h3> 
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta.</p> 
            </div> 
            </div> 
        </div> 

    
        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">4</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading four</h3> 
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p> 
            </div> 
            </div> 
        </div> 

        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">5</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading five</h3> 
                <p>>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> 
            </div> 
            </div> 
        </div> 


        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">6</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading six</h3> 
                <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p> 
            </div> 
            </div> 
        </div> 

    
        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">7</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading seven</h3> 
                <p>>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p> 
            </div> 
            </div> 
        </div> 


        <div class="col-md-6"> 
            <div class="d-flex gap-2"> 
            <div class="number"> 
                <span class="bg-secondary py-2 px-4 fs-3 rounded-circle">8</span> 
            </div> 
            <div> 
                <h3 class="fs-2 text-center">Heading eight</h3> 
                <p> Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p> 
            </div> 
            </div> 
        </div> 

        </div> 
    </div> 
    </section>

    <section class="bg-black text-white w-100 position-relative overflow-hidden py-5">
        <div class="container px-3">
            <h1 class="heading-testimonial text-center text-white py-3 mb-4 rounded">Testimonial Slider</h1>

            <div class="row justify-content-center m-0">
                <div class="col-12 col-md-10 col-lg-8">
                    
                    <div id="desktopCarousel" class="carousel slide testimonial-carousel pb-5 d-none d-md-block" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#desktopCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#desktopCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        </div>
                        
                        <div class="carousel-inner px-5">
                            <?php
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => 4
                                );

                                $q = new WP_Query($args);
                                $posts_array = array();

                                if ($q->have_posts()) {
                                    while ($q->have_posts()) {
                                        $q->the_post();
                                        $posts_array[] = array(
                                            'title'     => get_the_title(),
                                            'excerpt'   => wp_trim_words(get_the_excerpt(), 15),
                                            'thumb_url' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : ''
                                        );
                                    }
                                    wp_reset_postdata();
                                }

                                $chunks = array_chunk($posts_array, 2);
                                
                                foreach ($chunks as $index => $pair) :
                                    $active_class = ($index === 0) ? 'active' : '';
                                    ?>
                                    <div class="carousel-item <?php echo $active_class; ?>">
                                        <div class="row justify-content-center">
                                            
                                            <?php foreach ($pair as $single_post) : ?>
                                                <div class="col-12">
                                                    <div class="card bg-dark text-white border-secondary h-100 shadow-lg overflow-hidden horizontal-slide-box">
                                                        <div class="row g-0 h-100 align-items-center">
                                                            <div class="col-4 text-center p-3 testimonial-divider">
                                                                <?php if (!empty($single_post['thumb_url'])): ?>
                                                                    <img src="<?php echo esc_url($single_post['thumb_url']); ?>" alt="<?php echo esc_attr($single_post['title']); ?>" class="testimonial-img img-fluid">
                                                                <?php endif; ?>
                                                            </div>
                                                            <div class="col-8">
                                                                <div class="card-body py-3 px-4">
                                                                    <h3 class="card-title h5 text-start mb-2 text-white"><?php echo esc_html($single_post['title']); ?></h3>
                                                                    <p class="card-text text-start text-secondary small italic-text m-0"><?php echo esc_html($single_post['excerpt']); ?></p>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </div>  
                                                </div>
                                            <?php endforeach; ?>

                                        </div>
                                    </div>
                                <?php 
                                endforeach; 
                            ?>           
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#desktopCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#desktopCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- Mobile Carousel -->
                    <div id="mobileCarousel" class="carousel slide testimonial-carousel pb-5 d-block d-md-none" data-bs-ride="carousel" data-bs-interval="3000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#mobileCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        </div>
                        
                        <div class="carousel-inner px-5">
                            <?php
                            $q_mobile = new WP_Query($args);
                            $c_mobile = 0; 

                            if ($q_mobile->have_posts()):
                                while ($q_mobile->have_posts()):
                                    $q_mobile->the_post();
                                    $a_c_mobile = ($c_mobile == 0) ? 'active' : '';
                                    ?>
                                    <div class="carousel-item <?php echo $a_c_mobile; ?>">
                                        <div class="row justify-content-center">
                                            <div class="col-12 mb-3">
                                                <div class="card bg-dark text-white border-secondary h-100 shadow-lg">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top">
                                                    <?php endif; ?>
                                                    <div class="card-body">
                                                        <h3 class="text-center mt-1"><?php the_title(); ?></h3>
                                                        <p class="card-text pb-2"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                                                    </div>  
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $c_mobile++;
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                        
                        <button class="carousel-control-prev" type="button" data-bs-target="#mobileCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#mobileCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>

<?php 
get_footer(); 
?>
