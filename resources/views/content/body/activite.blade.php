@extends('content.layout')
@section('content')

	@section('body_left')
		
        <section  class="section pb-1" >
            <div class="row ">
                <div class="col" >
                    <ul class="form-group ">
                        <div class=" servicesItem" >
                            <li>
                              <h3>Operateur Teleboutique</h3>
                              <div class="servicesItem-details">
                                  <p>discription .........</p>
                                  <p>les axes principaux de cette srvice .........</p>
                                  <div class="row justify-content-end">
                                        <div class="col-xs">
                                            <a href="service1" class="btn btn-raised btn-default"> +En savoir plus</a>
                                        </div> 
                                  </div>
                              </div>
                            </li>
                        </div>
                        <br>
                        <div class="servicesItem" >
                            <li>
                              <h3>Transfert d'Argent</h3>
                              <div class="servicesItem-details">
                                  <p class="text-warning">discription .........</p>
                                  <div class="row justify-content-end">
                                        <div class="col-xs">
                                            <a href="service2" class="btn btn-raised btn-default"> +En savoir plus</a>
                                        </div> 
                                  </div>
                              </div>
                            </li>
                        </div>
                          <br>                        
                          <div class="servicesItem" >
                            <li>
                              <h3>Distribution Packs & SIM</h3>
                              <div class="servicesItem-details">
                                  <p>discription .........</p>
                                  <div class="row justify-content-end">
                                        <div class="col-xs">
                                            <a href="service2" class="btn btn-raised btn-default"> +En savoir plus</a>
                                        </div> 
                                  </div>
                              </div>
                            </li>
                        </div>
                    </ul>
                   
                </div>

            </div>
           
        </section>
	@stop
	





@stop