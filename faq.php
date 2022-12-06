<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';
include 'inc/header.inc.php';
include 'inc/nav.inc.php';
?>

 
<main class="container">
<h3>FAQ</h3>
<h4>Vous avez des questions ? Et vous souhaitez avoir plus de precision sur votre demande ?</h4>
<p>Veuillez verifier si votre question n'est pas parmis les question ci-dessous, sinon veullez nous fairevotres demande dans la page contact <!-- lien vers page contact--></p>

<div class="accordion accordion-flush mb-3" id="accordionFlushExample">

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
        <div class="col-1 bg-light text-center p-auto around">02</div>
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


 
</div>
</main>
<?php 
include 'inc/footer.inc.php';
?>
