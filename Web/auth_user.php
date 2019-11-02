<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="styling.css">
        <script src="https://www.gstatic.com/firebasejs/3.3.0/firebase.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type='text/javascript'>
            msg = " Smart Parking Ntap - ";
            msg = " IoT A UKDW" + msg;pos = 0;
            function scrollMSG() {
            document.title = msg.substring(pos, msg.length) + msg.substring(0, pos); pos++;
            if (pos > msg.length) pos = 0
            window.setTimeout("scrollMSG()",40);
            }
            scrollMSG();
        </script>
        <link rel="icon" type="image/ico" href="assets/smart_parking.png" />
        <script src="data.js" charset="utf-8"></script>
    </head>
    <body>
        <div class="alert alert-light" role="alert">
            <img src="assets/smart_parking.png" alt="Avatar">
            Smart Parking Ntap
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                      <div class="card-header">
                        Booking Code
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <div id="sliderDouble" class="slider slider-primary"></div>
                            <input id="BookingCode" type="password" class="form-control" id="exampleInputPassword1" placeholder="Input Your Booking Code">
                          </div>
                        <button id="confirm" type="button" class="btn btn-primary btn-lg btn-block shadow" data-toggle="modal" data-target="#myModal"><strong>Confirm</strong></button>
                        <button onclick="window.location.href='index.php'" id="notbook" type="button" class="btn btn-warning btn-lg btn-block shadow" data-target="#notbook"><strong>Did't Have Booking Code?</strong></button>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Success-->
        <div class="container">
          <!-- The Modal -->
          <div class="modal fade" id="myModalSuccess">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Booking Code</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <img id="successimage" src="assets/success.png" alt="">
                    <p class="text-success"><strong>Success</strong></p>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--End-->

        <!--Invalid-->
        <div class="container">
          <!-- The Modal -->
          <div class="modal fade" id="myModalInvalid">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">Booking Code</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <img id="invalidimage" src="assets/invalid.png" alt="">
                    <p class="text-danger"><strong>Invalid</strong></p>
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
        <!--End-->
    </div>
  </div>
</body>
</html>
