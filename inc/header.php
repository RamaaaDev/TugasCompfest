<!-- ================= navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs- 3 h-font" href="index.php"> <span class="logo">Cinemas </span><span class = "logos">Websites</span></a>
      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Toprated</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#cardMovie">Movie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">Contat us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
          </button>
          <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
            Register
          </button>
        </div>
      </div>
    </div>
  </nav>

<!-- ============== dialog login -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i> User Login
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" shadow-none>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" shadow-none>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript: void (0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- =============== register dialog -->
  <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form>
          <div class="modal-header">
            <h5 class="modal-title d-flex align-items-center">
            <i class="bi bi-person-fill-add fs-3 me-2"></i>
            User Registration
            </h5>
            <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" shadow-none>
          </div>
          <!-- <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" shadow-none>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
            <a href="javascript: void (0)" class="text-secondary text-decoration-none">Forgot Password?</a>
          </div> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

          </div>
        </form>
      </div>
    </div>
  </div>