function w3_open() {
                var x = document.getElementById("mySidebar");
                if(x.style.display === "none")
                {
                    document.getElementById("page").style.marginLeft = "15%";
                    x.style.width = "15%";
                    x.style.display = "block";
                    
                }
                else {
                    document.getElementById("page").style.marginLeft = "0%";
                    x.style.display = "none";
                    document.getElementById("openNav").style.display = "inline-block";
                }
                
               
              }

              
              function mostraDados() {
                document.getElementById("meusDados").style.display = "block";
                document.getElementById("useremail").style.display = "none";
                document.getElementById("meusinteresses").style.display = "none";
              }
              function mostraEmail() {
                document.getElementById("meusDados").style.display = "none";
                document.getElementById("useremail").style.display = "block";
                document.getElementById("meusinteresses").style.display = "none";
              }
              function mostraInteresses() {
                document.getElementById("meusDados").style.display = "none";
                document.getElementById("useremail").style.display = "none";
                document.getElementById("meusinteresses").style.display = "block";
              }
            
              //seletor de imagem
              function seletorDeImagem(){
              var preview = document.querySelector(".minhafoto"); 
              var file    = document.querySelector('input[type=file]').files[0]; 
              var reader  = new FileReader();

              reader.onloadend = function () {
                  preview.src = reader.result;
              }

              if (file) {
                  reader.readAsDataURL(file); 
              } else {
                  preview.src = "";
              }
              }