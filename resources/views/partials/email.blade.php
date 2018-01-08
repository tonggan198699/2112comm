
<div class="container">
  <div class="row">

    @if(session('message'))
      <div class='alert alert-success'>
        {{ session('message') }}
      </div>
    @endif

      <div class="col-md-6">
        <form class="emailForm" method="POST" action="/contact">
          {!! csrf_field() !!}
          <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="website" name="website" placeholder="Enter your website url" required>
          </div>

          <div class="form-group">
            <textarea type="text" class="form-control" id="message" name="message" required="required" rows="3" required></textarea>
          </div>

          <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
        </form>

      </div>

      <div class="col-md-6" id="info">
          <img class="john_pic" src="http://nicolas-logeais.fr/Site_John_R_Doe/img/photo_contact.png"/>
            <p>
              Tong Gan / PHP Web Developer
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
          <p> Email me:<a href="#"> tonggan1986@gmail.com</a>
          <p>Follow me:
            <span>
              <a href="#">Twitter</a> / <a href="#">Facebook</a> / <a href="#">Dribbble</a> / <a href="#">Flickr</a>
            </span>
          </p>
      </div>

  </div>
</div>

<hr>
