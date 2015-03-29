<header class="navbar navbar-default navbar-fixed-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{ url() }}" class="navbar-brand">Frostfeed </a>
    </div>
    <nav class="collapse navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{ url() }}/post">Feed</a>
        </li>
      </ul>
      <ul class="nav navbar-right navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button>
              <input type="text" class="form-control pull-left" placeholder="Search">
              <br/>
              <ul class="search-suggestion" style="margin:5px;">
              <br/>
              <li><b>results</b></li>
              <li style="padding:10px 0px; border-bottom:1px solid #eee;">
                <img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:30px;height:30px; margin:0 5px;" class="img-rounded"></a>
                <a href="#"><b>Jo</b>hn Diggle</a>
              </li>
              <li style="padding:10px 0px;border-bottom:1px solid #eee;">
                <img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:30px;height:30px; margin:0 5px;" class="img-rounded"></a>
                <a href="#"><b>Jo</b>han Sebastian Bach</a>
              </li>
              <li style="padding:10px 0px;border-bottom:1px solid #eee;">
                <img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:30px;height:30px; margin:0 5px;" class="img-rounded"></a>
                <a href="#">Looking<b>jo</b>bs.com</a>
              </li>
              <li style="padding:10px 0px;border-bottom:1px solid #eee;">
                <img src="https://splashbase.s3.amazonaws.com/snapwiresnaps/regular/tumblr_nhggel1Hvs1teue7jo1_1280.jpg" style="width:30px;height:30px; margin:0 5px;" class="img-rounded"></a>
                <a href="#">John Diggle</a>
              </li>
          </ul>
            </form>
          </ul>

          
        </li>
        @if (Auth::check())
        <li class="dropdown">
          <a href="{{ url('dashboard') }}" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <span class="badge">42</span></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i></a>
          <ul class="dropdown-menu" style="padding:12px;">
            <form class="form-inline">
              <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
            </form>
          </ul>
        </li>
        <li>
          <a href="{{ url('auth/logout') }}" ><i class="glyphicon glyphicon-log-out"></i></a>
        </li>
        @else
        <li>
          <a href="{{ url('auth/login') }}" ><i class="glyphicon glyphicon-log-in"></i></a>
        </li>
        @endif
      </ul>
    </nav>
  </div>
</header>