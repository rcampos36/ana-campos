<div class="flex flex-col items-center w-[500px] mx-auto mb-10 max-sm:w-full max-sm:px-16">
    <h1 class="text-4xl font-bold mb-10">Get In Touch</h1>
    <?php 
        $form = get_field('contact_me');
        gravity_form($form['id']);
    ?>
</div>