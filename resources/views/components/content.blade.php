<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>APLIKASI PENILAIAN KARYAWAN</h1>
                </div>
                <div class="col-sm-6">
                    {{-- <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol> --}}
                </div>
            </div>
        </div>
    </section>

    <section class="content">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Selamat datang {{ auth()->user()->name }}</h3>
                {{-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div> --}}
            </div>
            <div class="card-body">
                <div class="col-lg-6">
                    <h3>Selamat Datang di Angel-Raqib.app</h3>
                    <p>Silahkan memberikan penilaian secara objektif dan bijaksana</p>
                    <a href="/penilaian/create" class="btn btn-primary">NILAI SEKARANG</a>
                </div>

                {{-- <div class="card-footer">
                    Footer
                </div> --}}

            </div>

    </section>

</div>
