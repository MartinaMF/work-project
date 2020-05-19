<section class="section | section--product-gallery" data-aos="fade-up"data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
    <div class="container">
        <article class="text-center">
        <h3>{!! get_sub_field('title') !!}</h3>
        </article>
        <div id="gallery" class="row | gallery-hld | js-gallery-fancy">
        @foreach(get_sub_field('gallery_images') as $image)
          <div class="col-12 | col-sm-6 | col-lg-4">
          <a class="gallery-item | disabled-actions" href="{{ wp_get_attachment_image_url($image['image'], 'full-size')}}"  data-fancybox="gallery">
            <div class="img-hld">
                <img class="img-fluid" src="{{ wp_get_attachment_image_url($image['image'], 'full-size')}}" alt="">
            </div>
            <p class="text-center">{!! $image['image_description'] !!}</p>
          </a>
          </div>
        @endforeach
       </div>
    </div>
</section>