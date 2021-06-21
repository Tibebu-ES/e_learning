<div xmlns:wire="http://www.w3.org/1999/xhtml">


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">English for Specific Purpose Programs <strong>EPS</strong></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                        class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <ul class="users-list clearfix">
                @forelse($category as $c)
                    <li wire:click='getEpsCourse("{{$c["category"]}}")'>
                        <img src="{{ asset('img/admin/recent-program.png') }}" alt="User Image">
                        <a class="users-list-name" href="#"><strong>{{$c['category']}}</strong></a>
                        <span class="users-list-date">EPS</span>
                    </li>
                @empty
                    <div class="col-lg-12 col-md-12 text-center">
                        <p>No programs found</p>
                    </div>

                @endforelse
            </ul>
            <!-- /.users-list -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Add New Program
            </button>
        </div>
        <!-- /.card-footer -->
    </div>


        <div class="container-fluid">
                <div class="row">

                    @forelse($programs as $p)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                            <div class="tile bg-gradient-lightblue">
                                <div class="wrapper">
                                    <div class="header text-white">{{ $p['course_name'] }}</div>

                                    <div class="dates text-white">
                                        <div class="start">
                                            <strong>STARTS</strong>{{ $p['start_date'] }}
                                            <span></span>
                                        </div>
                                        <div class="ends">
                                            <strong>ENDS</strong>{{ $p['end_date'] }}
                                        </div>
                                    </div>

                                    <div class="stats text-white">

                                        <div>
                                            <strong>Request</strong> {{ $p['requested'] }}
                                        </div>

                                        <div>
                                            <strong>Joined</strong> {{ $p['joined'] }}
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 col-md-12  text-center">
                            <p>No Course Found</p>
                        </div>
                    @endforelse


                </div>
            </div>


</div>
