<div class="w-full flex justify-between relative mb-20 max-sm:flex-col-reverse">
    <div class="w-1/2 pl-20 max-sm:pl-10 py-10 flex flex-col gap-2 max-sm:w-full">
        <p class="text-primary-yellow font-bold">Graphic Designer</p>
        <h1 class="text-6xl font-bold">Hello,  my name is Ana Campos</h1>
        <p class="text-gray-500">Short text with details about you, what you do or your professional career. You can add more information on the about page.</p>
        <div>
            <button class="yellow-btn">Projects</button>
        </div>
    </div>
    <div class="w-1/2 bg-cover flex justify-end max-sm:w-full" >
        <?php if( get_field('hero_image') ): ?>
            <img class="h-[400px]" src="<?php the_field('hero_image'); ?>" />
        <?php endif; ?>
    </div>
</div>