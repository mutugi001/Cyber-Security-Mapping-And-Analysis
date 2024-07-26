@extends('admin/layouts/app')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
              <div class="btn btn-primary">
                <a href="{{route('admin.news.get')}}" class="btn btn-primary">
                  <div data-i18n="Analytics">Add News</div>
                </a>
                </div>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>title</th>
                        <th>source</th>
                        <th>link</th>
                        <th>article</th>
                        {{-- <th>country</th> --}}
                        <th>Actions</th>
                      </tr>
                    </thead>
                    
                    <tbody class="table-border-bottom-0">
                      @foreach($articles as  $article)
                      <tr>
                        <td style="width: 50px;">{{ $article->title }}</td>
                        <td style="width: 150px;">{{ $article->source }}</td>
                        <td style="width: 150px;">{{ $article->link }}</td>
                        <td style="width: 150px;">{{ $article->article_id }}</td>
                        <td style="width: 150px;"><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('admin.news.show', $article->article_id)}}"
                                ><i class="bx bx-trash me-1"></i> show</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="{{route('admin.news.delete', $article->article_id)}}"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="btn btn-primary">
                <a href="{{route('admin.news.mail')}}" class="btn btn-primary">
                  <div data-i18n="Analytics">Send Mails</div>
                </a>
                </div>

              
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
              
              
@endsection
             