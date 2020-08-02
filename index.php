<?php
    get_header();
?>
        <?php $home = get_field('home_first_section'); ?>
        <section class="s1 py-5" id="firstsec">
        <div class="container py-5">
          <div class="row">
            <div class="col-md-12">
              <h1 class="title"><? echo $home['section_title']; ?></h1>
              <h5 class="subtitle pt-2"><? echo $home['section_subtitle']; ?></h5>
              <div class="row py-4">
                <div class="col-md-3 col-sm-6">
                  <img src="<? echo $home['image']; ?>" class="img-fluid w-80 mx-auto" alt="">
                </div>
                <div class="col-md-9 col-sm-6 my-auto py-3 text-justify">
                  <p><? echo $home['image_right_description']; ?></p>
                </div>
              </div>
              <p><? echo $home['description_below_image']; ?></p>
              <div class="row pt-3">
                <div class="col-md-10 text-right mx-auto">
                  <img src="<? echo $home['signature']; ?>" class="img-fluid" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    
        <?php $over = get_field('over_section'); ?>
        <section class="s2 py-5" id="Over">
            <div class="container text-center text-white py-5">
              <h1><?php echo $over['first_title']; ?></h1>
              <h1><?php echo $over['second_title']; ?></h1>
              <?php if($over['description']): ?>
              <p><?php echo $over['description']; ?></p>
              <?php endif;?>
              <a href="#Contact" class="btn mt-3">Contacteer ons</a>
            </div>
        </section>

        
        <?php $price = get_field('prijslijst_section'); ?>
      <section class="s3 py-5" id="Prijzen">
        <div class="container text-center text-justify">
          <h1 class="title"><?php echo $price['title']; ?></h1>
          <h6><?php echo $price['red_subtitle']; ?></h6>
          <p><?php echo $price['description']; ?></p>

          <h3 class="pt-4"><?php echo $price['table_title']; ?></h3>
          <div class="table-responsive">
              <?php 
          $table = $price['table'];
            if ( ! empty ( $table ) ) { ?>
                <table class="table table-borderless">
                    <?php
                    if ( ! empty( $table['header'] ) ) { ?>
                    <thead>
                        <tr>
                            <?php 
                                foreach( $table['header'] as $th ) {
                                    echo '<th scope="col"><p>';
                                        echo $th['c'];
                                    echo '</p></th>';
                                }
                                ?>
                        </tr>
                      </thead>
                      <?php } ?>
                    <tbody>
                        <?php
                        foreach ( $table['body'] as $tr ) {
                            echo '<tr>';
                                foreach ( $tr as $td ) {
                                    echo '<td>';
                                        echo $td['c'];
                                    echo '</td>';
                                }
                            echo '</tr>';
                        } ?>
                    </tbody>
                </table>
            <?php } ?>
            
            </div>
            <div class="row pt-4">
              <div class="col-md-10 mx-auto">
                <p><?php echo $price['details_below_table']; ?></p>
            </div>
          </div>
        </div>
      </section>

      
      <?php $foto = get_field('fotos_section'); ?>
      <section class="s4 container-fluid bg-dark" id="Foto">
        <div class="row py-5 frow">
          <div class="col-md-12 text-center py-4">
            <h1><?php echo $foto['fotos_title']; ?></h1> 
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 px-0">
              <?php 
                $images = $foto['image_gallery'];
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <a data-fancybox="gallery" href="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['url']); ?>" class="float-left img-fluid" alt="Foto Gallery">
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
          </div>
        </div>
      </section>
      
      
      <?php $contact = get_field('contact_section'); ?>
      <section class="s5 py-5" id="Contact">
        <div class="container py-4">
          <h1 class="title"><?php echo $contact['contact_title']; ?></h1>
          <h6><?php echo $contact['contact_subtitle']; ?></h6>
          <div class="row">
            <div class="col-md-6 pr-5 pt-5">
                <?php echo do_shortcode('[contact-form-7 id="9" title="Contact form"]'); ?>
              

              <div class="row pt-4">
                <div class="col-md-12">
                  <a href="tel:<?php echo $contact['contact_number']; ?>" class="d-block mb-2">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2 svg"><path fill="#f41353" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path></svg>
                    <?php echo $contact['contact_number']; ?>
                  </a>
                  <a href="mailto:<?php echo $contact['contact_email']; ?>">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="at" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mr-2"><path fill="#f41353" d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z" class=""></path></svg>
                    <?php echo $contact['contact_email']; ?>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 pl-5 pt-5">
              <iframe src="<?php echo $contact['map']; ?>" class="w-100" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              <p class="pt-3"><?php echo $contact['address_below_map']; ?></p>
            </div>
          </div>
        </div>
      </section>

<?php
get_footer();
