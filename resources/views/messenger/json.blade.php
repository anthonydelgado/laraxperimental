var viewmodel = new Vue({
el: '#vuemessenger',

data: {
sortparam: '',

fitlerkey: '',

order: 1,

messages: [
@if($threads->count() > 0)
    @foreach($threads as $thread)
        {
        "id": "{{ $thread->id }}",
        "name": "{{ $thread->creator()->name }}",
        "date": "{{ $thread->id }}",
        "body": "{{ $thread->latestMessage->body }}",
        "avatar": "{{  Gravatar::get(Auth::user()->email) }}",
        "url": "{{URL::to('messages/' . $thread->id)}}",
        },
    @endforeach
@else
    {id: '0', name: '', date: '', body: 'No messages yet.', avatar: '{{  Gravatar::get(Auth::user()->email) }}', url: '{{URL::to('messages')}}'},
@endif
]
},

methods: {
sortvia: function (sortparam, order) {
this.order = this.order * -1;
this.sortparam = sortparam;
}
}
});