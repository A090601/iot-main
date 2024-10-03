@extends('layouts.app')
@section('title', 'Monitoring')
@section('breadcrumb')
    @parent
@endsection
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Monitoring Sensor</h5>
            <div>

            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Waktu</th>
                        <th>Tegangan</th>
                        <th>Ph</th>
                        <th>Temperature</th>
                    </tr>
                </thead>
                <tbody id="data_id">
                    @php
                        $no = 0;
                    @endphp

                    @php
                        $no++;
                    @endphp
                    <tr>
                        <td></td>
                        <td></td>
                        <td>

                            <span< /span>
                        </td>
                        <td>
                            <span class="badge badge-dark">

                        </td>
                        </span>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#devices').on('change', function(e) {
                var id = e.target.value;
                $.get('{{ url('id_devices') }}/' + id, function(data) {
                    console.log(id);
                    console.log(data);
                    $('#data_id').empty();
                    $.each(data, function(index, element) {
                        $('#data_id').append("<tr><td>" + element.waktu + "</td><td>" +
                            element.tegangan + "</td><td>" + element.ph + "</td><td>" +
                            element.temp + "</td></tr>")
                    });
                });
            });
        });
    </script>
@endpush
