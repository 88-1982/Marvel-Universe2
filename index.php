<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Marvel Comics API Search - Character</title>
  <link rel="stylesheet" href="style.css">
</head>
<body onload="character()">
  <div class="jumbotron">
    <div class="container">
      <h1 class="header-main-title">Marvel Comics Character Search</h1>
      <form id="connectionForm">
        <div class="form-group">
        <img src="https://wallpaperaccess.com/full/1869517.jpg" alt="marvel-heroes" class="center" width="1000">
          <input required type="text" name="name" id="name" class="form-control character-search-box"
            placeholder="(Enter Hero Here )">
        </div>
        <input type="submit" value="Search!" class="btn btn-danger mb-2 float-right search-character-button">
      </form>
    </div>
  </div>