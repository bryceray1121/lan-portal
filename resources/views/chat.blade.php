<div class="row">
    <form method="POST" action="/chat" id="chat">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="col-md-12 col-sm-12 col-xs-12">

        <div class="chat-panel panel panel-default chat-boder chat-panel-head">
            <div class="panel-heading">
                <i class="fa fa-comments fa-fw"></i>
                Chat Box
                <div class="pull-right">
                    <label for="name">Your Name: </label>&nbsp;<input type="text" name="name" value="Anonymous"/>
                </div>
            </div>

            <div class="panel-body" style="height:250px;">
                <ul class="chat-box">
                </ul>
            </div>

            <div class="panel-footer">
                <div class="input-group">
                    <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message to send..." name="message"/>
                                <span class="input-group-btn">
                                    <input class="btn btn-warning btn-sm" id="btn-chat" type="submit" value="Send"/>
                                </span>
                </div>
            </div>
            </div>
        </div>
    </form>
    </div>

<script type="text/javascript">
    $( document ).ready(function() {
        loadChatMessages();
        setInterval(loadChatMessages, 1000);

        $("#chat").submit(function() {

            var url = "/chat"; // the script where you handle the form input.

            $.ajax({
                type: "POST",
                url: url,
                data: $("#chat").serialize(), // serializes the form's elements.
                success: function(data)
                {
                    $("#btn-input").val('');
                }
            });

            return false; // avoid to execute the actual submit of the form.
        });
    });

    function timeSince(dateString) {
        var dArr = dateString.split('-'),
                date = new Date(dArr[1] + "-" + dArr[0] + "-" + dArr[2]).getTime();
        var seconds = Math.floor((new Date() - date) / 1000);

        var interval = Math.floor(seconds / 31536000);

        if (interval > 1) {
            return interval + " years";
        }
        interval = Math.floor(seconds / 2592000);
        if (interval > 1) {
            return interval + " months";
        }
        interval = Math.floor(seconds / 86400);
        if (interval > 1) {
            return interval + " days";
        }
        interval = Math.floor(seconds / 3600);
        if (interval > 1) {
            return interval + " hours";
        }
        interval = Math.floor(seconds / 60);
        if (interval > 1) {
            return interval + " minutes";
        }
        return Math.floor(seconds) + " seconds";
    }

    function loadChatMessages() {
        $.get("/chat", function (data) {
            var messages = [];
            $.each(data, function (index, value) {
                var message = "";
                if (index % 2) {
                    message += "<li class=\"left clearfix\">" +
                    "<span class=\"chat-img pull-left\">";
                } else {
                    message += "<li class=\"right clearfix\">" +
                    "<span class=\"chat-img pull-right\">";
                }
                message += "<img src=\"/assets/img/jimmy_avatar.jpg\" alt=\"User\" class=\"img-circle\" />" +
                "</span>" +
                "<div class=\"chat-body\">";
                if (index % 2) {
                    message += "<strong>";
                } else {
                    message += "<strong class=\"pull-right\">";
                }
                message += value.name + "</strong>";
                if (index % 2) {
                    message += "<small class=\"pull-right text-muted\">";
                } else {
                    message += "<small class=\"pull-left text-muted\">";
                }
                message += "<i class=\"fa fa-clock-o fa-fw\"></i>" + moment(value.created_at).fromNow() +
                "</small>" +
                "<p>" + value.message + "</p>" +
                "</div>" +
                "</li>";
                messages.push(message);
            });
            var fullHtml = messages.join('');
            $('ul.chat-box').html(fullHtml);
        });
    }
</script>