@if($checkClass)
    <div class="row">
        <div class="col-md-7">
            <div class="alert alert-danger">
                <h5><i class="fa fa-ban mr-2"></i>There is no class</h5>
                Video provides a powerful way to help you prove your point.
                When you click Online Video, you can paste in the embed code for the video
                you want to add.
                </ul>
            </div>
        </div>

    </div>
@else
    @if($class_type[0]['type'] == 'Group')

        <div class="col-lg-8 col-md-8">
            @if($checkContent)
                <div class="card card-primary">
                    <div class="card-header text-white">
                        <h5 class="float-right text-white">{{ $section_meta }}</h5>
                        <h4 class="text-white">{{ $section_contents['title'] }}</h4>
                    </div>

                    <div class="card-body">
                        <p class="font-bold">
                            @foreach($section_contents['content'] as $con)
                                @if($section_contents['title'] != 'Attachments')
                                    <h7>{!!  $con.'<br>' !!}</h7>
                                    @if($questions)
                                        <input type="text" wire:model="answers"  placeholder="write the answer"/>
                                    @endif
                                @else
                                    <button href="#" wire:click="courseFinale" class="btn btn-tool text-blue" data-toggle="tooltip"
                                            title="Download Attachment!"
                                            wire:click="downloadDoc('{{$con}}')">{!!  $con.'<br>' !!}</button>
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="card-footer">
                        @if(!$finished)
                            @if($pre_btn)
                                <button class="btn btn-app" wire:click="previous">
                                    <i class="fa fa-hand-o-left"></i> Previous
                                </button>
                            @else
                                <button class="btn btn-app" disabled>
                                    <i class="fa fa-hand-o-left"></i> Previous
                                </button>
                            @endif
                            <button class="btn btn-app" wire:click="next" $next_status>
                                <i class="fa fa-hand-o-right"></i> Next
                            </button>
                        @else
                            <a href="#" wire:click="courseFinale"><span class="fa fa-download mr-2"/> Download Certificate! </a>
                        @endif
                    </div>
                </div>
            @endif
        </div>

{{--        chat system--}}
        <div class="col-md-4">

            <div class="card card-primary direct-chat direct-chat-success">

                <div class="card-header align-items-center">
                    <h3 class="card-title text-white float-right">Active Students</h3>
                </div>

                <div class="card-body">
                    <div class="direct-chat-messages" style="height: 345px">

                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user1-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user3-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user1-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user3-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user1-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user3-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user1-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                        <div class="direct-chat-msg right">
                            <div class="direct-chat-infos clearfix">
                                <span class="direct-chat-name float-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                            </div>
                            <!-- /.direct-chat-infos -->
                            <img class="direct-chat-img" src="/../dist/img/user3-128x128.jpg"
                                 alt="Message User Image">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                            <!-- /.direct-chat-text -->
                        </div>

                    </div>

                </div>


                <div class="card-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..."
                                   class="form-control"> <span class="input-group-append">
                      <button type="submit" class="btn btn-success">Send</button> </span>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    @else

        <div class="col-lg-10 col-md-10">

            @if($checkContent)
                <div class="card card-primary">
                    <div class="card-header text-white">
                        <h5 class="float-right text-white">{{ $section_meta }}</h5>
                        <h4 class="text-white">{{ $section_contents['title'] }}</h4>
                    </div>


                    <div class="card-body">
                        <p class="font-bold">
                            @foreach($section_contents['content'] as $con)
                                @if($section_contents['title'] != 'Attachments')
                                    <h7>{!!  $con.'<br>' !!}</h7>
                                    @if($questions)
                                        <input type="text" placeholder="write the answer" wire:model="answers">
                                    @endif
                                @else
                                    <button href="#" class="btn btn-tool text-blue" data-toggle="tooltip"
                                            title="Download Attachment!"
                                            wire:click="downloadDoc('{{$con}}')">{!!  $con.'<br>' !!}</button>
                                @endif
                            @endforeach
                        </p>
                    </div>
                    <div class="card-footer">
                        @if(!$finished)
                            @if($pre_btn)
                                <button class="btn btn-app" wire:click="previous">
                                    <i class="fa fa-hand-o-left"></i> Previous
                                </button>
                            @else
                                <button class="btn btn-app" disabled>
                                    <i class="fa fa-hand-o-left"></i> Previous
                                </button>
                            @endif
                            <button class="btn btn-app" wire:click="next" $next_status>
                                <i class="fa fa-hand-o-right"></i> Next
                            </button>
                        @else
                            <a href="#" wire:click="courseFinale"><span class="fa fa-download mr-2"/> Download Certificate </a>
                        @endif
                    </div>
                </div>
            @endif

        </div>
    @endif
@endif
