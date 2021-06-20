@if($checkContent)
    <div class="row">
        <div class="col-lg-10 col-md-10">
            <!-- small card -->
            <div class="small-box bg-yellow ">
                <div class="inner h-100 ">

                    @if(!$last_page)
                        <h3>{{ $course_name }}</h3>
                        <p class="text-dark font-bold font-italic">Exam Questions</p>

                        <h6>{{ $contents }}</h6>
                        <input class="mt-3 mb-2 bg-transparent w-50 rounded" type="text" wire:model.lazy="answers">
                        <span class="fa fa-arrow-circle-right fa-3x pl-2 text-dark float-right"
                              data-toggle="tooltip" title="Next Question" wire:click="next" style="cursor: pointer"/>
                    @else
                        <h3>{{ $course_name }}</h3>
                        <p class="text-dark font-bold font-italic">Exam Questions</p>

                        <h3>Congratulation</h3>
                        <h6>You have socred 25/30! pleas go to the class room to take the full course by clicking this icon
                            <span class="fa fa-book fa-2x pl-2 text-dark" wire:click="goToClass" style="cursor: pointer"/>
                        </h6>

                    @endif

                </div>
                <div class="icon">
                    <i class="fa fa-question-circle-o"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 col-md-10">
            <!-- small card -->
            <div class="small-box bg-gradient-gray">
                <div class="inner h-100">

                    <p class="text-white font-bold font-italic">Warning! -- Pre-Exam Questions</p>
                    <h6 class="text-white">You can also type a keyword to search online for the video that best fits
                        your document.
                        To make your document look professionally produced, Word provides header,
                        footer, cover page, and text box designs that complement each other.</h6>
                    <ol>
                        <li>To make your document look professionally produced</li>
                        <li> Word provides header, footer, cover page</li>
                        <li>and text box designs that complement each other.</li>
                    </ol>
                </div>
                <div class="icon">
                    <i class="fa fa-eye-slash"></i>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="row">
        <div class="col-md-7">
            <div class="alert alert-danger">
                <h5><i class="fa fa-ban mr-2"></i>There is no Test!</h5>
                Video provides a powerful way to help you prove your point.
                When you click Online Video, you can paste in the embed code for the video
                you want to add.
                </ul>
            </div>
        </div>
    </div>
@endif

