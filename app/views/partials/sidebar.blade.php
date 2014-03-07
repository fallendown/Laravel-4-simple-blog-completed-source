        <div class="col-lg-4">
          <div class="well">
            <h4>Blog Search</h4>
            {{ Form::open(array('url' => 'search')) }}
            <div class="input-group">
              {{Form::text('search', '', array('class' => 'form-control'))}}
              <span class="input-group-btn">
              {{ Form::submit('Search', array('class' => 'btn btn-default'))}}
              </span>
            {{ Form::close()}}
            </div><!-- /input-group -->
          </div><!-- /well -->
          <div class="well">
            <h4>Widget Well. This could be anything.</h4>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#dinosaurs">Dinosaurs</a></li>
                    <li><a href="#spaceships">Spaceship</a>s</li>
                    <li><a href="#fried-foods">Fried Foods</a></li>
                    <li><a href="#wild-animals">Wild Animals</a></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled">
                    <li><a href="#alien-abductions">Alien Abductions</a></li>
                    <li><a href="#business-casual">Business Casual</a></li>
                    <li><a href="#robots">Robots</a></li>
                    <li><a href="#fireworks">Fireworks</a></li>
                  </ul>
                </div>
              </div>
          </div><!-- /well -->
          <div class="well">
            <h4>Another Side Widget Well</h4>
            <p>Bootstrap's default well's work great for side widgets! What is a widget anyways...?</p>
          </div><!-- /well -->
        </div>
      </div>