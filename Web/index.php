<!doctype html>
<html lang="en">
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
  <div class="col-sm-12">
      <div class="card border-info mb-3" style="max-width: 74rem;">
          <div class="card-header">Sisa Slot Parkiran</div>
          <div class="card-body">
              <h5 class="card-title" id="sisa-parkir">3</h5>
          </div>
      </div>
  </div>
</div>
</div>
      <div class="container">
      <div class="row">
  <div class="col-sm-4">
      <div class="card border-info mb-3" style="max-width: 24rem;">
          <div class="card-header">Parkiran 1</div>
          <div class="card-body">
              <h5 class="card-title" id="parkiran1">Kosong</h5>
          </div>
          <div class="btn-group" role="group" aria-label="Generate-code">
          <script>
        jQuery(document).ready(function($){
             $("#random1").click(function(){
             var number = 1 + Math.floor(Math.random() * 9999);
                 $("#number1").text(number);
             });
            });
        </script>
        <!-- Button Trigger -->
        <button type="button" class="btn btn-info btn-m btn-block" data-toggle="modal" id="random1" data-target="#DataParkiran1"><strong>Get Booking Code</strong></button>
        <!-- Modal -->
        <div class="modal fade" id="DataParkiran1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Kode Booking Parkiran 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="number1">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success shadow" type="submit" id="simpan1">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  <div class="col-sm-4">
      <div class="card border-info mb-3" style="max-width: 24rem;">
          <div class="card-header">Parkiran 2</div>
          <div class="card-body">
              <h5 class="card-title" id="parkiran2">Kosong</h5>
          </div>
          <div class="btn-group" role="group" aria-label="Generate-code">
          <script>
              jQuery(document).ready(function($){
                   $("#random2").click(function(){
                   var number = 1 + Math.floor(Math.random() * 9999);
                        $("#number2").text(number);
                   });
                  });
        </script>
        <!-- Button Trigger -->
        <button type="button" class="btn btn-info btn-m btn-block" data-toggle="modal" id="random2" data-target="#DataParkiran2"><strong>Get Booking Code</strong></button>
        <!-- Modal -->
        <div class="modal fade" id="DataParkiran2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Kode Booking Parkiran 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="number2">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success shadow" type="submit" id="simpan2">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
  <div class="col-sm-4">
      <div class="card border-info mb-3" style="max-width: 24rem;">
          <div class="card-header">Parkiran 3</div>
          <div class="card-body">
              <h5 class="card-title" id="parkiran3">Kosong</h5>
          </div>
          <div class="btn-group" role="group" aria-label="Generate-code">
          <script>
              jQuery(document).ready(function($){
                   $("#random3").click(function(){
                   var number = 1000 + Math.floor(Math.random() * 9999);
                       $("#number3").text(number);
                   });
                  });
        </script>
        <!-- Button Trigger -->
        <button type="button" class="btn btn-info btn-m btn-block" data-toggle="modal" id="random3" data-target="#DataParkiran3"><strong>Get Booking Code</strong></button>
        <!-- Modal -->
        <div class="modal fade" id="DataParkiran3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Kode Booking Parkiran 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="number3">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success shadow" type="submit" id="simpan3">Simpan</button>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="container">
          <div class="row">
            <div class="col-sm">
              <button onclick="window.location.href='auth_user.php'" id="notbook" type="button" class="btn btn-warning btn-lg btn-block shadow" data-target="#notbook"><strong>Have Booking Code?</strong></button>
            </div>
          </div>
        </div>
    </body>
</html>
