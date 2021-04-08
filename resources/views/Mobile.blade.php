@extends("theme")
@section("content")

      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img height="600" src="https://cdn.wallpapersafari.com/58/93/My7mug.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="https://www.windowscentral.com/sites/wpcentral.com/files/styles/large/public/field/image/2017/05/lumia_950.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img height="600" src="https://cdn.wccftech.com/wp-content/uploads/2017/10/Surface-Phone-7.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <br>
      <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-3 col-md-4 col-lg-6 col-xl-12 col-xxl-12">
                <table class="table">
                    <tr>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://images.firstpost.com/wp-content/uploads/2020/01/mi-mix-alppha-1024.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">SaSu Mi1</h5>
                              <p class="card-text">Price  $1700</p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div>
                          </td>
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://news.maxabout.com/wp-content/uploads/2019/11/New-Motorola-Razr-Official-4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">SaSu note 12</h5>
                              <p class="card-text">Price $999 </p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                       
                        <td><div class="card" style="width: 18rem;">
                            <img height="300" src="https://navbharattimes.indiatimes.com/photo/msid-78161060/pic.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">SaSu Ace6</h5>
                              <p class="card-text">Price $1800</p>
                              <a href="booking.php" class="btn btn-primary">Order Now</a>
                            </div>
                          </div></td>
                        </tr>
                        <tr>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="https://static.toiimg.com/photo/74580779.cms" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">SaSu M4</h5>
                                  <p class="card-text">Price $1300</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img height="300" src="https://cdn57.androidauthority.net/wp-content/uploads/2020/03/Realme-X50-Pro-5G-Display-flat-lay-at-angle-1200x675.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">SaSu Max Pro</h5>
                                  <p class="card-text">Price $1200</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                        <td>
                            <div class="card" style="width: 18rem;">
                                <img src="https://ae01.alicdn.com/kf/Hc2263072d3524bb2afefe35997d91782K.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">SaSu-M6</h5>
                                  <p class="card-text">Price $2000</p>
                                  <a href="booking.php" class="btn btn-primary">Order Now</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                </table>
                @endsection