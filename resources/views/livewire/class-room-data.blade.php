<div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Class Name</th>
            <th>Course Name</th>
            <th>Type</th>
            <th>Student(s)</th>
            <th>Teacher</th>
            <th>Start</th>
        </tr>
        </thead>
        <tbody>

        @foreach($classrooms as $cr)
            <tr>
                <td>{{ $cr['className'] }}</td>
                <td>{{ $cr['course_name'] }}</td>
                <td>{{ $cr['type'] }}</td>
                <td class="text-wrap">
                    @foreach(json_decode($cr['students']) as $stu)
                        {!! '<strong>'.$stu.'</strong>, ' !!}
                        @if($loop->index % 2)
                            {!! '<br>' !!}
                        @endif
                    @endforeach
                </td>
                <td>{{ $cr['teacher'] }}</td>
                @if($cr['start'])
                    <td class="text-center"><input type="checkbox" checked wire:click="updateStart(1,{{$cr['id']}})">
                    </td>
                @else
                    <td class="text-center"><input type="checkbox" wire:click="updateStart(0,{{$cr['id']}})"></td>
                @endif

            </tr>
        @endforeach

        <tfoot>
        <tr>
            <th>Class Name</th>
            <th>Course Name</th>
            <th>Type</th>
            <th>Student(s)</th>
            <th>Teacher</th>
            <th>Start</th>
        </tr>
        </tfoot>
    </table>
</div>
