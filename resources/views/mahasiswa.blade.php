@extends('template.main')

@section('content')

<main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Data Mahasiswa</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Mahasiswa</a></li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-4 shadow-lg border-0 animate__animated animate__fadeIn">
                  <div class="card-header bg-gradient-primary text-white d-flex justify-content-between align-items-center">
                    <div>
                      <i class="bi bi-people-fill me-2"></i>
                      <span class="fs-5 fw-bold">DATA MAHASISWA</span>
                    </div>
                    <div class="d-flex gap-2">
                      <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Cari Mahasiswa..." style="width:180px;">
                      <a href="tambahmahasiswa.php" class="btn btn-success btn-sm shadow-sm">
                        <i class="bi bi-plus-circle me-1"></i>Tambah
                      </a>
                    </div>
                  </div>
                  <div class="card-body bg-light rounded-bottom">
                    <div class="table-responsive">
                      <table id="mahasiswaTable" class="table table-hover align-middle table-bordered table-striped">
                        <thead class="table-primary">
                          <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Prodi</th>
                            <th>Telpon</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($mahasiswa as $m)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                              <span class="badge bg-info text-dark">{{ $m->NIM }}</span>
                            </td>
                            <td>
                              <div class="d-flex align-items-center gap-2">
                                <img src="assets/img/{{ $m->foto }}" class="rounded-circle shadow-sm avatar-mahasiswa" width="36" height="36" alt="avatar">
                                <span class="fw-semibold">{{ $m->Nama }}</span>
                              </div>
                            </td>
                            <td>{{ $m->TanggalLahir }}</td>
                            <td>
                              <span >{{ $m->Prodi->Nama }}</span>
                            </td>
                            <td>
                                <span class="badge bg-secondary">{{ $m->Telp }}</span>
                            </td>
                            <td>
                              <a class="btn btn-warning btn-sm" href="editmahasiswa.php?NIM={{ $m->NIM }}" data-bs-toggle="tooltip" title="Edit Data">
                                <i class="bi bi-pencil-square"></i>
                              </a>
                              <a class="btn btn-danger btn-sm" href="hapusmahasiswa.php?NIM={{ $m->NIM }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" data-bs-toggle="tooltip" title="Hapus Data">
                                <i class="bi bi-trash"></i>
                              </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.row (main row) -->
          </div>
          <!--end::Container--> 
        </div>
        <!--end::App Content-->
 </main>

@endsection