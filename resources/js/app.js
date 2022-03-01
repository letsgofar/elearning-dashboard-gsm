/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
import Vue from 'vue'

new Vue({
    el: '#app',
    data: {
        id: document.querySelector('meta[name="user_id"]').content,
		search: '',
		messages: [],
		users: [],
		form: {
			to_id: '',
			content: ''
		},
		isActive: null,
		notif: 0
    },
    mounted() {
		this.fetchUsers() // memanggil semua user yang di chat
		this.fetchPusher() // untuk menjalankan laravel echo dan pusher
    },
    methods: {
        // mengeluarkan semua pengguna
		fetchUsers() {
			let q = _.isEmpty(this.search) ? 'all' : this.search
			
			axios.get('/message/user/' + q).then(({ data }) => {
				this.users = data
			})
		},
		// mengeluarkan semua messages dari user yang dipilih
		fetchMessages(id) {
			this.form.to_id = id
			axios.get('/message/user-message/' + id).then(({ data }) => {
				this.messages = data
				this.isActive = this.users.findIndex((s) => s.id === id)
				this.users[this.isActive].count = 0
				this.notif--
			})
		},
		// mengirim pesan yang dikirim
		sendMessage() {
			axios.post('message/user-message', this.form).then(({ data }) => {
				this.pushMessage(data, data.to_id)
				this.form.content = ''
				this.search = ''
			})
		},
		// fungsi untuk push laravel echo dan pusher
		fetchPusher() {
			Echo.channel('user-message.' + this.id)
				.listen('MessageEvent', (e) => {
					this.pushMessage(e, e.from_id, 'push')
				})
		},
		// semua akan di eksekusi disini
		pushMessage(data, user_id, action = '') {
			let index = this.users.findIndex((s) => s.id === user_id)
			if (index != -1 && action == 'push') {
				this.users.splice(index, 1) // menghapus user
			}
			/**
			 * if untuk pesan submit
			 */
			if (action == '') {
				this.users[index].content = data.content
				this.users[index].to_id = data.to_id
				let user = this.users[index]
				this.users.splice(index, 1)
				this.users.unshift(user)
			}
			/**
			 * else untuk pesan dari laravel echo
			 */
			else {
				this.users.unshift(data) // menambahkan user baru ke atas
			}
			/**
			 * Jika dia melihat pesan user yang dipilih
			 */
			if (this.form.to_id != '') {
				index = this.users.findIndex((s) => s.id === this.form.to_id)
				this.users[index].count = 0
				this.isActive = index
				if (this.form.to_id == user_id) {
					this.messages.push({
						avatar: data.avatar,
						content: data.content,
						created_at: data.created_at,
						from_id: data.from_id,
					})
					axios.get('/message/user-message/' + user_id + '/read')
				}
			}
		},
		// agar scroll ke arah pesan yang baru
		scrollToEnd: function () {
			let container = this.$el.querySelector("#card-message-scroll");
			container.scrollTop = container.scrollHeight;
		}
    },
    watch: {
        // untuk mencari user
		search: _.debounce( function() {
			this.fetchUsers()
		}, 500),
		// untuk menambahakan jumlah notifikasi berdasarkan perubahan variable users
		users: _.debounce( function() {
			this.notif = 0
			this.users.filter(e => {
				if (e.count) {
					this.notif++
				}
			})
		}),
		// setiap ada pesan baru akan memanggil this.scrollToEnd()
		messages: _.debounce( function() {
			this.scrollToEnd()
		}, 10)
    }
})