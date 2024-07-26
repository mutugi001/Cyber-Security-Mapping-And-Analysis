
@extends('admin/layouts/app')

@section('content')
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> ADD EVENT</h4>

              <!-- Basic Layout -->
              <div class="row">
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"></h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">

                      <form action="{{ route('admin.events.store') }}" method='POST' url enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-fullname">Event Name</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"
                              ><i class="bx bx-user"></i
                            ></span>
                            <input
                              type="text"
                              class="form-control"
                              id="name"
                              name="name"
                              placeholder="John Doe"
                              aria-label="John Doe"
                              aria-describedby="basic-icon-default-fullname2" />
                          </div>
                          @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-company">Location</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"
                              ><i class="bx bx-buildings"></i
                            ></span>
                            <input
                              type="text"
                              id="location"
                              name="location"
                              class="form-control"
                              placeholder="ACME Inc."
                              aria-label="ACME Inc."
                              aria-describedby="basic-icon-default-company2" />
                          </div>
                          @error('location')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Date</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input
                              type="date"
                              id="date"
                              name="date"
                              class="form-control"
                              placeholder="2021-06-18"
                              aria-label=""
                              aria-describedby="basic-icon-default-time" />
                            <span id="basic-icon-default-email2" class="input-group-text">/span>
                              @error('date')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-email">Time</label>
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input
                              type="time"
                              id="time"
                              name="time"
                              class="form-control"
                              placeholder="12:30:00"
                              aria-label=""
                              aria-describedby="basic-icon-default-time" />
                            <span id="basic-icon-default-email2" class="input-group-text">/span>
                          </div>
                          @error('time')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                          <div class="form-text"></div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-phone">Guest Speaker</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-phone"></i
                            ></span>
                            <input
                              type="text"
                              id="speaker"
                              name="speaker"
                              class="form-control phone-mask"
                              placeholder=""
                              aria-label=""
                              aria-describedby="basic-icon-default-phone2" />
                          </div>
                          @error('speaker')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">Description</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-comment"></i
                            ></span>
                            <textarea
                              id="description"
                              name="description"
                              class="form-control"
                              placeholder="Hi, Do you have a moment to talk Joe?"
                              aria-label="Hi, Do you have a moment to talk Joe?"
                              aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                          @error('description')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="formFile">Image</label>
                          <input class="form-control" type="file" id="image" name="image">
                          </div>
                          @error('image')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">create</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->
@endsection
    