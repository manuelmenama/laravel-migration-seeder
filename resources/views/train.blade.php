@extends('layout.main')

@section('content')

<div class="container">
    <h1>Train</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Train Number</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Departure</th>
            <th scope="col">Arrival</th>
            <th scope="col">Company</th>
            <th scope="col">Total Couch</th>
            <th scope="col">Delay</th>
            <th scope="col">Deleted</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)

                <tr>
                    <td>{{ $train->train_number }}</td>
                    <td>{{ $train->from }}</td>
                    <td>{{ $train->to }}</td>
                    <td>{{ $train->departure }}</td>
                    <td>{{ $train->arrival }}</td>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->total_couch }}</td>
                    <td>{{ $train->is_on_time ? 'Yes' : 'No' }}</td>
                    <td>{{ (!$train->is_deleted) ? 'No' : 'Yes' }}</td>
                </tr>

            @endforeach

        </tbody>
      </table>
</div>

@endsection
