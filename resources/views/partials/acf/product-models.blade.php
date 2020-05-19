<section class="section | section--product-models" data-aos="fade-up"data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>
    <div class="row | tabs">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item | col-6 | text-center| device">
          <a class="nav-link | active" id="pills-device-tab" data-toggle="pill" href="#pills-device" role="tab" aria-controls="pills-device" aria-selected="true">Device</a>
        </li>
        <li class="nav-item  | col-6 | text-center| virtual">
          <a class="nav-link | virtual" id="pills-virtual-tab" data-toggle="pill" href="#pills-virtual" role="tab" aria-controls="pills-virtual" aria-selected="false">Virtual</a>
        </li>
      </ul>
    </div>
   <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-device" role="tabpanel" aria-labelledby="pills-device-tab">
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

    <div class="tab-pane fade" id="pills-virtual" role="tabpanel" aria-labelledby="pills-virtual-tab" data-aos="fade-up">
      <div class="row | images-row" data-aos="fade-up">
        <div class="col-6 | left-image">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('virtual-image1'), 'full-size')}}" class="img-fluid" alt="">
        </div>
        <div class="col-6 | right-image">
          <img src="{{ wp_get_attachment_image_url(get_sub_field('virtual-image2'), 'full-size')}}" class="img-fluid" alt="">
        </div>
      </div>
      <div class="row | description" data-aos="fade-up">
          <div class="title col-12"> {!! get_sub_field('description-title') !!}</div>
          <article data-aos="fade-up">
            <div class="col-12 col-md-6">{!! get_sub_field('text1') !!}</div>
            <div class="col-12 col-md-6">{!! get_sub_field('text2') !!}</div>
          </article>
      </div>
      <div class="row | description-2" data-aos="fade-up">
        <div class="col-12 col-md-6 | image-3">
        <img src="{{ wp_get_attachment_image_url(get_sub_field('virtual-image3'), 'full-size')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-6">
        {!! get_sub_field('text3') !!}
        </div>
      </div>
    </div>
   </div>
  </div>
</section>
    