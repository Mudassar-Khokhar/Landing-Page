<!-- Sign In Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" style="max-width: 80%; height: 80vh; margin-top: 10vh;">
      <div class="modal-content">
    
        
        {{-- <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="myModalLabel">Welcome Back</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> --}}
    
        <!-- Modal Body -->
        <div class="modal-body" style="max-height: calc(80vh - 120px); overflow-y: auto;">
          <div class="row g-4">
    
            <!-- Left Side (col-md-6) -->
            <div class="col-md-6 d-flex flex-column justify-content-between">
              <div class="row mt-4">
                <!-- First Column -->
                <div class="col-md-4 d-flex flex-column justify-content-between align-items-center" style="height: auto;">
                  <div class="w-100 text-start">
                    <h4 class="fw-bold">Welcome</h4>
                  </div>
                  <div class="d-flex justify-content-center align-items-center flex-grow-1 w-100">
                    <img src="{{ asset('images/2.png') }}" alt="Welcome Image" class="img-fluid" style="max-height: 150px;">
                  </div>
                </div>
    
                <!-- Second Column -->
                <div class="col-md-4">
                  <div class="row mb-3">
                    <div class="col-12 text-center">
                      <img src="{{ asset('images/10.jpeg') }}" alt="Image 1" class="img-fluid" style="max-height: 200px;">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-12 text-center">
                      <h2 class="fw-bold">AJR</h2>
                      <p class="small">Collection</p>
                      <button class="btn btn-primary">Shop Now</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 text-center">
                      <img src="{{ asset('images/11.jpeg') }}" alt="Image 2" class="img-fluid" style="max-height: 200px;">
                    </div>
                  </div>
                </div>
    
                <!-- Third Column -->
                <div class="col-md-4 d-flex flex-column justify-content-between align-items-center" style="height: auto;">
                  <div class="d-flex justify-content-center align-items-center flex-grow-1 w-100">
                    <img src="{{ asset('images/6.png') }}" alt="Welcome Image" class="img-fluid" style="max-height: 150px;">
                  </div>
                </div>
              </div>
              <div class="mt-4">
                <small>Don't have an account? <a href="#">Sign up</a></small>
              </div>
            </div>
    
            <!-- Right Side (col-md-6) -->
            <div class="col-md-6 border-start ps-4 d-flex flex-column justify-content-between">
                <form>
                  <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                  </div>
    
                  <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                  </div>
    
                  <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                  </div>
    
                  <button type="submit" class="btn btn-primary w-100">Log In</button>
    
                  <div class="text-center mt-3">
                    <small><a href="#">Forget Password?</a></small>
                  </div>
                </form>
    
                <!-- Social Login -->
                <div class="text-center mt-4">
                  <p class="mb-2 fw-bold">Or sign in with</p>
                  <div class="d-flex justify-content-center gap-3">
                    <!-- Facebook -->
                    <button class="btn btn-light rounded-circle border shadow" style="width: 45px; height: 45px;" title="Facebook">
                      <i class="fab fa-facebook-f text-primary"></i>
                    </button>
                    <!-- Google -->
                    <button class="btn btn-light rounded-circle border shadow" style="width: 45px; height: 45px;" title="Google">
                      <i class="fab fa-google text-danger"></i>
                    </button>
                    <!-- Twitter -->
                    <button class="btn btn-light rounded-circle border shadow" style="width: 45px; height: 45px;" title="Twitter">
                      <i class="fab fa-twitter text-info"></i>
                    </button>
                  </div>
                </div>
              </div>
    
            </div>
          </div>
    
              
    
        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    
      </div>
    </div>
  </div>
  