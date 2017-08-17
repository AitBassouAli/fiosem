        <div >
            <div class="card wow fadeIn body_right_item" data-wow-delay="0.6s">
                <div class="view overlay hm-white-slight">
                    <img src="https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAgsAAAAJDczZGIxZjU2LWNlN2ItNDliMS1hZWIyLTc0ZDJiMDA3MmI2ZQ.jpg" class="img-fluid" alt="">
                    <a href="/accueil">
                        <div class="mask"></div>
                    </a>
                 </div>
                 <div class="card-block">
                    <h4 class="card-title">Titre</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row justify-content-around">
                        <button class="btn btn-info" data-toggle="modal" href="#dialog1">+&nbsp;détail</button>   
                    </div>
                 </div>
            </div>
           
        </div>
        <div  style="margin-top: 10%">
            <div class="card wow fadeIn body_right_item" data-wow-delay="0.6s">
                <div class="view overlay hm-white-slight">
                    <img src="https://edito.regionsjob.com/observatoire-metier/wp-content/uploads/sites/4/2015/12/superviseur-centre-dappels.jpg" class="img-fluid" alt="">
                    <a href="/accueil">
                         <div class="mask"></div>
                    </a>
                </div>
                <div class="card-block">
                    <h4 class="card-title"></h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row justify-content-around">
                        <button class="btn btn-info" data-toggle="modal" href="#dialog2">+&nbsp;détail</button>  
                    </div>
                </div>
            </div>
        </div>
        <!-- modales content -->
            <div class="modal fade right" id="dialog1" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
            aria-hidden="true" data-backdrop="false">
             @include('content.models.modal1')
            </div>
            <div class="modal fade right" id="dialog2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true" data-backdrop="false">
            @include('content.models.modal2')
            </div>
