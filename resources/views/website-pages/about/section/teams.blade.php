@php
  $team = array(
        ['img'=>'assets/img/team/team-1.jpg',
        'name'=>'Walter White',
        'position'=>'Web Development',
        'description'=>'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut',
        'twitter'=>'#',
        'facebook'=>'#',
        'instagram'=>'#',
        'linkedin'=>'#'],
        ['img'=>'assets/img/team/team-2.jpg',
        'name'=>'Sarah Jhinson',
        'position'=>'Marketing',
        'description'=>'Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus',
        'twitter'=>'#',
        'facebook'=>'#',
        'instagram'=>'#',
        'linkedin'=>'#'],
        ['img'=>'assets/img/team/team-3.jpg',
        'name'=>'William Anderson',
        'position'=>'Content',
        'description'=>'Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara',
        'twitter'=>'#',
        'facebook'=>'#',
        'instagram'=>'#',
        'linkedin'=>'#'],
    )
@endphp

<!-- ======= Our Team Section ======= -->
<section id="team" class="team pt-0">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <span>Our Team</span>
        <h2>Our Team</h2>

      </div>
      
      <div class="row gy-4" 
         
         data-aos="fade-up" data-aos-delay="100">
         @foreach ( $team as $member )
          <div class="col-lg-4 col-md-6 d-flex">
            
             @include('website-pages.about.section.our-team',[
                'img'=>$member['img'],
                'name'=>$member['name'],
                'position'=>$member['position'],
                'description'=>$member['description'],
                'twitter'=>$member['twitter'],
                'facebook'=>$member['facebook'],
                'instagram'=>$member['instagram'],
                'linkedin'=>$member['linkedin'],
                ])
          </div><!-- End Team Member -->
         @endforeach
       </div>

    </div>
</section><!-- End Our Team Section -->
