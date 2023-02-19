<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Savannah Informatics</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>




    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           <div class="container">

     
                <div class="row">
                                                    
                    <div class="col-lg-6 pt-5">

                        <div class="dt-responsive table-responsive">
                            <p>api/users</p>
                            
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Street</th>
                                    <th scope="col">Suite</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Zipcode</th>
                                    <th scope="col">Latitude</th>
                                    <th scope="col">Longitude</th>
                                      
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responses as $user)
                               
                                    
                               
                               
                              <tr>

                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->address->street }}</td>
                                <td>{{ $user->address->suite }}</td>
                                <td>{{ $user->address->city }}</td>
                                <td>{{ $user->address->zipcode }}</td>
                                <td>{{ $user->address->geo->lat }}</td>
                                <td>{{ $user->address->geo->lng }}</td>
                            </tr>
                            
                                  @endforeach
                                  
                            </tbody>

                        </table>
                              </div>
                  
                        </div>

                    </div>
                    <div class="col-lg-6 pt-5">

                        <div class="dt-responsive table-responsive">
                            <p>api/albums</p>
                            
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Album Id</th>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Album Title</th>
                                   
                                      
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($albums as $user)
                              <tr>

                                <th scope="row">{{ $user->userId }}</th>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->title }}</td>
                               
                            </tr>
                                  @endforeach
                                  
                            </tbody>

                        </table>
                              </div>
                  
                        </div>

                    </div>
                    <div class="col-lg-6 pt-5">

                        <div class="dt-responsive table-responsive">
                            <p>api/photos</p>
                            
                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Album id</th>
                                    <th scope="col">Photo title</th>
                                    <th scope="col">Image url</th>
                                   
                                      
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($photo_album as $photo)
                              <tr>

                                <th scope="row">{{ $photo->albumId }}</th>
                                <td>{{ $photo->title }}</td>
                                <td>{{ $photo->url }}</td>
                               
                            </tr>
                                  @endforeach
                                  
                            </tbody>

                        </table>
                              </div>
                  
                        </div>

                    </div>
            </div>
            
    </div>
           
            </div>
        </div>
    </body>
</html>
