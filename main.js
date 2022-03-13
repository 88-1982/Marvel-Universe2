function character() {
  let urlQueryParameters = new URLSearchParams(window.location.search),
    queryParameterName = urlQueryParameters.get("name"),
    name = document.getElementById("name").value;
    if (queryParameterName !== null && queryParameterName !== "") {
      document.getElementById("name").value = queryParameterName;
      connection();
    
    
    } else if (name !== null && name !== "") {
      document
        .getElementById("connectionForm")
        .addEventListener("submit", connection);
    } else {
      document.getElementById("characterSection").innerHTML =
        '<h2 id="characterMainTitle">Enter search term above...</h2>';
    }
  }


  function connection() {
    document.getElementById("characterSpinnerSection").innerHTML = "";
    document.getElementById("comicsSpinnerSection").innerHTML = "";


  const xhr = new XMLHttpRequest();
  const name = document.getElementById("name").value;
  const params = "name" + name;
  const url = './conections/name-search.php?' + params


  
  xhr.open('GET','./connections/name-search.php' + params, true)
  
  xhr.onloadstart = function() {
    document.getElementById("characterSpinnerSection").innerHTML =
    '<strong id="spinnerText" class="text-primary">Loading...</strong>' +
    '<div class="text-primary spinner-border ml-auto" role="status" ' +
    'aria-hidden="true" id="spinner"></div>';

  }
    xhr.onerror = function() {
      document.getElementById('characterSection').innerHTML = '<h2 id="characterMainTitle">Error...</h2>'
    }
    xhr.onload = function() {
      if (this.status == 200){
        
        const result = JSON.parse(this.responseText);

        if (results["data"].count == 0) {
          
          
        } else if (results == undefined || results.lenght == 0 ){

        } else {
          const characterAttributes = results["data"].results[0].
          characterID = results["data"].results[0].id;
          let output = "";



        }
        

        

    } else{
      document.getElementById
      ("characterSection").innerHTML = '<h2 id="characterMainTitle"> Bad Request...</h2>';
    }
  }
    xhr.onloadend = function(){
      document.getElementById('characterSection').innerHTML = '<h2 id="characterMainTitle">Error...</h2>'

    }
    xhr.send();
  }

  
    

  
    



  
