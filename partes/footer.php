<!-- footer/rodape -->

<footer class="page-footer blue darken-4">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">SHIFT</h5>
                <p class="grey-text text-lighten-4">Centralizando o e-Sports para você.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Redes sociais</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Youtube</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Boomerang Copyright
            </div>
          </div>
        </footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/index.js"></script>
  <script type="text/javascript">
    $(".button-collapse").sideNav({
      draggable: true,
    });

    // Para criar a função "LEIA MAIS"
    jQuery(function(){

    var minimized_elements = $('p.minimize');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 12) return;
        
        $(this).html(
            t.slice(0,50)+'<span>...</span>'
        );
        
    }); 

  });
    $('.carousel.carousel-slider').carousel({fullWidth: true, dist:0, indicators: false});
    autoplay(); 
    function autoplay() {
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
    }

       // move next carousel
   $('.moveNextCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('next');
   });

   // move prev carousel
   $('.movePrevCarousel').click(function(e){
      e.preventDefault();
      e.stopPropagation();
      $('.carousel').carousel('prev');
   });

   // POSTs
  $(document).ready(function(){
    $('.parallax').parallax();
    $('#resposta').hide();
    $('.modal1').modal();
  });

  $('#res').click(function() {
    $('#resposta').show();
  });
  
  $('#res-fechar').click(function(event) {
    event.preventDefault();
    $('#resposta').hide();
  });

  $('.modal').modal();
  </script>
  <script type="text/javascript" src="assets/js/pesquisa.js"></script>
  <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
</body>
</html>
<?php mysql_close(); ?>