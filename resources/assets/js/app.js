
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

var crud = new Vue({
			el: '#crud',
			created: function() {
					this.getRegistros();
			},
			data: {
					registros: [],
					newDesc: '',
					newPreco: '',
					newQtdQuartos: '',
					newTipo: '',
					newFinalidade: '',
					newLogradouroEndereco: '',
					newBairroEndereco: '',
					preencherRegistro: {
						'id': '',
						'descricao': '',
						'preco': '',
						'qtd_quartos': '',
						 'tipos': ''	,// acho que meu problema está aqui******
						'finalidade': '',// acho que meu problema está aqui******
						'logradouro_endereco': '',
						'bairro_endereco': ''
					},
					errors: []
			},
			methods: {
					getRegistros: function() {
						var urlRegistro = 'imovels';
						axios.get(urlRegistro).then(response => {
								this.registros = response.data
						});
					},
					editarRegistro: function(registro) {
						/*	alert(registro.tipos); */
								console.log(registro);
							 this.preencherRegistro.id = registro.id;
							 this.preencherRegistro.descricao = registro.descricao;
							 this.preencherRegistro.preco = registro.preco;
							 this.preencherRegistro.qtd_quartos = registro.qtd_quartos;
							 this.preencherRegistro.tipo = registro.tipo;
							 this.preencherRegistro.finalidade = registro.finalidade;
							 this.preencherRegistro.logradouro_endereco = registro.logradouro_endereco;
							 this.preencherRegistro.bairro_endereco = registro.bairro_endereco;

							 $('#edit').modal('show');
					},
					updateRegistro: function(id) {
							var url = 'imovels/' + id;
							axios.put(url, this.preencherRegistro).then(response => {
									this.getRegistros();
									this.preencherRegistro = {  'id': '',
									'descricao': '',
									'preco': '',
									'qtd_quartos': '',
									 'tipo': ''	,
									'finalidade': '',
									'logradouro_endereco': '',
									'bairro_endereco': ''  };
									this.errors	  = [];
									$('#edit').modal('hide');
									toastr.success('Tarea actualizada con éxito');
											}).catch(error => {
												this.errors = 'Corrija para poder editar con éxito'
											});
					},
					 createRegistro: function() {
						 var url = 'imovels';
						 axios.post(url, {
							descricao: this.newDesc,
							preco: this.newPreco,
							qtd_quartos: this.newQtdQuartos,
							tipo: this.newTipo,
							finalidade: this.newFinalidade,
							logradouro_endereco:  this.newLogradouroEndereco,
						  bairro_endereco:	 this.newBairroEndereco
						 }).then(response => {
							 this.getRegistros();
							 this.newDesc = '';
							 this.newPreco = '';
							 this.newQtdQuartos = '';
							 this.newTipo = '';
							 this.newFinalidade = '';
							 this.newLogradouroEndereco = '';
							 this.newBairroEndereco = '';
							 this.errors = [];
							 $('#create').modal('hide');// efetuar a execução
 							toastr.success('Novo imóvel criado com sucesso!');
						 }).catch(error => {
							 	this.errors = error.response.data
						 });
					 },
					deletarRegistro: function(registro) {
							 var url = 'imovels/' + registro.id;
							 axios.delete(url).then(response => {
								 this.getRegistros();
								 toastr.success('Registro excluído com sucesso');
							 });
					}
			}
		});
