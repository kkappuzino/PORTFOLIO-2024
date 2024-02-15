<div class="scroll">
    <section class="layer-0 border-bottom">
        <div class="flex-container">
            <div class="row my-4 py-2">
                <div class="col-3 logo text-center">+++++++++</div>
                <div class="col-6 line text-center"><span class="border m-auto"></span></div>
                <div class="col-3 switches">
                    <button class="the-swi-mod">Modern</button>
                    <button class="the-swi-bas">Basic</button>
                    <button class="darkmode">Light</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12 vh-80">
                    <h1 class="text-center mainfont big border"><?php echo $project_name; ?></h1>
                    <h1 class="text-center secfont big2"><?php echo $project_year; ?></h1>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-3 line text-center"><i class="bi bi-chevron-compact-left"></i><i class="bi bi-diamond"></i><i class="bi bi-chevron-compact-right"></i></div>
                <div class="col-6 line text-center"></div>
                <div class="col-3 logo text-center">+++++++++</div>
            </div>
        </div>
    </section>


    <section id="sectionPin">
        <div class="pin-wrap">

            <div id="About" class="container p-0">
                <div class="row  my-4 py-2">
                    <div class="col-1 d-none d-lg-inline-block line"><i class="bi bi-hexagon-fill"></i> <i class="bi bi-hexagon-fill"></i> <i class="bi bi-hexagon-fill"> </i></div>
                    <div class="col-8 d-none d-lg-inline-block line text-center"><span class="border"></span></div>
                    <div class="col-3 d-none d-lg-inline-block logo text-center">+++++++++</div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h1 class="mainfont big"><?php echo $project_title1; ?></h1>
                        <div class=""><img src="<?php echo $project_img1; ?>" alt="<?php echo $project_img1_alt; ?>"></div>

                    </div>
                    <div class="col-6">
                        <p class="para"><?php echo $project_p1; ?></p>
                    </div>
                </div>
            </div>

            <!--////////////////////-->


            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h1 class="mainfont big text-uppercase"><?php echo $project_title2; ?></h1>
                    </div>
                    <div class="col-8">
                        <img src="<?php echo $project_img2; ?>" alt="<?php echo $project_img2_alt; ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>