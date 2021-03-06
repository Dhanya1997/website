<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>TRAVEL TO LISBON</h1>
        <p>Lisbon is probably best known for its colonialist history, ornate architecture and tradition of Fado music</p> 
      </div>
    <br>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="history.php">History</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="culture.php">Culture</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="pic.php">Images</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="book.php">Book-a-ticket</a>
                </li>
              </ul>
            </nav>
            

<div class="container">
  <img src="images\f1.jfif" alt="flight" width="1000" height="400" >
  <div class="content">
    <table class="table table-borderless">

        <tr>
            <td>FROM</td>
            <td><input type="text" class="form-control" placeholder="select_a_location"></td>
            <td>TO</td>
            <td><input type="text" class="form-control" placeholder="select_a_location"></td>
        </tr>
        <tr>
            <td>DEPARTURE DATE</td>
            <td><input type="text" class="form-control" placeholder="select_date"></td>
            <td>RETURN DATE</td>
            <td><input type="text" class="form-control" placeholder="select_date"></td>
        </tr>
        <tr>
            <td><input type="radio" name="r"> ROUND</td>
            <td><input type="radio" name="o">ONEWAY</td>
            <td></td>
            <td><button class="btn btn-primary">Order Ticket Now</button></td>
        </tr>
    </table>
  </div>
</div>

</body>
</html>