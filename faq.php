<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>

 
<main class="container p-5">
<h3>FAQ</h3>
<h4>Vous avez des questions ? Et vous souhaitez avoir plus de précision sur votre demande ?</h4>
<p>Veuillez vérifier si votre question n'est pas parmis les question ci-dessous, sinon veullez nous faire votres demande dans la page <a href="">contact</a><!-- lien vers page contact (boutton)--></p>


<div class="accordion p-5" id="accordionExample1 ">
  <div class="row">

    <div class="col-md-6">
      <div class="accordion-item mb-3">
    <h3 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
Vous intervenez sous quels délais?      </button>
    </h3>
    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Si vous nous contactez avant 12h nous pouvons intervenir le jour même dans la majoritédes cas.<br>Sinon, un rendez-vous pour le lendemain est possible.
      </div>
    </div>
  </div>
  <div class="accordion-item mt-3 mb-3">
    <h3 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Vos réparations sont elles garanties ?
      </button>
    </h3>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Oui, Createch Informatique s'engage à réintervenir gratuitement si la même anomalie que pour laquelle nous sommes intervenus réapparait dans les 30 jours qui suivent notre intervention.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Pouvez vous reparer mon ordinateur a distance?
      </button>
    </h3>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Oui, nous pouvons intervenir à distance, à condition que votre connexion internet fonctionne. <br> Cepandant, nous priviliégions le interventions physiques afin de pouvoir faire un audit plus complet de l'équipement et d'avoir un contact humain avec nos clients.
      </div>
    </div>
  </div>
</div> 

<div class="col-md-6">
      <div class="accordion-item mb-3">
    <h3 class="accordion-header" id="headingFour">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Pouvez vous m'aidez à installer mon nouveau PC?
      </button>
    </h3>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Oui, notre forfait installation informatique à domicile inclus le paramétrage de votre ordinateur ainsi que la connexion de celui ci à internet.
      </div>
    </div>
  </div>
  <div class="accordion-item mt-3 mb-3">
    <h3 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Que dois-je payer si mon PC n'est pas réparé?
      </button>
    </h3>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Rien, aucun frais ne vous sera réclamé si votre panne n'est pas résolue. Cela fait partie de la garantie de resultat chez Createch Informatique.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h3 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          Comment se passe une réparation information?
      </button>
    </h3>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample1">
      <div class="accordion-body">
        Apres avoir pris rendez-vous avec nos services, nous envoyons un technicien à votre domicile. <br> Celui-ci effectue la réparation de votre ordinateur tout en vous donnant des informations sur l'origine de la panne et comment l'éviter à l'avenir. <br>
        Si vous avez des questions, n'hésitez pas à les lui poser.
      </div>
    </div>
  </div>
</div> 

</div>
</div>
<!--<div class="accordion accordion-flush mb-3" id="accordionFlushExample">

  <div class="accordion-item">
    <h3 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
      <div class="row">
            <div class="col-1 bg-light text-center p-auto around">01</div>
            <div class="col-11">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, vero natus dolore placeat iusto adipisci explicabo, cupiditate sed maiores suscipit numquam quisquam? Molestias sint excepturi non amet quas, sed libero.
            Labore, adipisci earum consequatur recusandae modi tempora itaque,</div>
        </div>
      </button>
    </h3>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>



  <div class="accordion-item">
    <h3 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        <div class="row">
        <div class="col-1 bg-light text-center p-auto around ">02</div>
            <div class="col-11">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, vero natus dolore placeat iusto adipisci explicabo, cupiditate sed maiores suscipit numquam quisquam? Molestias sint excepturi non amet quas, sed libero.
            Labore, adipisci earum consequatur recusandae modi tempora itaque,</div>
        </div>
        
      </button>
    </h3>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>



  <div class="accordion-item">
    <h3 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <div class="row">
      <div class="col-1 bg-light text-center p-auto around">03</div>
            <div class="col-11">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, vero natus dolore placeat iusto adipisci explicabo</div>
        </div>
      </button>
    </h3>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
-->


 
</div>
</main>
<?php 
include 'inc/button.scroll.inc.php';
include 'inc/footer.inc.php';
?>
