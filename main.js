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
  const url = './connections/name-search.php' + params

  }
