<div>
    <div class="portfolio-area clearfix">


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6">
                    <div class="vcard-projects-menu">
                        <div class="portfolio-menu">
                            <button class="btn active" data-filter="*">All</button>
                            <button class="btn" data-filter=".standA1">Standard - A1</button>
                            <button class="btn" data-filter=".standA2">Standard - A2</button>
                            <button class="btn" data-filter=".standB2">Standard - B2</button>
                            <button class="btn" data-filter=".standC2">Standard - C2</button>
                            <button class="btn" data-filter=".eps">EPS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row vcard-portfolio">

                @forelse($allCourses as $c)
                    @if($c['category'] == 'A1')
                        <div class="col-12 col-sm-6 col-xl-4 single-portfolio-area standA1">
                            <img src="../../../img/core-img/course.jpg" alt="">
                            <!-- Content -->
                            <div class="portfolio-content">
                                <h5>{{ $c['course_name'] }}</h5>
                                <a href="#" class="catagory text-dark">{{$c['description']}}</a>
                            </div>
                            @forelse($allRegCourses as $reg)
                                @if(($c['id'] == $reg['program_id']) && ($reg['user_id'] == @auth()->id()))
                                    <button type="button"  class="btn btn-primary" disabled>Registered</button>
                                    @break
                                @else
                                    @if($loop->last)
                                        <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                                    @endif
                                @endif
                            @empty
                                <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                            @endforelse
                        </div>
                    @elseif ($c['category'] == 'A2')
                        <div class="col-12 col-sm-6 col-xl-4 single-portfolio-area standA2">
                            <img src="../../../img/core-img/course.jpg" alt="">
                            <!-- Content -->
                            <div class="portfolio-content">
                                <h5>{{ $c['course_name'] }}</h5>
                                <a href="#" class="catagory text-dark">{{$c['description']}}</a>
                            </div>
                            @forelse($allRegCourses as $reg)
                                @if(($c['id'] == $reg['program_id']) && ($reg['user_id'] == @auth()->id()))
                                    <button type="button"  class="btn btn-primary" disabled>Registered</button>
                                    @break
                                @else
                                    @if($loop->last)
                                        <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                                    @endif
                                @endif
                            @empty
                                <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                            @endforelse
                        </div>
                    @elseif ($c['category'] == 'B2')
                        <div class="col-12 col-sm-6 col-xl-4 single-portfolio-area standB2">
                            <img src="../../../img/core-img/course.jpg" alt="">
                            <!-- Content -->
                            <div class="portfolio-content">
                                <h5>{{ $c['course_name'] }}</h5>
                                <a href="#" class="catagory text-dark">{{$c['description']}}</a>
                            </div>
                            @forelse($allRegCourses as $reg)
                                @if(($c['id'] == $reg['program_id']) && ($reg['user_id'] == @auth()->id()))
                                    <button type="button"  class="btn btn-primary" disabled>Registered</button>
                                    @break
                                @else
                                    @if($loop->last)
                                        <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                                    @endif
                                @endif
                            @empty
                                <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                            @endforelse
                        </div>
                    @elseif ($c['category'] == 'C2')
                        <div class="col-12 col-sm-6 col-xl-4 single-portfolio-area standC2">
                            <img src="../../../img/core-img/course.jpg" alt="">
                            <!-- Content -->
                            <div class="portfolio-content">
                                <h5>{{ $c['course_name'] }}</h5>
                                <a href="#" class="catagory text-dark">{{$c['description']}}</a>
                            </div>
                            @forelse($allRegCourses as $reg)
                                @if(($c['id'] == $reg['program_id']) && ($reg['user_id'] == @auth()->id()))
                                    <button type="button"  class="btn btn-primary" disabled>Registered</button>
                                    @break
                                @else
                                    @if($loop->last)
                                        <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                                    @endif
                                @endif
                            @empty
                                <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                            @endforelse
                        </div>
                    @else
                        <div class="col-12 col-sm-6 col-xl-4 single-portfolio-area eps">
                            <img src="../../../img/core-img/course.jpg" alt="">
                            <!-- Content -->
                            <div class="portfolio-content">
                                <h5>{{ $c['course_name'] }}</h5>
                                <a href="#" class="catagory text-dark">{{$c['description']}}</a>
                            </div>
                            @forelse($allRegCourses as $reg)
                                @if(($c['id'] == $reg['program_id']) && ($reg['user_id'] == @auth()->id()))
                                    <button type="button"  class="btn btn-primary" disabled>Registered</button>
                                    @break
                                @else
                                    @if($loop->last)
                                        <button type="button"  wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                                    @endif
                                @endif
                            @empty
                                <button type="button" wire:click='register("{{$c["id"]}}","{{ $c['course_name'] }}","{{ $c['description'] }}","{{ $c['category'] }}")' class="btn btn-primary">Register</button>
                            @endforelse
                        </div>
                    @endif
                @empty
                    <p> No programs found!</p>
                @endforelse



            </div>
        </div>

    </div>


</div>
