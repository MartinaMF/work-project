<section class="section | section--team-members" data-aos="fade-up"
         data-scroll-id="{{ App\Controllers\App::getUniqueName((get_sub_field('section_id') ?: get_row_layout())) }}">
  <div class="container">
    <article class="text-center">
      <h3>{!! get_sub_field('title') !!}</h3>
    </article>
    <div class="row | team-members-hld">
      @foreach(get_sub_field('members') as $member)
        <div class="col-12 | col-lg-2 | team-members-margin">
          <div class="member-image">
            <img src="{{ wp_get_attachment_image_url($member['member_image'], 'full-size')}}" class="image responsive"
                 alt="">
            <a href="{{ $member['linkedin_url'] }}" target="_blank">
              <div class="overlay">
                <div class="linkedin text-center"><i></i></div>
              </div>
            </a>
          </div>
        </div>
        <div class=" col-12 | col-lg-4 | team-members-margin">
          <h5>{!! $member['member_name'] !!}</h5>
          <p>{!! $member['member_about'] !!}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>
