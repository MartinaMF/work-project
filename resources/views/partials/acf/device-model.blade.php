<section class="section | section--device-model" data-aos="fade-up"data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>   
     <div class="row device">
      <div class="col-5 col-md-4 | product-models-left-side">
        <img src="{{ wp_get_attachment_image_url(get_sub_field('left_image'), 'full-size')}}" class="img-fluid" alt="">
      </div>
      <div class="col-12 col-md-8 | d-flex">
         <div class="product-models-right-side | my-auto">
          @foreach(get_sub_field('models') as $model)
          <div class="model-hld">
            <div class="model-image | text-center">
            <img src="{{ wp_get_attachment_image_url($model['model_image'], 'full-size')}}" class="img-fluid" alt="">
            </div>
            <div class="model-description">  
            <h5>{!! $model['model_name'] !!}</h5>
            <p>{!! $model['model_description'] !!}</p>
            </div>
          </div>
         @endforeach
        </div> 
      </div>
     </div>
  </div>
</section>
    