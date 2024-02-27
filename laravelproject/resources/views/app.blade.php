<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @vite('resources/sass/app.scss', 'resources/js/app.js')
</head>

<body>
  <section class="intro">
    <div class="bg-image h-100" style="background-image: url(https://mdbootstrap.com/img/Photos/new-templates/glassmorphism-article/img7.jpg);">
      <div class="mask d-flex align-items-center h-100">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card mask-custom">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-borderless text-white mb-5">
                      <thead>
                        <tr>
                          <th scope="col">Nilai Partisipasi</th>
                          <th scope="col">Nilai Tugas</th>
                          <th scope="col">Nilai UTS</th>
                          <th scope="col">Nilai UAS</th>
                          <th scope="col">Nilai Akhir (NA)</th>
                          <th scope="col">Nilai Konversi Huruf (NH)</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <td>{{ $post->nilai_partisipasi }}</td>
                          <td>{{ $post->nilai_tugas }}</td>
                          <td>{{ $post->nilai_uts }}</td>
                          <td>{{ $post->nilai_uas }}</td>
                          <td>{{ $post->na }}</td>
                          <td>{{ $post->nh }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <h4>Tambahkan Nilai</h4>
                    <form action="{{ route('app.store') }}" method="post">
                      @csrf
                      <table class="table table table-borderless text-white mb-0">
                        <thead>
                          <tr>
                            <th scope="col">Nilai Partisipasi</th>
                            <th scope="col">Nilai Tugas</th>
                            <th scope="col">Nilai UTS</th>
                            <th scope="col">Nilai UAS</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><input type="text" name="nilai_partisipasi" class="form-control" placeholder="Nilai Partisipasi"></td>
                            <td><input type="text" name="nilai_tugas" class="form-control" placeholder="Nilai Tugas"></td>
                            <td><input type="text" name="nilai_uts" class="form-control" placeholder="Nilai UTS"></td>
                            <td><input type="text" name="nilai_uas" class="form-control" placeholder="Nilai UAS"></td>
                          </tr>
                        </tbody>
                      </table>
                      <button class="btn btn-primary" type="submit">Hitung</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>