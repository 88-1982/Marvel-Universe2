<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Marvel Comics Search - Character</title>
  <link rel="stylesheet" href="style.css">
</head>
<body onload="character()">
  <div class="jumbotron">
  
    <div class="container">
      <h1 class="header-main-title">Marvel Comics Character Search</h1>
      <form id="connectionForm">
        <div class="form-group">
        <img src="https://wallpaperaccess.com/full/1869517.jpg" alt="marvel-heroes" class="center" width="1500">
          <input required type="text" name="name" id="name" class="form-control character-search-box"
            placeholder="(Enter Hero Here )">
        </div>
        <input type="submit" value="Search!" class="btn btn- mb-2 float-left search-character-button">
      </form>
    </div>
  </div>
  <div class="container" id="contentContainer">
    <div class="d-flex align-items-center" id="characterSpinnerSection"></div>
    <div class="d-flex align-items-center" id="comicsSpinnerSection"></div>
    <section id="characterSection"></section>
    <section id="comicSection"></section>
  </div>
  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"> 
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> 
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </script> 
</body>
</html>