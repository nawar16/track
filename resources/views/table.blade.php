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

        <h1></h1>

        <p></p>

      </div>
    </section>

    <!-- Main content -->

    <section class="row">
      <div class="container">
      <table>
				<thead>
					<tr>
						<th style="text-align: center">USER</th>
						<th style="text-align: center">DEVICE</th>
						<th style="text-align: center">IP</th>
            <th style="text-align: center">COUNTRY</th>
            <th style="text-align: center">CITY</th>
					</tr>
				</thead>
				<tbody>
					@if(isset($items))
					@foreach($items as $i)
					<tr>
					    <th>{{$i['user_id']}}</th>
						<td>{{$i['device']}}</td>
						<td>{{$i['ip']}}</td>
            <td>{{$i['country']}}</td>
						<td>{{$i['city']}}</td>
					</tr>
					@endforeach
					@endif
				</tbody>
				<tfoot>
				</tfoot>
			</table>


      </div>
    </section>

    <!-- Footer -->

    <footer class="primary-footer container group">

      <small>&copy;SWT</small>


    </footer>

  </body>
</html>