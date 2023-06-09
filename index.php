<!DOCTYPE html>
<html>

<head>
  <title>Ajax PHP MySQL Live</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container mt-5" style="max-width: 555px">
    <div class="card-header alert alert-warning text-center mb-3">
      <h2>PHP MySQL Search</h2>
    </div>
    <input type="text" class="form-control" name="live_search" id="live_search" autocomplete="off" placeholder="Search ...">
    <div id="search_result"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/ajaxsearch/ajax.js"></script>

</body>

</html>