@extends('layout/website/masterWeb')

@section('css')
@endsection

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-12  col-lg-4 offset-lg-4">

                <div class="text-center mb-13 mt-13">
                    <h1 class="mb-3">MASUK</h1>
                    <div class="text-muted fw-bold fs-5">Klik tautan disini jika belum punya
                        <a href="#" class="link-primary fw-bolder" data-bs-toggle="modal"
                            data-bs-target="#modal_register">Daftar Akun</a>
                    </div>
                </div>

                {{-- <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">atau</span>
                </div> --}}
                <form id="formlogin" method="post" class="mb-20">
                    @csrf
                    <div class="mb-5 fv-row fv-plugins-icon-container">
                        <input class="form-control form-control-solid mb-1" id="username" name="username"
                            placeholder="username">
                        <small id="usernameError" class="text-danger"></small>
                    </div>
                    <div class="mb-5 fv-row fv-plugins-icon-container">
                        <input type="password" class="form-control form-control-solid mb-1" id="password" name="password"
                            placeholder="password">
                        <small id="passwordError" class="text-danger"></small>
                    </div>

                    {{-- <a href="#" class="link-primary fs-6 fw-bold mb-8 float-end" data-bs-toggle="modal" data-bs-target="#modal_lupapassword">Lupa Password ?</a> --}}
                    <button class="btn btn-md btn-bg-success w-100 fw-bold text-white">MASUK</button>
                </form>

            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_register" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog mw-650px">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0">
                    <div class="text-center mb-13">
                        <h1 class="mb-3">DAFTAR</h1>
                        {{-- <div class="text-muted fw-bold fs-5">
                            Anda sudah punya akun ?
                            <a href="#" class="link-primary fw-bolder" data-bs-toggle="modal"
                                data-bs-target="#modal_login">Masuk</a>
                            <div class="">
                                .
                            </div>
                        </div> --}}
                        {{-- <div class="separator d-flex flex-center mb-8">
                            <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">atau</span>
                        </div> --}}
                        <form id="formregister" method="post">
                            @csrf
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid mb-1" id="name"
                                    name="name" placeholder="Nama">
                                <small id="nameError" class="text-danger float-start mb-3"></small>
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="email" class="form-control form-control-solid mb-1" id="email"
                                    name="email" placeholder="Email">
                                <small id="emaillError" class="text-danger float-start mb-3"></small>
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid mb-1" id="usernameDaftar"
                                    name="username" placeholder="username">
                                <small id="usernamelError" class="text-danger float-start mb-3"></small>
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="password" class="form-control form-control-solid mb-1" id="passwordDaftar"
                                    name="password" placeholder="Password">
                                <small id="passworddError" class="text-danger float-start mb-3"></small>
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="password" class="form-control form-control-solid mb-1" id="passwordConfirDaftar"
                                    name="password_confirmation" placeholder="Ulangi Password">
                                {{-- <small id="passwordError" class="text-danger float-start mb-3"></small> --}}
                            </div>
                            <div class="mb-5 fv-row fv-plugins-icon-container">
                                <input type="text" class="form-control form-control-solid mb-1" id="phone"
                                    name="phone" placeholder="WhatsApp Ex: 08123456789" maxlength="18">
                                <small id="phoneError" class="text-danger float-start mb-3"></small>
                            </div>
                            {{-- <div class="mb-5 fv-row fv-plugins-icon-container">
                                <select class="form-control form-control-solid mb-8" name="jk">
                                    <option>Pilih Jenis Kelamin</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div> --}}
                            <button type="submit" class="btn btn-md btn-bg-success w-100 fw-bold text-white">DAFTAR</button>
                        </form>
                        {{-- <button class="btn btn-md btn-bg-secondary w-100 fw-bold text-dark">Sign Up</button></button> --}}

                        {{-- <div class="d-flex flex-stack">
                        <div class="me-5 fw-bold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-bold text-muted">Allowed</span>
                        </label>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
        <script>
            $(document).ready(function() {

                $('#formlogin').submit(function(e) {
                    e.preventDefault();
                    let csrfToken = $('input[name="_token"]').val();
                    let file = new FormData($('#formlogin')[0]);
                    // let deskripsi = tinymce.get('deskripsi').getContent()
                    // file.append('deskripsi', deskripsi)

                    $.ajax({
                        type: 'POST',
                        url: `{{ url('/verifikasi-login') }}`,
                        data: file,

                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        headers: {
                            // 'X-HTTP-Method-Override': 'PATCH|DELETE', //only route patch and delete
                            'X-CSRF-TOKEN': csrfToken
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Mohon Tunggu!',
                                html: 'Sedang proses data ke server',
                                didOpen: () => {
                                    swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            swal.close();

                            if (data.status_code == 422) {
                                console.log(data);

                                let username = data.errors.username
                                let password = data.errors.password

                                username ? $('#usernameError').html('<b>' + username + '</b>') : $(
                                    '#usernameError').html('<b></b>')
                                password ? $('#passwordError').html('<b>' + password + '</b>') : $(
                                    '#passwordError').html('<b></b>')

                            } else if (data.status_code == 404) {
                                Swal.fire({
                                    text: data.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok",
                                    customClass: {
                                        confirmButton: "btn btn-success"
                                    }
                                });

                            } else if (data.status_code == 200) {
                                // Swal.fire({
                                //     text: data.message,
                                //     icon: "success",
                                //     buttonsStyling: false,
                                //     confirmButtonText: "Ok",
                                //     customClass: {
                                //         confirmButton: "btn btn-success"
                                //     }
                                // }).then((result) => {
                                //     // Jika tombol "OK" diklik, lakukan redirect
                                //     if (result.isConfirmed) {
                                //         window.location.href = `{{ url('panel') }}`;
                                //     }
                                // });
                                window.location.href = `{{ url('${data.url}') }}`
                            }
                        },
                        error: function(xhr, status, error) {
                            swal.close()
                            console.log(status)
                            console.log(error)

                            Swal.fire({
                                text: "ada yang salah",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        },
                    });

                });

                $('#formregister').submit(function(e) {
                    e.preventDefault();
                    let csrfToken = $('input[name="_token"]').val();
                    let file = new FormData($('#formregister')[0]);
                    // let deskripsi = tinymce.get('deskripsi').getContent()
                    // file.append('deskripsi', deskripsi)

                    $.ajax({
                        type: 'POST',
                        url: `{{ url('/verifikasi-pendaftaran') }}`,
                        data: file,

                        dataType: 'json',
                        contentType: false,
                        processData: false,
                        headers: {
                            // 'X-HTTP-Method-Override': 'PATCH|DELETE', //only route patch and delete
                            'X-CSRF-TOKEN': csrfToken
                        },
                        beforeSend: function() {
                            swal.fire({
                                title: 'Mohon Tunggu!',
                                html: 'Sedang proses data ke server',
                                didOpen: () => {
                                    swal.showLoading()
                                }
                            })
                        },
                        success: function(data) {
                            swal.close();

                            if (data.status_code == 422) {
                                console.log(data);

                                let name = data.errors.name
                                let email = data.errors.email
                                let password = data.errors.password
                                let phone = data.errors.phone
                                let institusi_asal = data.errors.institusi_asal
                                let jk = data.errors.jk

                                name ? $('#nameError').html('<b>' + name + '</b>') : $('#nameError')
                                    .html('<b></b>')
                                email ? $('#emaillError').html('<b>' + email + '</b>') : $(
                                    '#emaillError').html('<b></b>')
                                password ? $('#passworddError').html('<b>' + password + '</b>') : $(
                                    '#passworddError').html('<b></b>')
                                phone ? $('#phoneError').html('<b>' + phone + '</b>') : $(
                                    '#phoneError').html('<b></b>')
                                institusi_asal ? $('#institusiasalError').html('<b>' +
                                    institusi_asal + '</b>') : $('#institusiasalError').html(
                                    '<b></b>')
                                jk ? $('#jkError').html('<b>' + jk + '</b>') : $('#jkError').html(
                                    '<b></b>')

                            } else if (data.status_code == 404) {
                                Swal.fire({
                                    text: data.message,
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok",
                                    customClass: {
                                        confirmButton: "btn btn-success"
                                    }
                                });

                            } else if (data.status_code == 200) {
                                Swal.fire({
                                    text: data.message,
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok",
                                    customClass: {
                                        confirmButton: "btn btn-success"
                                    }
                                }).then((result) => {
                                    // Jika tombol "OK" diklik, lakukan redirect
                                    if (result.isConfirmed) {
                                        window.location.href = `{{ url('/') }}`;
                                    }
                                });
                                //window.location.href = `{{ url('set-keamanan') }}`
                            }
                        },
                        error: function(xhr, status, error) {
                            swal.close()
                            console.log(status)
                            console.log(error)

                            Swal.fire({
                                text: "ada yang salah, hubungi SIMRS",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        },
                    });

                });

            })
        </script>
    @endsection
