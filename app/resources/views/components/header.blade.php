<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/"><h2>DAIKING<em>.</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  @foreach($categories as $category)
                  <li><a class="dropdown-item" href="#">{{ $category->name }}</a></li>
                  @endforeach
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
