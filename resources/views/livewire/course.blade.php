<div>

    <div class="card">

        <div class="card-footer text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Standard Program
            </button>
        </div>


        <div class="card-header">
            <h3 class="card-title"><strong>Standard Programs</strong></h3>
        </div>

        <div class="card-body">
            <section class="pricing py-5">
                <div class="container">
                    <div class="row">

                        @forelse($category as $c)

                            <div class="col-lg-3 mb-3">
                                <div class="card mb-5 mb-lg-0">
                                    <div class="card-body" wire:click="getCourses('{{$c['category']}}')">
                                        <h6  class="card-price text-center">{{$c['category']}}</h6>
                                        <hr>
                                        <div class="justify-content-start">
                                            <p>{{ $c['description'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 text-center">
                                <img src="../../../images/nothing.png" alt="">
                                <p >No Standard Category Found</p>
                            </div>
                        @endforelse


                    </div>
                </div>
            </section>
        </div>

    </div>


    <div class="container-fluid">
        <div class="row">

            @forelse($programs as $p)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="tile  bg-gray-dark">
                        <div class="wrapper">
                            <div class="header">{{ $p['course_name'] }}</div>

                            <div class="dates text-white">
                                <div class="star">
                                    <strong>STARTS</strong>{{ $p['start_date'] }}
                                    <span></span>
                                </div>

                                <div class="ends">
                                    <strong>ENDS</strong>{{ $p['end_date'] }}
                                </div>
                            </div>

                            <div class="stats bg-primary">

                                <div>
                                    <strong>Request</strong> {{ $p['requested'] }}
                                </div>

                                <div>
                                    <strong>Joined</strong> {{ $p['joined'] }}
                                </div>

                            </div>


{{--                            <div class="footer text-center">--}}
{{--                                <a href="#" class="Cbtn Cbtn-primary">START</a>--}}
{{--                                <a href="#" class="Cbtn Cbtn-danger">END</a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-lg-12 col-md-12  text-center">
                    <img src="../../../images/nothing-sm.png" alt="">
                    <p>Program related course hasn't found</p>
                </div>
            @endforelse


        </div>
    </div>


</div>


