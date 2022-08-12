function flight(pathname) {
    const myArray = pathname.split("/");
    $(document).ready(function () {
        $.ajax({
            url: "/ShippyPro/flights/getFlight/" + myArray[4] + "/" + myArray[5],
            type: 'GET',
            success: function (response) {
                var divFlight= $("div#flight")
                for(i = 0; i < response.data.posts.length - 1; i++) {
                    var departure = response.data.posts[i];
                    var arrival = response.data.posts[i+1];

                    var airportbox =
                        '<p class="lead nome">' + departure +  ' - ' + arrival +  ' </p><br>\n'
                    divFlight.append(airportbox);
                }
                //console.log(response);
            },

            error: function (xhr, error) {
                console.log(xhr)
                console.log(error)
            },

            cache: false,
            processData: false
        });
    });
}
