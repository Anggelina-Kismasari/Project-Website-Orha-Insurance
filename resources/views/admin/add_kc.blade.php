<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

      @include('admin.css')
      
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <style type="text/css">
          label
          {
              display: inline-block;
              width: 200px;
          }
      </style>
      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container text-center" style="padding-top: 100px;">

             @if(session()->has('message'))
             <div class="alert alert-success">
                <button type="button" class="close" data-bs-dismiss="alert">
                    x
                </button>
                {{session()->get('message')}}
             </div>
             @endif

                <form action="{{url('upload_kc')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label>Nama Kantor Cabang</label>
                        <input type="text" style="color:black" name="name" placeholder="Masukkan nama KC" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>No Telp</label>
                        <input type="number" style="color:black" name="number" placeholder="Masukkan no telp" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Daerah</label>
                        <select name="region" style="color:black" style="width: 200px;" required="">
                            <option>-Pilih Daerah Cabang-</option>
                            <option value="Surabaya Utara">Surabaya Utara</option>
                            <option value="Surabaya Selatan">Surabaya Selatan</option>
                            <option value="Surabaya Barat">Surabaya Barat</option>
                            <option value="Surabaya Timur">Surabaya Timur</option>
                            <option value="Surabaya Pusat">Surabaya Pusat</option>
                        </select>
                    </div>

                    <div style="padding: 15px;">
                        <label>Alamat</label>
                        <input type="text" style="color:black" name="address" placeholder="Masukkan alamat" required="">
                    </div>

                    <div style="padding: 15px;">
                        <label>Gambar Kantor</label>
                        <input type="file" name="file" required="">
                    </div>

                    <div style="padding: 15px;">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>