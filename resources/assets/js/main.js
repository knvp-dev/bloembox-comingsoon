var Vue = require("Vue");
var VueResource = require('vue-resource');

Vue.use(VueResource);


new Vue({

	el: "#app",

	data: {
		email: '',
		loading: false,
		success: false
	},

	methods:{
		register(){

			this.loading = !this.loading;

			var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

			if(re.test(this.email) && this.email != ""){
				this.$http.post('/register',{'email':this.email}).then(function(){
					this.loading = false;
					this.success = true;
				});

			}else{
				this.loading = false;
			}
			
		}
	}
	

});