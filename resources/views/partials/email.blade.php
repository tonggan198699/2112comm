
<div class="container">
  <div class="row">

      <div class="col-md-6">
        <form class="emailForm" role="form" method="post" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" required="required" placeholder="Enter your name">
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" required="required" placeholder="Enter your email address">
          </div>

          <div class="form-group">
            <input type="url" class="form-control" id="website" name="website" required="required" placeholder="Enter your website url">
          </div>

          <div class="form-group">
            <textarea class="form-control" id="comment" required="required" rows="3"></textarea>
          </div>

          <button type="submit" class="btn btn-secondary btn-lg" value="submit">Submit</button>
        </form>
      </div>

      <div class="col-md-6" id="info">
          <img class="john_pic" src="http://nicolas-logeais.fr/Site_John_R_Doe/img/photo_contact.png"/>
            <p>
              John Doe / Designer & Developer
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Sed at ligula diam. Donec a nibh sit amet justo posuere convallis.
               Curabitur suscipit consectetur nisl,
              vel mattis sem tempor quis. Aenean enim lectus, aliquet sed dignissim vel,
              laoreet et justo. Nulla turpis nulla, dapibus in porttitor sit amet, luctus ac erat.
            </p>
          <br><br>

          <p>Contact me: 123.456.789</p>
          <p> Email me:<a href="#"> johndoe@gmail.com</a>
          <p>Follow me:
            <span>
              <a href="#">Twitter</a> / <a href="#">Facebook</a> / <a href="#">Dribbble</a> / <a href="#">Flickr</a>
            </span>
          </p>
      </div>

  </div>
</div>

<hr>
