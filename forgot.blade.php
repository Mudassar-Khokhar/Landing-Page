

<!-- Sign In Modal -->
<div class="modal fade" id="fgtModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
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
            
            <div class="col-md-6 border-start ps-4 d-flex flex-column justify-content-between">
                <form>
                    <div class="mb-3">
                      <label for="resetEmail" class="form-label">Enter your registered email</label>
                      <input type="email" class="form-control" id="resetEmail" placeholder="Email address">
                    </div>
                    <button type="submit" class="btn btn-warning w-100">Send Reset Link</button>
                  </form>
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
  