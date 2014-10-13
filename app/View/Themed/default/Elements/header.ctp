<section>
    <header class="header">
        <div class="row">
            <div class="small-16 small-centered columns text-center">
                <h1 class="replace logo">
                    <span><?php echo $website_title_for_layout; ?></span>
                    <?php
                    echo $this->Html->image("logo.png", array(
                        "alt" => $website_title_for_layout." : Homepage",
                        'url' => '/')
                    );
                    ?>
                </h1>
            </div>
        </div>   
    </header>
</section>