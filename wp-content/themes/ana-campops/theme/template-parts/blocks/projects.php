<div class="w-[990px] mx-auto flex flex-col mb-20 max-sm:w-full">
    <div class="projects flex flex-col items-center max-sm:px-10">
        <div class="text-4xl mb-10 font-bold">
            <h1><?php the_field('main_title'); ?></h1>
        </div>
        <?php

            if( have_rows('projects') ):

                while( have_rows('projects') ) : the_row(); ?>
                    <div class="project flex max-sm:flex-col max-sm:w-full bg-primary-white justify-center items-center rounded-3xl <?php the_sub_field('project_class'); ?>">
                        <div class="w-1/2 max-sm:w-full p-10 ">
                            <h1 class="text-xl font-bold mb-2"><?php the_sub_field('project_title'); ?></h1>
                            <p><?php the_sub_field('project_description'); ?></p>
                            <button class="yellow-btn" href="<?php the_sub_field('project_link'); ?>"><?php the_sub_field('project_link_text'); ?></button>
                        </div>
                        
                        <div class="w-1/2 max-sm:w-full">
                            <?php if( get_sub_field('project_image') ): ?>
                                <img class="max-sm:w-full" src="<?php the_sub_field('project_image'); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                <?php
                endwhile;

            else :

            endif;
        ?>
    </div>
</div>