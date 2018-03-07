<script>
   $("#searchterm").keyup(function(e){
     var q = $("#searchterm").val();
    $.getJSON("localhost/Hospital%20Website/index.php?callback=?",
     {
      srsearch: q,
        action: "query",
        list: "search",
       format: "json"
        },
       function(data) {
        $("#results").empty();
       $("#results").append("<p>You Are Searching <b>" + q + "</b> </p>");+ q +
       $.each(data.query.search, function(i,item){
       $("#results").append("<div><a href='http://en.wikipedia.org/wiki/" + encodeURIComponent(item.title) + "'></a><br>" + item.snippet + "<br><br></div>");
        });
      });
      });
    </script>