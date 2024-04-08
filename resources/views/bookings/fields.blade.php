<!-- Bookingdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bookingdate', 'Bookingdate:') !!}
    {!! Form::text('bookingdate', null, ['class' => 'form-control','id'=>'bookingdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#bookingdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Starttime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('starttime', 'Starttime:') !!}
    {!! Form::number('memberid', null, ['class' => 'form-control']) !!}
</div>

<!-- Endtime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endtime', 'Endtime:') !!}
    {!! Form::text('endtime', null, ['class' => 'form-control']) !!}
</div>

<input type="hidden" name="memberid" value="{{Auth::user()->member->id}}">

<!-- Courtid Field -->
<div class="form-group col-sm-6">
{!! Form::label('Courtid', 'Courtid:') !!}

<select name="courtid" class="form-control">
        @foreach($courts as $courts)
            <option value="{{$courts->id}}">{{$courts}}</option>
        @endforeach

    </select>
</div>

<!-- Fee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fee', 'Fee:') !!}
    {!! Form::number('fee', null, ['class' => 'form-control']) !!}
</div>