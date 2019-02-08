<div class="row">
    <div class="col m12 s12 card" id="QR-Code">
              <div class="panel panel-info">
                  <div class="panel-heading">
                      <div class="navbar-form navbar-right">
                          <select class="form-control" id="camera-select">
                          </select>
                          <br>
                          <div class="form-group">
                            <center>
                              <i title="Decode Image" id="decode-img" type="button" data-toggle="tooltip"></i>
                              <button title="Play" class="btn" id="play" type="button" data-toggle="tooltip">Start Camera</button>
                        
                            </center>
                           </div>
                      </div>
                  </div>
                  <div class="panel-body text-center">
                    <center>
                      <div>
                          <div class="well" style="position: relative;display: inline-block;">
                              <canvas width="200" height="200" id="webcodecam-canvas"></canvas>
                              <div class="scanner-laser laser-rightBottom" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-rightTop" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-leftBottom" style="opacity: 0.5;"></div>
                              <div class="scanner-laser laser-leftTop" style="opacity: 0.5;"></div>
                          </div>
                        </center>
                      </div>
                      <div class="col-md-6">
                          <div class="thumbnail" id="result">
                              <div class="well" style="overflow: hidden;">
                                  <i id="scanned-img" src=""></i>
                              </div>
                              <div class="caption">

                                  <h3 id="scanned-QR"></h3>

                              </div>
                          </div>
                      </div>
                  </div>
          </div>
          <form id="smtForm" action="test.php" method="post">
            <input type="hidden"  name="qrResult" id="scanned-IP" value="">
            <button type="submit" name="stmScan" class="btn btn-dark btn-block"><i class="fa fa-file-alt"></i> View Details</button>
          </form>

          <script type="text/javascript" src="assets/js/filereader.js"></script>
          <script type="text/javascript" src="assets/js/qrcodelib.js"></script>
          <script type="text/javascript" src="assets/js/webcodecamjs.js"></script>
          <script type="text/javascript" src="assets/js/main.js"></script>
    </div>
</div>