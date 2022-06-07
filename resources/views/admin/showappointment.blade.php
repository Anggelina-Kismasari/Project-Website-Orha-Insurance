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
            <div class="container align-text center" style="padding-top: 50px;">
                <table>
                    <tr style="background-color: indigo;">
                        <th style="padding: 10px;">Nama Pengguna</th>
                        <th style="padding: 10px;">Email</th>
                        <th style="padding: 10px;">No Telp</th>
                        <th style="padding: 10px;">Kantor Cabang</th>
                        <th style="padding: 10px;">Tanggal</th>
                        <th style="padding: 10px;">Pesan</th>
                        <th style="padding: 10px;">Status</th>
                        <th style="padding: 10px;">Terima Pesan</th>
                    </tr>

                    @foreach($data as $appoint)

                    <tr style="background-color: darkslateblue;">
                        <td style="padding: 10px;">{{$appoint->name}}</td>
                        <td style="padding: 10px;">{{$appoint->email}}</td>
                        <td style="padding: 10px;">{{$appoint->phone}}</td>
                        <td style="padding: 10px;">{{$appoint->kc}}</td>
                        <td style="padding: 10px;">{{$appoint->date}}</td>
                        <td style="padding: 10px;">{{$appoint->message}}</td>
                        <td style="padding: 10px;">{{$appoint->status}}</td>
                        <td ><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Terima</a></td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>