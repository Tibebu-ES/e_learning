<div>

    <div class="post">

        <div class="card-body">
            <div id="accordion">
                @forelse($disc as $d)
                    <div class="card card-widget" >

                        <div class="card-header bg-gradient-navy">
                            <h4 class="card-title w-100" >
                                <a class="d-block w-100" data-toggle="collapse"
                                   href="#collapse{{$loop->index}}">{!! $d['title'] !!}</strong>
                                </a>
                            </h4>
                        </div>

                        <div id="collapse{{$loop->index}}" class="collapse" data-parent="#accordion">
                            <div class="card-body ">
                                @forelse($top_comment as $tp)
                                    @if($tp['forum_id'] == $d['id'])
                                        <div class="post clearfix">
                                            <div class="user-block">
                                                <img class="img-circle img-bordered-sm" src="../img/core-img/stud-icon.png" alt="User Image">
                                                <span class="username">
                                                <a href="#" class="font-bold">{{$tp->user_name}}</a></span>
                                                <span class="description text-dark">{{$tp->created_at->diffForHumans()}}</span>
                                            </div>
                                            <!-- /.user-block -->
                                            <h6 class="text-dark">{{ $tp->commented_data }}</h6>
                                        </div>
                                    @endif
                                    @if($loop->last)
                                        <form method="post" action="{{ route('stud.add.comment',['id'=>$d['id']]) }}" class="form-horizontal">
                                            <div class="input-group input-group-sm mb-0">
                                                {{ @csrf_field() }}

                                                <div>@error('newComment') <span class="text-danger">{{ $message }}</span> @enderror</div>
                                                <input class="form-control form-control-sm" name="newComment" placeholder="Share your ideas">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-danger">Send</button>
                                                </div>

                                            </div>
                                        </form>
                                    @endif
                                @empty
                                    <form method="post" action="{{ route('stud.add.comment',$d['id']) }}" class="form-horizontal">
                                        <div class="input-group input-group-sm mb-0">
                                            {{ @csrf_field() }}
                                            <input class="form-control form-control-sm" name="newComment" placeholder="Share your ideas">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-danger">Send</button>
                                            </div>
                                            <div class="input-group-sm">
                                                @error('newComment') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </form>
                                @endforelse
                            </div>
                        </div>

                    </div>
                @empty
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title w-100">
                                <a class="d-block w-100"
                                   data-toggle="collapse"
                                   href="#collapseTwo">
                                    There is no forums!
                                </a>
                            </h4>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>

    </div>

</div>
