<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Track</title>
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
  </head>

  <body>

    <!-- Header -->

    <header class="primary-header container group">

      <h1 class="logo">
        <a href="index.html"> <br> </a>
      </h1>

      <h3 class="tagline"></h3>

      <nav class="nav primary-nav">
      </nav>

    </header>

    <!-- Lead -->

    <section class="row-alt">
      <div class="lead container">

        <h1>Track Users</h1>

        <p></p>

      </div>
    </section>

    <!-- Main content -->

    <section class="row">
      <div class="container">
      <table class="styled-table">
      <thead>
        <tr>
            <th>USER</th>
						<th>DEVICE</th>
						<th>IP</th>
            <th>COUNTRY</th>
            <th>CITY</th>
        </tr>
      </thead>
      <tbody>
					@if(isset($items))
					@foreach($items as $i)
					<tr>
					  <td>{{$i['user_id']}}</td>
						<td>{{$i['device']}}</td>
						<td>{{$i['ip']}}</td>
            <td>{{$i['country']}}</td>
						<td>{{$i['city']}}</td>
					</tr>
					@endforeach
					@endif
				</tbody>
    </table>

      </div>
    </section>



    <!-- Footer -->

    <footer class="primary-footer container group">

      <small>&copy;SWT</small>


    </footer>

  </body>
</html>