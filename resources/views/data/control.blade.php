@push('css')
    <link rel="stylesheet" href="{{ asset('template/assets/css/button.css') }}">
@endpush
@extends('layouts.app')
@section('title', 'Control')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
    @parent
@endsection
@section('content')
    <div class="col-lg-12">


        <h5><i class="fas fa-bullhorn"></i></h5>
        <strong></strong><strong></strong>
        </br>
    </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-12">



        </div>
    </div>
    <div class="row">



        <div class="alert-body">

            <span>

                </br>
                </a>
            </span>
        </div>
    </div>
    </div>


    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <input type="checkbox" data-id data-toggle="toggle" data-on="On" data-off="Off"
                            data-onstyle="success" class="toggle-class" data-offstyle="danger" </div>
                        <div class="col-lg-6">
                            <i data-feather='volume-2' class="text-info"
                                style="width: 120px; height: 120px; line-height: 120px;"></i>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">

                        <input type="checkbox" data-id data-toggle="toggle" data-on="On" data-off="Off"
                            data-onstyle="success" class="toggle-class" data-offstyle="danger" </div>
                        <div class="col-lg-6">
                            <i data-feather='volume-2' class="text-info"
                                style="width: 120px; height: 120px; line-height: 120px;"></i>

                            <div class="modal fade" id="modal-create" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="">Nama Controller</label>
                                                <input type="text" class="form-control" id="nama_device">
                                                <div class="alert alert-danger mt-2 d-none" role="alert"
                                                    id="alert-nama_device-edit"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="">PIN MODULE</label>
                                                <input type="text" class="form-control" id="gpio">
                                                <div class="alert alert-danger mt-2 d-none" role="alert"
                                                    id="alert-gpio-edit"></div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">TUTUP</button>
                                            <button type="button" class="btn btn-success" id="store">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endsection
                        @push('script_vendor')
                            <script src="{{ asset('template/assets/js/asset-button.js') }}"></script>
                            <script>
                                $(function() {
                                    $('.toggle-class').change(function() {
                                        var state = $(this).prop('checked') == true ? 1 : 0;
                                        var id = $(this).data('id');
                                        $.ajax({
                                            type: "GET",
                                            url: '/changeState',
                                            data: {
                                                'state': state,
                                                'id': id
                                            },

                                        });
                                        console.log(status);
                                        // console.log(id,status);
                                        // if (id == '1') {
                                        //     $('.icon-lampu').addClass('text-success').removeClass('text-danger');
                                        // } else {
                                        //     $('.icon-lampu').addClass('text-danger').removeClass('text-success');
                                        // }
                                    })
                                })
                            </script>
                        @endpush
                        @push('script')
                            <script>
                                $('body').on('click', '#btn-create-control', function() {
                                    $('#modal-create').modal('show');
                                });
                                $('#store').click(function(e) {
                                    e.preventDefault();

                                    let nama_device = $('#nama_device').val();
                                    let gpio = $('#gpio').val();
                                    let token = $("meta[name='csrf-token']").attr("content");

                                    $.ajax({
                                        url: `/control`,
                                        type: "POST",
                                        cache: false,
                                        data: {
                                            "nama_device": nama_device,
                                            "gpio": gpio,
                                            "_token": token
                                        },
                                        success: function(response) {
                                            Swal.fire({
                                                type: 'success',
                                                icon: 'success',
                                                title: `$response.message}`,
                                                showConfirmButton: false,
                                                timer: 3000
                                            });
                                            $('#nama_device').val('');
                                            $('#gpio').val('');
                                            location.reload();
                                            $('#modal-create').modal('hide');
                                        }
                                    });
                                });
                            </script>
