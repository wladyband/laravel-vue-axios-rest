<form method="POST" v-on:submit.prevent="createRegistro">


  @section('content')
          @if($errors->any())
              <div class="alert alert-danger" role="alert">
                  @foreach ($errors->all() as $error)
                      {{ $error }}<br>
                  @endforeach
              </div>
          @endif


      <div class="modal fade" id="create" tabindex="2" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                          <span>&time;</span>
                      </button>
                      <h4>Novo Imóvel</h4>
                    </div>
                    <div class="modal-body">

                            <label for="descricao">Criar Imóvel</label>
                            <input type="text" name="descricao"placeholder="Descrição do imóvel" class="form-control" v-model="newDesc" required>


                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="preco">Preço</label>
                                                  <input type="text" class="form-control" placeholder="Preço" name="preco" v-model="newPreco" required>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="qtdQuartos">Quantidade de Quartos</label>
                                                  <input type="number" class="form-control" placeholder="Quantidade de Quartos" name="qtdQuartos" v-model="newQtdQuartos" required>
                                              </div>
                                          </div>
                                      </div>

                                    <div class="row">
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                      <label for="tipos">Tipo do Imóvel</label>
                                                      <select class="form-control" name="tipos" v-model="newTipo" required>
                                                      <option selected value="apartamento">Apartamento</option>
                                                      <option value="casa">Casa</option>
                                                      <option value="kitnet">Kitnet</option>
                                                    </select>
                                                </div>
                                          </div>

                                          <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="finalidade">Finalidade do imóvel</label>
                                                        <select class="form-control" name="finalidade" v-model="newFinalidade" required>
                                                            <option selected value="venda">Venda</option>
                                                            <option value="locacao">Locação</option>
                                                        </select>
                                                    </div>

                                          </div>
                                    </div>

                                    <h4>Endereço</h4>
                                    <hr>

                                      <div class="form-group">
                                              <label for="logradouroEndereco">Logradouro</label>
                                              <input type="text" class="form-control" placeholder="Logradouro" name="logradouroEndereco" v-model="newLogradouroEndereco" required>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-10">
                                              <div class="form-group">
                                                  <label for="bairroEndereco">Bairro</label>
                                                  <input type="text" class="form-control" placeholder="Bairro" name="bairroEndereco"  v-model="newBairroEndereco" required>
                                              </div>
                                          </div>
                                      </div>

                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Salvar">
                    </div>
                </div>
            </div>
        </div>
</form>
