$.ajax( "/api/xt" )
    .done(function(data, textStatus, jqXHR) {
        if(data.shutdown==true){
            $("#xt-streaming").html("Offline");
            $("#xt-listeners").html("-");
            $("#xt-listener-peak").html("-");
            $("#xt-start-streaming").html("-");
        }
        else{
            $("#xt-streaming").html("Online");
            $("#xt-listeners").html(data.listeners);
            $("#xt-listener-peak").html(data.listener_peak);
            $("#xt-start-streaming").html(data.stream_start);

            $(".icon-bg").removeClass('bg-danger');
            $(".icon-bg").addClass('bg-success');

            if(data.listeners > 0){
                $(".icon-bg-listeners").removeClass('bg-danger');
                $(".icon-bg-listeners").addClass('bg-success');
            }

            if(data.listener_peak > 0){
                $(".icon-bg-listener-peak").removeClass('bg-danger');
                $(".icon-bg-listener-peak").addClass('bg-success');
            }
        }
    })
    .fail(function(jqXHR, textStatus, errorThrown) {
        console.log(jqXHR);
    });