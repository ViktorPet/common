
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

          <a  href="{{ route('postcreate')}}"class="btn btn-primary  float-right">Add Post</a>
          <br>
          <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Category</th>
                    <th scope="col">Featured</th>
                    <th scope="col">Created At</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $posts as $post)
                      <tr>
                        <th scope="row">{{$post->id}}</th>
                        <th scope="row">{{$post->title}}</th>
                        <td>{!! substr($post->body,0,100) !!}</td>
                        <td>{{$post->category->name}}</td>
                        <td>{{($post->features == 0)? 'No': 'Yes'}}</td>
                        <td>{{$post->created_at}}</td>
                        <td><a href="{{ route('postshow',$post->id )}}" class="btn btn-primary">View</a></td>
                         <td><a href="{{ route('postedit',$post->id )}}" class="btn btn-success">Edit</a></td>

                        <td>
                           <form  action="{{ route('deletepost',$post->id )}}" >

                                <input type="submit" name=""  class="btn btn-danger" value="Delete">
                           </form>

                             <!-- <a href="{{ route('deletepost',$post->id )}}" class="btn btn-success">Delete</a> -->
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
        </main>
      </div>
    </div>

    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
    @endsection

    <script
     src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
     integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
      crossorigin="anonymous">
    </script>
