<form method="POST" v-on:submit.prevent="updateRegistro(preencherRegistro.id)">
      <div class="modal fade" id="edit" tabindex="2" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                          <span>&time;</span>
                      </button>
                      <h4>Editar Registros do  Imóvel</h4>
                    </div>
                    <div class="modal-body">

                            <label for="descricao">Editar o  Imóvel</label>
                            <input type="text" name="descricao"placeholder="Descrição do imóvel" class="form-control" v-model="preencherRegistro.descricao">
                            <span v-for="error in errors" class="text-danger">@{{ error }}</span>


                                      <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="preco">Preço</label>
                                                  <input type="text" class="form-control" placeholder="Preço" name="preco" v-model="preencherRegistro.preco" >
                                                  <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label for="qtd_quartos">Quantidade de Quartos</label>
                                                  <input type="number" class="form-control" placeholder="Quantidade de Quartos" name="qtd_quartos" v-model="preencherRegistro.qtd_quartos">
                                                  <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                              </div>
                                          </div>
                                      </div>

                                    <div class="row">
                                          <div class="col-md-6">
                                                <div class="form-group">
                                                      <label for="tipos">Tipo do Imóvel</label>
                                                      <select class="form-control" name="tipos"  v-model="preencherRegistro.tipos">

                                                       <option value="apartamento">Apartamento</option>
                                                       <option value="casa">Casa</option>
                                                       <option value="kitnet">Kitnet</option>
                                                    </select>
                                                    <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                                </div>
                                          </div>

                                          <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="finalidade">Finalidade do imóvel</label>
                                                        <select class="form-control" name="finalidade" v-model="preencherRegistro.finalidade">

                                                            <option value="casa">Venda</option>
                                                            <option value="locacao">Locação</option>
                                                        </select>
                                                    </div>
                                                <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                          </div>
                                    </div>

                                    <h4>Endereço</h4>
                                    <hr>

                                      <div class="form-group">
                                              <label for="logradouro_endereco">Logradouro</label>
                                              <input type="text" class="form-control" placeholder="Logradouro" name="logradouro_endereco" v-model="preencherRegistro.logradouro_endereco">
                                              <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-10">
                                              <div class="form-group">
                                                  <label for="bairro_endereco">Bairro</label>
                                                  <input type="text" class="form-control" placeholder="Bairro" name="bairro_endereco"  v-model="preencherRegistro.bairro_endereco">
                                                  <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                                              </div>
                                          </div>
                                      </div>

                    </div>


                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Atualizar">
                    </div>
                </div>
            </div>
        </div>
</form>
