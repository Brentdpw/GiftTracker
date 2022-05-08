$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        events: "fetch-event.php",
        displayEventTime: false,
        eventRender: function (event, element, view) {
            if (event.allDay === 'true') {
                event.allDay = true;
            } else {
                event.allDay = false;
            }
        },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
            // console.log(start);
            // console.log(end);

            openPopup();
            var elementButton = document.querySelector("#popup-button");
            var input = document.getElementById("titleAct");
            var count = 0;

            $("input#start_date").replaceWith("<input type=date id=start_date name=start_date value="+ start + " readonly>");
            $("input#end_date").replaceWith("<input type=date id=end_date name=end_date value="+ end + " readonly>");

            elementButton.addEventListener("click", function(){
                count +=1;
                var title = input.value;
                if (count < 2) {
                    // console.log(start);

                    $.ajax({
                        url: 'add-event.php',
                        data: 'title=' + title + '&start=' + start + '&end=' + end,
                        type: "POST",
                        success: function (data) {
                            displayMessage("Added Successfully");
                        }
                    });
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true
                            );
                }
                start = "";
                end = "";
                calendar.fullCalendar('unselect');
                closePopup();
                reloadPage()
            });
            document.getElementById("create-form").reset();

            
            
        },
        
        editable: true,
        eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: 'edit-event.php',
                        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                        type: "POST",
                        success: function (response) {
                            displayMessage("Updated Successfully");
                            reloadPage();
                        },
                    });
                },
        eventClick: function (event) {
            eventClickOpenPopup();
            var elementButtonSearch = document.querySelector("#search-Confirm");
            var elementButtonDelete = document.querySelector("#delete-activity");
            var searchInput = document.getElementById("search-input");
            var title = event.title;
            var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
            var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
            $("input#TitleAct").replaceWith("<input type=text id=TitleAct name=TitleAct value=" + title + " readonly>");
            $("input#start_date-search").replaceWith("<input type=date id=start_date-search name=start_date value="+ start + " readonly>");
            $("input#end_date-search").replaceWith("<input type=date id=end_date-search name=end_date value="+ end + " readonly>");
            
            // elementButtonSearch.addEventListener("click", function(){
                // reloadPage();
            // };
            
            elementButtonDelete.addEventListener("click", function(){
                $.ajax({
                    type: "POST",
                    url: "delete-event.php",
                    data: "&id=" + event.id,
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            displayMessage("Deleted Successfully");
                        }
                    }
                });
                eventClickClosePopup();
                reloadPage();
            });
            
        }

    });
});

function displayMessage(message) {
        $(".response").html("<div class='success'>"+message+"</div>");
    setInterval(function() { $(".success").fadeOut(); }, 1000);
}

/* create-popup */
function openPopup() {
    document.getElementById('create-pupup').style.display = 'block';
}

function closePopup() {
    document.getElementById('create-pupup').style.display = 'none';
}


// /* search-delete-popup */
function eventClickOpenPopup() {
    document.getElementById('edit-popup-open').style.display = 'block';
}

function eventClickClosePopup() {
    document.getElementById('edit-popup-open').style.display = 'none';
}

function reloadPage(){
    setTimeout(function(){ document.location.reload(true); }, 200);
}