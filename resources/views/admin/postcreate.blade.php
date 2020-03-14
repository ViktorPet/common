
@extends('layoutsmain.admin')


@section('content')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <a  class="btn btn-primary  float-right">Add Post</a>
          <br>
          <div class="container">
               <div class="row justify-content-center">
                   <div class="col-md-8">
                       <div class="card">
                           <div class="card-header">Create Post</div>
                           <div class="card-body">
                               <form method="post" action="{{ route('poststore') }}">
                                   <div class="form-group">
                                       @csrf
                                       <label class="label">Post Title: </label>
                                       <input type="text" name="title" class="form-control" required/>
                                   </div>
                                    <div class="form-group">
                                       <select class="form-control" name="id" >
                                         @foreach($categories as $category)
                                          <option value="{{$category->id}}">{{$category->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>


                                     <div class="form-group">
                                       <label class="label">Post Body: </label>

                                       <div id="editor" style="width;250px; height:250px">

                                       </div>

                                       <textarea name="body" id="text-editor" rows="10" cols="30" class="form-control"  style="display:none"></textarea>
                                   </div>
                                   <div class="form-check">
                                   <input type="checkbox" name="features" class="form-check-input" id="exampleCheck1">
                                   <label class="form-check-label" for="exampleCheck1">Featured</label>
                                 </div>
                                                                   <div class="form-group">
                                       <input type="submit" class="btn btn-success" />
                                   </div>
                               </form>
                           </div>
                       </div>

                   </div>

               </div>
           </div>
        </main>
      </div>
    </div>
    @endsection

    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>




    <script
     src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
      crossorigin="anonymous">
    </script>
