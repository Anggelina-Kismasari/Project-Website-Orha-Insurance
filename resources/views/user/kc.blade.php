<div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Kantor Cabang Umum BPJS Kota Surabaya</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($kc as $kcs)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img height="300px" src="kcimage/{{$kcs->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$kcs->name}}</p>
              <span class="text-sm text-grey">{{$kcs->address}}</span>
            </div>
          </div>
        </div>

        @endforeach
      
      </div>
    </div>
  </div>