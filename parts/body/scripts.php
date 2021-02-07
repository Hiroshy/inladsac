    <!-- JavaScript files-->
    <script>
      function injectSvgSprite(path) {
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
            var div = document.createElement("div");
            div.className = 'd-none';
            div.innerHTML = ajax.responseText;
            document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to Bootstrapious website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.01205608.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/orion-svg-sprite.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/icons/varkala-clothes.svg'); 
      injectSvgSprite('https://demo.bootstrapious.com/varkala/1-1/img/shape/blob-sprite.svg'); 
    </script>
    <!-- jQuery-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Bundle -->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper Carousel                       -->
    <script src="/vendor/swiper/js/swiper.min.js"></script>
    <!-- Bootstrap Select-->
    <script src="/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- AOS - AnimationOnScroll-->
    <script src="/vendor/aos/aos.js"></script>
    <!-- Custom Scrollbar-->
    <script src="/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/custom-scrollbar-init.f148089f.js"></script>
    <!-- Smooth scroll-->
    <script src="/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>
    <!-- Object Fit Images - Fallback for browsers that don't support object-fit-->
    <script src="/vendor/object-fit-images/ofi.min.js"></script>
    <!-- JavaScript Countdown-->
    <script src="/js/countdown.782bfd78.js"></script>
    <script>
      var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
      var countdown = new Countdown('countdown', deadline);
      
    </script>
    <!-- Some theme config-->
    <script>
      var options = {
          navbarExpandPx: 992
      }
      
    </script>
    <!-- Main Theme files-->
    <script src="/js/sliders-init.1db6fb07.js"></script>
    <script src="/js/theme.fe2c17cd.js"></script>
    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/0ce30eaf4c.js" crossorigin="anonymous"></script>

    <script>
      const btnStartRecording=document.getElementById('microphon');
      const btnStopRecording=document.getElementById('stop');
      const btnReadText=document.getElementById('leer');
      const textArea=document.getElementById('querySearch');

      //formulario
      const formulario=document.getElementById("searchTerm")

      let recognition=new webkitSpeechRecognition();
          recognition.lang='es-Es';
          recognition.continuous = true;
          recognition.interimResult = false;

          recognition.onresult=(event)=>{
              const results = event.results;
              const frase = results[results.length -1 ][0].transcript
              textArea.value=frase
              recognition.stop();
          }

          recognition.onend=(event)=>{
              console.log("operación terminada");
              btnStartRecording.classList.remove("micro_active")
              btnStartRecording.setAttribute("data-original-title","Dime algo")
              url_query="/category-full-sidebar?query="+textArea.value
              location.href=url_query
          }

          recognition.onerror=(event)=>{
              console.log(event.onerror)
          }

      btnStartRecording.addEventListener('click',()=>{
          recognition.start();
          btnStartRecording.classList.add("micro_active")
          btnStartRecording.setAttribute("data-original-title","Escuchandote ...")
      })

      btnStopRecording.addEventListener('click',()=>{
          recognition.abort();
      })

      btnReadText.addEventListener('click',()=>{
          leerTexto(textArea.value);
      })

      function leerTexto(text){
          const speech = new SpeechSynthesisUtterance();
          speech.text=text;
          speech.volume=1;
          speech.rate=1;
          speech.pitch=1;

          window.speechSynthesis.speak(speech);
      }

      

    </script>