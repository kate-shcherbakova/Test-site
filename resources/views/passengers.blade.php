@extends('layouts.base')
@section('title')
    Passengers
@endsection

@section('table')
    <div class="div_table">
        <table>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Surname</th>
                <th>Passport data</th>
            </tr>

            <?php $counter = 1 ?>
            @foreach($passengers_data as $el)
                <tr>
                    <td>{{ $counter }}</td>
                    <td>{{ $el->name }}</td>
                    <td>{{ $el->surname }}</td>
                    <td>{{ $el->passport_data }}</td>
                </tr>
                <?php $counter++ ?>
            @endforeach

        </table>
    </div>
@endsection
