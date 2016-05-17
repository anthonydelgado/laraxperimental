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
      this.$http({url: '/messages/json', method: 'GET'}).then(function (response) {
          // success callback
          self.messages = response.data; 
      }, function (response) {
          // error callback
      });

    }
});

