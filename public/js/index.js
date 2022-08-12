$(document).ready(function () {
    $.ajax({
        url: "/ShippyPro/airports/getAllAirports",
        type: 'GET',
        success: function (response) {
            console.log(response)
            var departure = $("select#departure")
            var arrival = $("select#arrival")
            var i;

            for(i = 0; i < response.data.length; i++) {
                var airport = response.data[i]
                var opt =
                    '<option value="' + airport.name + '">' + airport.name +' </option>'

                departure.append(opt)
                arrival.append(opt)
            }
        },

        error: function (xhr, error) {
            console.log(xhr)
            console.log(error)
        },

        cache: true,
        processData: false
    });
});



