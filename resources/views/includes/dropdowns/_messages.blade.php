<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        @include('messenger.unread-count')
    </a>
    <ul class="dropdown-menu">
        <li class="header"><a href="{{URL::to('messages/create')}}">New Message</a></li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul id="vuemessenger" class="menu">
                <li v-for="message in messages" class="active">
                    <a href="@{{ message.url }}">
                        <div class="pull-left">
                            <img src=" @{{ message.avatar }}" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            @{{ message.name }}
                            <small><i class="fa fa-clock-o"></i>  @{{ message.date }}</small>
                        </h4>
                        <p> @{{ message.body }}</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="{{URL::to('messages')}}">See All Messages</a></li>
    </ul>
</li>
<script>
    var viewmodel = new Vue({
        el: '#vuemessenger',

        data: {
            sortparam: '',

            fitlerkey: '',

            order: 1,

            messages: [

            ]
        },

        methods: {
            sortvia: function (sortparam, order) {
                this.order = this.order * -1;
                this.sortparam = sortparam;
            }
        },
        ready: function() {

            var self = this;

            // GET request
            this.$http({url: '{{URL::to('messages/json')}}', method: 'GET'}).then(function (response) {
                // success callback
                self.messages = response.data;
            }, function (response) {
                // error callback
            });

        }
    });



</script>
<script src="{{URL::to('messages/json')}}" type="text/javascript"></script>