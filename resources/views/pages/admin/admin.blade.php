@extends('layouts.admin')
@section('title')
    Admin
@endsection
@section('content')
<section class="section">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Dashboard Admin</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-12">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-user"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Pengguna</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Terverifikasi</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Belum Terverifikasi</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Pemilik Shelter</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Pemilik Toko</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-radio-button"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Hasil Kuesioner</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            <span class="text-gray">Jumlah Kuesioner Yang Telah Diisi</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-checkmark-circle"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Email Berlangganan</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            <span class="text-gray">Jumlah Email Yang Didaftarkan Untuk Berlangganan</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-github"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Anjing</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Disetujui</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-warning"> Menunggu Peninjauan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Tidak Disetujui</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-home"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Shelter</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Disetujui</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-warning"> Menunggu Peninjauan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Tidak Disetujui</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-bubble"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Topik Diskusi</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Disetujui</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-warning"> Menunggu Peninjauan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Tidak Disetujui</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-pencil-alt"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Postingan</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Disetujui</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-warning"> Menunggu Peninjauan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Tidak Disetujui</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-cart-full"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Toko</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-success"> Disetujui</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-warning"> Menunggu Peninjauan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-danger"> Tidak Disetujui</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-tag"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Produk</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Nama Toko</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Nama Toko</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Nama Toko</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-bullhorn"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Pengumuman</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            <span class="text-gray">Jumlah Pengumuman Yang Telah Dibuat</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6">
                <div class="icon-card mb-30">
                    <div class="icon blue">
                        <i class="lni lni-archive"></i>
                    </div>
                    <div class="content">
                        <h6 class="mb-10">Arsip</h6>
                        <h3 class="text-bold mb-10">77</h3>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Shelter</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Anjing</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Postingan</span>
                        </p>
                        <p class="text-sm text-gray">
                            77
                            <span class="text-primary"> Topik</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="card-style calendar-card mb-30">
                    <div id="calendar-mini"></div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Notifikasi</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th style="display: none">
                                        <h6 class="text-sm text-medium text-center">
                                            ID
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Dari
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Isi Notifikasi
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Saya telah mengisi form pendaftaran anjing, agar anjing saya dapat diadopsi. Mohon segera ditinjau, terima kasih.</p>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                </tr>
                            </tbody>
                            {{-- <tbody></tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Anjing Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Anjing
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Kategori
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Pemilik
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anjing</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Bulldog</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="action status-btn warning-btn justify-content-center">Menunggu Peninjauan</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button class="edit">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="lni lni-cross-circle"></i>
                                            </button>
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction1"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction1"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Shelter Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Shelter
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Pemilik
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shelter</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="action status-btn success-btn justify-content-center">Disetujui</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction2"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction2"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Topik Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Topik
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Kategori
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Pembuat
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Topik</p>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Bulldog</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="action status-btn close-btn justify-content-center">Tidak Disetujui</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction3"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction3"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Postingan Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Postingan
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Kategori
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Pembuat
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Postingan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Sosial</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="action status-btn warning-btn justify-content-center">Menunggu Peninjauan</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button class="edit">
                                                <i class="lni lni-checkmark-circle"></i>
                                            </button>
                                            <button class="edit">
                                                <i class="lni lni-cross-circle"></i>
                                            </button>
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction4"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction4"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Toko Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Toko
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Pemilik
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toko</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="action status-btn success-btn justify-content-center">Disetujui</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction5"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction5"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Produk Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Produk
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Kategori
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Toko
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Dibuat
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produk</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Makanan Anjing</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Toko</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction6"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction6"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Edit</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div
                        class="
                            title
                            d-flex
                            flex-wrap
                            align-items-center
                            justify-content-between
                        "
                    >
                        <div class="left">
                            <h6 class="text-medium mb-30">Transaksi Pembelian Terbaru</h6>
                        </div>
                        <div class="right">
                            <div class="select-style-1">
                                <div class="select-position select-sm">
                                    <button
                                        id="#"
                                        class="main-btn primary-btn btn-hover btn-sm"
                                    >
                                        Lihat Semua
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table top-selling-table" id="notificationTable">
                            <thead>
                                <tr>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            No
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Calon Pembeli
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Total Harga
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Status
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Diterima
                                        </h6>
                                    </th>
                                    <th>
                                        <h6 class="text-sm text-medium text-center">
                                            Aksi
                                        </h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="text-sm text-center">1</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <div class="image">
                                                <img
                                                    src="/assets/dashboard/images/lead/lead-6.png"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="text-sm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pengguna</p>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">Rp25.000,00</p>
                                    </td>
                                    <td>
                                        <span class="action status-btn close-btn justify-content-center">Belum Dibayar</span>
                                    </td>
                                    <td>
                                        <p class="text-sm text-center">10 menit yang lalu</p>
                                    </td>
                                    <td>
                                        <div class="action justify-content-center">
                                            <button
                                                class="more-btn ml-10 dropdown-toggle"
                                                id="moreAction7"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="lni lni-more-alt"></i>
                                            </button>
                                            <ul
                                                class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="moreAction7"
                                            >
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Hapus</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="#0" class="text-gray">Detail</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('addon-script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var calendarMiniEl = document.getElementById("calendar-mini");
        var calendarMini = new FullCalendar.Calendar(calendarMiniEl, {
            initialView: "dayGridMonth",
            headerToolbar: {
                end: "today prev,next",
            },
        });
        calendarMini.render();
    });
    // var datatable = $('#notificationTable').DataTable({
    //     lengthMenu: [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
    //     processing: true,
    //     serverSide: true,
    //     ordering: true,
    //     ajax: {
    //         url: '{!! url()->current() !!}',
    //     },
    //     columns: [
    //         {
    //             data: 'id',
    //             name: 'id',
    //             visible: false,
    //             orderable: false,
    //             searchable: false,
    //             width: '5%',
    //             class: 'text-center',
    //         },
    //         {
    //             data: 'DT_RowIndex',
    //             name: 'DT_RowIndex',
    //             orderable: false,
    //             searchable: false,
    //             width: '5%',
    //             class: 'text-center',
    //         },
    //         { data: 'title', name: 'title' },
    //         {
    //             data: 'action',
    //             name: 'action',
    //             orderable: false,
    //             searchable: false,
    //             width: '10%',
    //             class: 'text-center',
    //         },
    //     ],
    //     dom: 'Bfrtip',
    //     buttons: [
    //         {
    //             extend: 'copy',
    //             exportOptions: {
    //                 columns: [1, 2]
    //             }
    //         },
    //         {
    //             extend: 'csv',
    //             exportOptions: {
    //                 columns: [1, 2]
    //             }
    //         },
    //         {
    //             extend: 'excel',
    //             exportOptions: {
    //                 columns: [1, 2]
    //             }
    //         },
    //         {
    //             extend: 'pdf',
    //             exportOptions: {
    //                 columns: [1, 2]
    //             }
    //         },
    //         {
    //             extend: 'print',
    //             exportOptions: {
    //                 columns: [1, 2]
    //             }
    //         },
    //     ],
    // })
</script>
@endpush