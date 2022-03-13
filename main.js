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
  xhr.open('GET','./conections/name-search.php',true)
  
  xhr.onloadstart = () => {
    document.getElementById("characterSpinnerSection").innerHTML =
    '<strong id="spinnerText" class="text-primary">Loading...</strong>' +
    '<div class="text-primary spinner-border ml-auto" role="status" ' +
    'aria-hidden="true" id="spinner"></div>';

  }
    xhr.onerror = () => {
      document.getElementById('characterSpinnerSection').innerHTML = '<h2 id="characterMainTitle">Error...</h2>'
    }
    xhr.onload = () => {
      if (this.status == 200){
        

    }
    xhr.onloadend = () =>{
      document.getElementById('characterSpinnerSection').innerHTML = '<h2 id="characterMainTitle">Error...</h2>'

    } 
  
    

  
    }else{
      document.getElementById("characterSection").innerHTML = '<h2 id="characterMainTitle">No Request.</h2>';

  
    }

  }



  
