<div class="table-responsive">
    <table class="table" id="bookings-table">
        <thead>
        <tr>
            <th>Bookingdate</th>
        <th>Starttime</th>
        <th>Endtime</th>
        <th>Memberid</th>
        <th>Courtid</th>
        <th>Fee</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bookings as $booking)
            <tr>
                <td>{{ $booking->bookingdate }}</td>
            <td>{{ $booking->starttime }}</td>
            <td>{{ $booking->endtime }}</td>
            <td>{{ $booking->memberid }}</td>
            <td>{{ $booking->courtid }}</td>
            <td>{{ $booking->fee }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$booking->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bookings.edit', [$booking->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
