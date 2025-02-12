@extends('layouts.ad-template')

@section('content')

<!-- Main Content -->
    <div class="main-content">
      <section class="section">
        <div class="section-header">
          <h1>Dashboard</h1>
        </div>

        <div class="section-body">
          <h2 class="section-title">Dashboard Admin</h2>
          <!----------------------------SECTION----------------------------------->
            <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total User</h4>
                </div>
                <div class="card-body">
                  10
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total Artikel</h4>
                </div>
                <div class="card-body">
                  42
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
              </div>
              <div class="card-wrap">
                <div class="card-header">
                  <h4>Total transaksi</h4>
                </div>
                <div class="card-body">
                  1,201
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    </div>

@endsection
