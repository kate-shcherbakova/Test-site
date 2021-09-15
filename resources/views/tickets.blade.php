@extends('layouts.base')
@section('title')
    Tickets
@endsection

@section('table')
    <div class="div_table">
        <table>
            <tr>
                <th></th>
                <th>From</th>
                <th>To</th>
                <th>Date</th>
                <th>Price</th>
            </tr>

            <?php $counter = 1 ?>
            @foreach($tickets_data as $el)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $el->from }}</td>
                    <td>{{ $el->to }}</td>
                    <td>{{ $el->date }}</td>
                    <td>{{ $el->price }}</td>
                </tr>
                <?php $counter++ ?>
            @endforeach

        </table>
    </div>
@endsection
