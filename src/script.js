var app = new Vue ({
    el: '#app',
    data: {
        array: [],
        types: [],
        selected: 'All'
    },
    methods: {
        filterType(){

			this.array.forEach(element => {
				if (!this.types.includes(element.genre)){
					this.types.push(element.genre);
				}
			});
		},
        filterGenre() {

            axios
			.get('src/partials-php/server.php')
            .then( result => {

                let filtro = result.data;

                if(this.selected != 'All') {
                    filtro = filtro.filter( element => element.genre == this.selected);
                }

                this.array = filtro;
            })
		}
    },
    mounted() {
        axios.get('src/partials-php/server.php').then(result => {
            this.array = result.data;

            this.filterType();
        })
    }

}); 