<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Get Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
      <div class="d-flex justify-content-center align-items-center container my-5">
          <div class="card my-4">
            <div class="container">
                <form style="width:400px;">
        <fieldset disabled>
          <legend class="text-center mb-3">Data Book <br>{{$books ['name_book']}}</legend>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Book Code</label>
            <input type="number" id="disabledTextInput" class="form-control" placeholder="{{$books['book_code']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Name Book</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$books['name_book']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Penulis</label>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$books['penulis']}}">
          </div>
          <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Image</label>
            <input type="text" id="disabledTextInput" class="form-control">
          </div>
        </fieldset>
          <a href="/book" class="btn btn-primary mb-3">Back</a>
      </form>
           </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>