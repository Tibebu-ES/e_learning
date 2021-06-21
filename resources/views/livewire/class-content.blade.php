<div class="row" xmlns:wire="http://www.w3.org/1999/xhtml">

    <div class="col-md-4">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Files</h3>

                <div class="card-tools">
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th colspan="2">
                            <input type='file' name="files[]" multiple wire:model='doc_files'>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><strong>Files</strong></td>
                    </tr>
                    @forelse($doc_files as $docf)
                        <tr>
                            <td>{{ $docf->getClientOriginalName() }}<i class="fas fa-trash text-red float-right"
                                                                       wire:click="removeFile({{$loop->index}})"></i>
                            </td>
                        </tr>
                    @empty
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <button type="submit" class="btn btn-primary">Add Content</button>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <span wire:click="addPQuestion" class="fa fa-brain fa-2x float-right text-orange"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <span wire:click="addQuestion" class="fa fa-question-circle fa-2x float-right text-orange"/>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <span wire:click="addContent" class="fa fa-plus-circle fa-2x float-right text-orange"/>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="inputStatus">Select Course</label>
            <select multiple id="inputStatus" name="course_name" class="form-control custom-select" size="9">
                @forelse($addedCourses as $addC)
                    <option>{{ $addC['course_name'] }}</option>
                @empty
                @endforelse
            </select>
        </div>
    </div>

    @foreach($steps as $step)

        <div class="col-md-4">
            <div>
                <span class="fa fa-times-circle text-red float-right" wire:click="removeStep({{$loop->index}})"/>
            </div>
            <div class="form-group">
                <label for="inputName{{$step}}">Topic {{ $step }}</label>
                <input type="text" id="inputName{{$step}}" name="course_title[]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputDescription{{$step}}">Content</label>
                <textarea id="inputDescription{{$step}}" name="course_content[]" class="form-control" rows="7"
                          placeholder="Content for title {{$step}}" required></textarea>
            </div>
        </div>

    @endforeach

    @foreach($q_steps as $s)
        <div class="col-md-4">
            <div>
                <span class="fa fa-times-circle text-red float-right" wire:click="removeQuestion({{$loop->index}})"/>
            </div>
            <div class="form-group">
                <label for="questionName{{$s}}">Question {{$s}}</label>
                <input type="text" id="questionName{{$s}}" name="question[]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="questionDescription{{$s}}">Answer {{$s}}</label>
                <input id="questionDescription{{$s}}" type="text" name="answer[]" class="form-control"
                       placeholder="answer {{$s}}" required>
            </div>
        </div>
    @endforeach

    @foreach($pq_steps as $ps)
        <div class="col-md-4">
            <div>
                <span class="fa fa-times-circle text-red float-right" wire:click="removePQuestion({{$loop->index}})"/>
            </div>
            <div class="form-group">
                <label for="questionP{{$ps}}">Question {{$ps}}</label>
                <input type="text" id="questionP{{$ps}}" name="p_question[]" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="questionP{{$ps}}">Answer {{$ps}}</label>
                <input id="questionP{{$ps}}" type="text" name="answer_p[]" class="form-control"
                       placeholder="answer {{$ps}}" required>
            </div>
        </div>
    @endforeach

</div>
