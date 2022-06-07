<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

      @include('admin.css')
      
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     
      @include('admin.sidebar')

      <!-- partial -->

      @include('admin.navbar')

        <!-- partial -->
       
        <div class="container-fluid page-body-wrapper">
            <div class="container align-text center" style="padding: 100px;">
                <table>
                    <tr style="background-color: crimson;">
                        <th style="padding: 10px;">Nama Kantor Cabang</th>
                        <th style="padding: 10px;">No Telp</th>
                        <th style="padding: 10px;">Daerah</th>
                        <th style="padding: 10px;">Alamat</th>
                        <th style="padding: 10px;">Gambar</th>
                        <th style="padding: 10px;">Delete</th>
                    </tr>

                    @foreach($data as $kc)

                    <tr style="background-color: salmon;">
                        <td style="padding: 10px;">{{$kc->name}}</td>
                        <td style="padding: 10px;">{{$kc->phone}}</td>
                        <td style="padding: 10px;">{{$kc->region}}</td>
                        <td style="padding: 10px;">{{$kc->address}}</td>
                        <td><img height="50" width="50" src="kcimage/{{$kc->image}}"></td>
                        <td ><a class="btn btn-danger" href="{{url('deletekc',$kc->id)}}">Hapus</a></td>
                    </tr>

                    @endforeach
                </table>
            </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>