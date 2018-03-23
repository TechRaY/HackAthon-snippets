<!--  https://www.eventbrite.com/myaccount/apps/   -->


<html>
<head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>
    $(document).ready(function() {
        
       // var token = 'FKHUUNL37TLGUELSFIYV';        //personal aoth token
       // var $events = $("#events");
        //$.get('https://www.eventbriteapi.com/v3/events/search/?q=health&location.address=MUMBAI&location.within=100km&location.latitude=19.0463017&location.longitude=72.8928885&token=VBA5V2AD6TYRSUKRI3YW');
		
		
        $.get('https://www.eventbriteapi.com/v3/events/search/?q=health&location.address=MUMBAI&location.within=100km&location.latitude=19.0463017&location.longitude=72.8928885&token=VBA5V2AD6TYRSUKRI3YW', function(res) {
            if(res.events.length) {
                var s = "<ul class='eventList'>";
                for(var i=0;i<res.events.length;i++) {
                    var event = res.events[i];
                    console.dir(event);
                    s += "<li><a href='" + event.url + "'>" + event.name.text + "</a> - " + event.description.text + "</li>";
                }
                s += "</ul>";
                $events.html(s);
            } else {
                $events.html("<p>Sorry, there are no upcoming events.</p>");
            }
        });
        
       
    });
    </script>
</head>
<body>
    
<h2>Upcoming Events!</h2>
<div id="events"></div>
</body>
</html>
