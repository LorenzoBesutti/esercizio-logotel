<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
    <style>
        nav ul li a{
            text-transform: uppercase;
            font-weight: bold;
            margin-right: 20px;
            color: white
        }
        nav ul li a:hover{
         color: #D25368
        }
        .logo{
            width: 150px
        }
        .bg_nav{
           background-color: rgba(0, 0, 0, 0.5);
           overflow: hidden;
           
        }
        .carousel-item {
  height: 65vh;
  min-height: 350px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.immagine1{
    background-image: url('/header.jpg')
}
.immagine2{
    background:linear-gradient(
         rgba(0, 0, 0, 0.7), 
         rgba(0, 0, 0, 0.7)
       ), url('/gabbiani.jpg');
       background-size: cover
}
.immagine3{
    background:linear-gradient(
         rgba(0, 0, 0, 0.7), 
         rgba(0, 0, 0, 0.7)
       ), url('/città.jpg');
       background-size: cover
}
.testo_header{
    text-align: left;
    width: 30%;
  
}
@media screen and (max-width: 1200px) {
 .testo_header{
     width: 70%;
     text-align: left
 }
}

.titolo_header{
    font-size: 35px;
    font-weight: bold;
    margin-top: 5px
}
@media screen and (max-width: 600px) {
 .titolo_header{
    font-size: 30px
 }
}


.sottotitolo_header{
    margin-top: 40px
}
.cla{
    background-color: #D25368;
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    margin-top: 5%;
    border-radius: 20px

}
.cla:hover{
    color: white;
    background-color: burlywood
}
.body{
    position: relative;
    
}
.navbarDesktop{
    border-bottom: 3px solid #D25368;
    transition: 1s
}
.altezza_navbar{
    height: 60px !important;
    transition: 1s
}
.carousel-control-prev-icon {
    background-image: none !important
}
.carousel-control-next-icon {
    background-image: none !important
}
.frecce_slider{
    color: white
}
.card-title{
    font-weight: bold;
    color: #D25368
}
.onde{
    
    background-image: url('/onda.png');
     height: 550px;
     background-size: cover;
}

.assoluto{
    position: relative;
    top: -130px
}
.frase_onda{
    font-weight: bold;
    color: #D25368;
    position: absolute;
  right: 10%;
    bottom: 35%;
    font-size: 35px
}
@media screen and (max-width: 1200px) {
    .frase_onda{
    font-weight: bold;
    color: #D25368;
    position: absolute;
  left: 5%;
    top: 70%;
    font-size: 35px
}
}

.z-index{
    z-index: 99
}

.sfondo_nero{
    height: 1100px;
background-color: #272727;
position: relative;
top: -140px

}
 @media screen and (max-width: 1000px) {
 .sfondo_nero{
     height: 1200px
 }
}  
@media screen and (max-width: 800px) {
 .sfondo_nero{
     height: 1400px
 }
} 
@media screen and (max-width: 700px) {
 .sfondo_nero{
     height: 1500px
 }
} 
@media screen and (max-width: 600px) {
 .sfondo_nero{
     height: 1600px
 }
} 
@media screen and (max-width: 560px) {
 .sfondo_nero{
     height: 1800px
 }
} 
@media screen and (max-width: 381px) {
 .sfondo_nero{
     height: 2400px
 }
} 
@media screen and (max-width: 320px) {
 .sfondo_nero{
     height: 2600px
 }
} 



@import url('https://fonts.googleapis.com/css?family=Lobster');
 @import "https://fonts.googleapis.com/css?family=Nunito:400, 700&display=swap";

 .timeline {
	 display: grid;
	 grid-template-columns: 10% 80% 10%;
     width: 90%;
 
}
 .timeline section {
	 min-height: 50px;
}
 .timeline .info {
	 background-clip: padding-box;
	 border-top: 4px solid #b5bec6;
    
}
 .timeline .info h2 {
	 color: #364652;
	 font-size: 1.5rem;
	 margin-bottom: 1px;
}
 .timeline .info span {
	 color: white;
     
}
 .timeline .info:nth-of-type(2n) {
	 padding-right: 2em;
	 text-align: right;
}
 .timeline .info:nth-of-type(2n) span {
	 max-width: 50%;
	 display: inline-block;
	 animation: slideInRight 1.5s forwards 0s ease-in-out;
}
 .timeline .info:nth-of-type(2n+1) {
	 padding-left: 2em;
	 text-align: left;
}
 .timeline .info:nth-of-type(2n+1) span {
	 max-width: 50%;
	 display: inline-block;
	 animation: slideInLeft 1.5s forwards 0s ease-in-out;
}
 .timeline .circle-container:nth-child(2n) .tl {
	 grid-area: tl;
	 border-top: 4px solid #b5bec6;
	 border-right: 4px solid #b5bec6;
	 border-top-right-radius: 20px;
	 margin-bottom: -4px;
}
 .timeline .circle-container:nth-child(2n) .bl {
	 grid-area: bl;
	 border-bottom: 4px solid #b5bec6;
	 border-right: 4px solid #b5bec6;
	 border-bottom-right-radius: 20px;
	 margin-bottom: -4px;
}
 .timeline .circle-container:nth-child(2n + 1) .tr {
	 grid-area: tr;
	 border-top: 4px solid #b5bec6;
	 border-left: 4px solid #b5bec6;
	 border-top-left-radius: 20px;
	 margin-bottom: -4px;
}
 .timeline .circle-container:nth-child(2n + 1) .br {
	 grid-area: br;
	 border-bottom: 4px solid #b5bec6;
	 border-left: 4px solid #b5bec6;
	 border-bottom-left-radius: 20px;
	 margin-bottom: -4px;
}
 .circle-container {
	 display: grid;
	 grid-template-columns: auto auto auto auto;
	 grid-template-rows: auto 2.5em 2.5em auto;
	 grid-template-areas: "tl tl tr tr" "cr cr cr cr" "cr cr cr cr" "bl bl br br";
}
 .circle-container div {
	 grid-area: cr;
}
 .circle {
	 width: 5em;
	 height: 5em;
	 background: #848b91;
	 border-radius: 50%;
	 margin-left: 1em;
	 color: white;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
 .flex {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 margin-left: -1em;
}
 .no-border {
	 border-top: 0px !important;
	 border-left: 0px !important;
	 border-bottom: 0px !important;
	 border-right: 0px !important;
}

 @media screen and (max-width: 768px) {
	 .info span {
		 padding-bottom: 1em;
	}
}
 .comune{
     visibility: hidden;
     z-index: 999 !important


 }
 .mostra{
     visibility: visible !important
 }
 .imgs{
     width: 70%
 }
 .flex_timeline{
    display: flex;
     flex-direction: column;
     align-items: center;
     justify-content: center;
     position: absolute;
    
 }
 .azzurro{
     color: aqua !important;
     padding-top: 25px !important
 }
 .giallo{
     color: rgb(227, 227, 93) !important;
     padding-top: 25px !important
 }
 .rosso{
     color: #D25368 !important;
     padding-top: 25px !important
 }

 .bg_azzurro{
background-color: aqua !important;
cursor: pointer;
 }
 @media screen and (max-width: 760px) {
 .bg_azzurro{
height:50px;
width:50px
 }
} 
 .bg_azzurro:hover{
background-color: aqua !important;
cursor: pointer;
transform:scale(1.1);
box-shadow: 0 0.5rem 1rem aqua !important;
 }
 .bg_giallo{
     background-color: rgb(227, 227, 93) !important;
     cursor: pointer;
 }
 @media screen and (max-width: 760px) {
 .bg_giallo{
height:50px;
width:50px

 }
}  
 .bg_giallo:hover{
     background-color: rgb(227, 227, 93) !important;
     cursor: pointer;
     transform: scale(1.1);
     box-shadow: 0 0.5rem 1rem rgb(227, 227, 93) !important;
 }
 .bg_rosso{
     background-color: #D25368 !important;
     cursor: pointer;
     z-index: 99
 }
 @media screen and (max-width: 760px) {
 .bg_rosso{
height:50px;
width:50px
 }
} 
 .bg_rosso:hover{
     background-color: #D25368 !important;
     cursor: pointer;
     transform: scale(1.1);
     box-shadow: 0 0.5rem 1rem #D25368  !important; 
     z-index: 99
     
 }
 .onde_inferiore{
    transform: rotate(180deg);
    background-size: cover;
    background-image: url('/onda.png');
    height: 550px;
    bottom: 150px;

}
.unisci{
    top: -150px
}

.frase_onda1{
    font-weight: bold;
    color: #D25368;
    font-size: 35px;
    position: absolute;
    left: 10%;
    bottom: 700px;
}
@media screen and (max-width: 1200px) {
    .frase_onda1{
display: none
}

}
.onde_assoluto{
    position: relative
}

.tab_rosa{
    color: white;
    border-bottom: 2px solid white;
    text-transform: uppercase;
    text-align: center
}
.tab_gialla{
    color: rgb(227, 227, 93);
    text-transform: uppercase;
    border-bottom: 2px solid rgb(227, 227, 93);
    text-align: center
}
.tab_turchese{
    color: turquoise;
    text-transform: uppercase;
    border-bottom: 2px solid turquoise;
    text-align: center
}
.bg_rosa_tab{
    background-color: #D25368 ;
    border-radius: 20px;
    border: 1px solid #D25368
   
}

.cla_rosa{
    background-color: white;
    color: #D25368;
    text-transform: uppercase;
    text-align: center;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
   
    padding-left: 2px !important;
    padding-right: 2px !important

}
.cla_rosa:hover{
    text-decoration: none;
    color: orange
}
.cla_gialla{
    background-color: rgb(227, 227, 93);
    color: white;
    text-transform: uppercase;
    text-align: center;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
   
    padding-left: 2px !important;
    padding-right: 2px !important

}
.cla_gialla:hover{
    text-decoration: none;
    color: orange
}

.cla_turchese{
    background-color: turquoise;
    color: white;
    text-transform: uppercase;
    text-align: center;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
   
    padding-left: 2px !important;
    padding-right: 2px !important

}
.cla_turchese:hover{
    text-decoration: none;
    color: orange
}
.radius_card{
    border-radius: 20px
}

.no{
    border-radius: 20px  !important;
    border: 1px solid #D25368
    
}
.h_card{
    height: 480px
}

.su_card{
    top: -170px;

}

.sfondo_finale{
background-image: url('/sfonfoFinale.png');
background-size: cover;
height: 400px;
}
@media screen and (max-width: 768px) {
    .sfondo_finale{

height: 1400px;
}
}
 @media screen and (min-width: 769px) {
    .sfondo_finale{

height: 900px;
}
} 
@media screen and (min-width: 992px) {
    .sfondo_finale{

height: 400px;
}
} 
.flex_finale{

display: flex;
margin-left: auto;
margin-right: auto


}

footer{ 
    height: 300px;
   background-color: #272727;           Z
    position: relative
}
.icons{
    float: right;
}
@media screen and (max-width: 800px) {
    .icons{
float:left

}
}
@media screen and (max-width: 700px) {
    .icone{
right: 20%

}
}
.icona_singola{
    width: 40px
}
.relativo{
    position: relative
}

.logo_footer{
    width: 100px
}
footer{
    padding: 4%;
    color: white
}

.flex_card{


} 
 @media screen and (max-width: 600px) {
 .flex_card{
    display: flex;
 
    justify-content: center;
    flex-direction: column;
    align-items: center
 }
} 
.mx-auto1{

}
.mx-auto2{

}
@media screen and (max-width: 800px) {
 .mx-auto1{
 margin-left: auto;
 margin-right: auto;
 margin-top: 30px
 }
} 
@media screen and (max-width: 992px) {
 .mx-auto2{
 margin-left: 180px;
 margin-top: 30px;
 z-index: 999
 }
} 
@media screen and (max-width: 760px) {
 .mx-auto2{
    margin-left: auto;
 margin-right: auto;
 margin-top: 30px
 }
} 

.flex_finale1{

}
@media screen and (max-width: 700px) {
    .flex_finale1{
display: flex;
flex-direction: column;

}
}
.in_comune{

}
.in_comune1{
    
}
@media screen and (max-width: 800px) {
.in_comune{
    margin-left: auto;
    margin-right: auto;
    margin-top: 30px
}
}

@media screen and (max-width: 990px) {
 .in_comune1{

margin-left: 55%;
 margin-top: 30px;
 z-index: 999
 }
} 
 


@media screen and (max-width: 765px) {
 .in_comune1{
    margin-left: auto;
 margin-right: auto;
 margin-top: 30px
 }
}  
.p_custom{
    padding: 50px
}
@media screen and (max-width: 700px) {
    .p_custom{
padding: 20px
}
} 
.p_custom1{
    margin-bottom: 20px;
    margin-right: 50px
}


@media screen and (max-width: 700px) {
    .p_custom1{
    margin-bottom: 10px;
    margin-right: 30px
}
}  

 .card1{
   
    position: relative;
  
    
    
}
.card1:hover{
    
    border:none
} 
.card1:before{
    content: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin id quam finibus, scelerisque tortor sed, pulvinar nisi. Fusce nulla lorem, venenatis luctus purus eu, consequat congue turpis. Praesent rhoncus ex sed dolor malesuada tristique';
    padding: 5px;
    padding-top: 100px;
    text-align: center;
    color: white;
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(216, 149, 164, 0.5),rgb(162, 0, 35));
    z-index: 2;

    opacity: 0;
}
 .card1:hover:before{
    opacity: 1
}
.card1 img
.info {
    width: 100%;
    height: 100%;
    object-fit: cover;
    position: absolute;
    top: 0;
    left: 0;
}
/*    .info{
    position: relative;
    z-index:3;
    color:#fff;
    opacity: 0;
    transform: translateY(30px);
    transition: 0.5s all;
}*/
   /* .card1:hover .info{
    transform: translateY(0px);
    opacity: 1
}   */     







    </style>
</head>
<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg_nav fixed-top">
        <div class="container">
            <img class="logo" src="/logotel.png">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">slider
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">news</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">percorso</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">tab</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <header>
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
         
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active immagine1">
              <div class="carousel-caption  testo_header">
                <h2 class="display-4 titolo_header">First Slide: 
                    Lorem ipsum dolor idquam finibus</h2>
                <p class="lead sottotitolo_header ">This is a description for the first slide.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin idquam finibus, </p>
                <button class="btn cla"> call to action</button>  
            </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item immagine2">
              <div class="carousel-caption  testo_header">
                <h2 class="display-4 titolo_header">Second Slide: 
                    Lorem ipsum dolor idquam finibus</h2>
                <p class="lead sottotitolo_header ">This is a description for the second slide. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin idquam finibus, </p>
                <button class="btn cla"> call to action</button>  
            </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item immagine3" >
              <div class="carousel-caption  testo_header">
                <h2 class="display-4 titolo_header">Third Slide: 
                    Lorem ipsum dolor idquam finibus</h2>
                <p class="lead sottotitolo_header ">This is a description for the third slide. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin idquam finibus, </p>
                <button class="btn cla"> call to action</button>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class=" frecce_slider fas fa-arrow-left fa-2x"></i></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">   <i class=" frecce_slider fas fa-arrow-right fa-2x"></i></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </header>

      <div class="container mt-5 " >
          <div class="row flex_card">
              <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div data-aos='flip-down' data-aos-duration='3000' class="card  card1 mx-auto1 z-index" style="width: 18rem;">
                    <img src="/persona1.png" class="card-img-top" alt="...">
                    <div class=" info card-body">
                      <h5 class="card-title">lorem picsum dolor sit amet,consecteuer</h5>
                      <p class="card-text bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin id quam finibus, scelerisque tortor sed, pulvinar nisi. Fusce nulla lorem, venenatis luctus purus eu, consequat congue turpis. Praesent rhoncus ex sed dolor malesuada tristique</p>
                    </div>
                  </div> 
              </div>
              <div data-aos='flip-down' data-aos-duration='3000' class="col-lg-4 col-md-6 col-sm-12">
                <div class="card  card1 mx-auto1" style="width: 18rem;">
                    <img src="/persona2.png" class="card-img-top" alt="...">
                    <div class=" info card-body">
                      <h5 class="card-title">lorem picsum dolor sit amet,consecteuer</h5>
                      <p class="card-text bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin id quam finibus, scelerisque tortor sed, pulvinar nisi. Fusce nulla lorem, venenatis luctus purus eu, consequat congue turpis. Praesent rhoncus ex sed dolor malesuada tristique</p>
                    </div>
                  </div> 
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div data-aos='flip-down' data-aos-duration='3000' class="card  card1 mx-auto2" style="width: 18rem;">
                    <img src="/persona3.png" class="card-img-top" alt="...">
                    <div class=" info card-body">
                      <h5 class="card-title">lorem picsum dolor sit amet,consecteuer</h5>
                      <p class="card-text bio"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam dictum iaculis fringilla. Proin id quam finibus, scelerisque tortor sed, pulvinar nisi. Fusce nulla lorem, venenatis luctus purus eu, consequat congue turpis. Praesent rhoncus ex sed dolor malesuada tristique </p>
                    </div>
                  </div> 
            </div>
          </div>
      </div>
      <div class="container-fluid onde assoluto">
          <div class="row">
              <h3 class="frase_onda">sed diam nonummy nibn <br> auismod ticidunt</h3> 
            </div> 
        </div>

        <div class="container-fluid unisci">
            <div class="row sfondo_nero ">
                <div class="flex_timeline">
                    <div class="timeline">
                      <!--   to create more timeline copy the code between these comments, remember to remove no-border class and info1 class
                      -->
                        <div class="circle-container">
                          <section class="tl no-border"></section>
                          <section class="tr no-border"></section>
                          <div class="flex">
                            <span id="tasto1" class="circle bg_azzurro"><img class="imgs" src="/bacchetta.png"></span>
                          </div>
                          <section class="bl"></section>
                          <section class="br"></section>
                        </div>
                        <section class="info no-border">
                         
                          <span  id="primo" class="comune"><h2 class="azzurro">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt delectus ab nam? Exercitationem aspernatur, alias sed vero esse officiis ipsum dicta aliquam, nemo quae odio velit facere pariatur.</span>
                          
                          
                        </section>
                        <section></section>
                        
                        <section></section>
                        <section class="info">
                          
                          <span  id="secondo" class="comune"><h2 class="giallo">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt delectus ab nam? Exercitationem aspernatur, alias sed vero esse officiis ipsum dicta aliquam, nemo quae odio velit facere pariatur.</span>
                        </section>
                        <div class="circle-container">
                          <section class="tl"></section>
                          <section class="tr"></section>
                          <div class="flex">
                            <span id="tasto2" class="circle bg_giallo"><img class="imgs" src="/campana.png"></span>
                          </div>
                          <section class="bl"></section>
                          <section class="br"></section>
                        </div>
                      <!--   end of code to copy  -->
                      
                        <div class="circle-container">
                          <section class="tl"></section>
                          <section class="tr"></section>
                          <div class="flex">
                            <span id="tasto3" class="circle bg_rosso"><img class="imgs" src="/lock.png"></span>
                          </div>
                          <section class="bl"></section>
                          <section class="br"></section>
                        </div>
                        <section class="info">
                         
                          <span  id="terzo" class="comune"><h2 class="rosso">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt delectus ab nam? Exercitationem aspernatur, alias sed vero esse officiis ipsum dicta aliquam, nemo quae odio velit facere pariatur.</span>
                        </section>
                        <section></section>
                        
                        <section></section>
                        <section class="info">
                          
                          <span  id="quarto" class="comune"><h2 class="azzurro">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt delectus ab nam? Exercitationem aspernatur, alias sed vero esse officiis ipsum dicta aliquam, nemo quae odio velit facere pariatur.</span>
                        </section>
                        <div class="circle-container">
                          <section class="tl"></section>
                          <section class="tr"></section>
                          <div class="flex">
                            <span id="tasto4" class="circle bg_azzurro"><img class="imgs" src="/pollice.png"></span>
                          </div>
                          <section class="bl"></section>
                          <section class="br"></section>
                         
                        </div>
                        <div class="circle-container">
                          <section class="tl"></section>
                          <section class="tr"></section>
                          <div class="flex">
                            <span  id="tasto5" class="circle bg_giallo"><img class="imgs" src="/attrezzi.png"></span>
                          </div>
                          <section class="bl"></section>
                          <section class="br"></section>
                        </div>
                        <section class="info">
                         
                          <span  data-aos-duration='3000' id="quinto" class="comune"><h2 class="giallo">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt delectus ab nam? Exercitationem aspernatur, alias sed vero esse officiis ipsum dicta aliquam, nemo quae odio velit facere pariatur.</span>
                        </section>
                        <section></section>
                        
                        <section></section>
                        <section class="info">
                        
                          <span  data-aos-duration='3000' id="sesto" class="comune"><h2 class="rosso">titolo</h2> ipsum, dolor sit amet consectetur adipisicing elit. Minus ea deserunt.</span>
                        </section>
                        <div class="circle-container">
                          <section class="tl"></section>
                          <section class="tr"></section>
                          <div class="flex">
                            <span id="tasto6" class="circle bg_rosso"><img class="imgs" src="/cuore.png"></span>
                          </div>
                          <section class="bl no-border"></section>
                          <section class="br no-border"></section>
                         
                        </div>
                     
                  </div>
              </div>
             
            </div>
   
        </div>
<div class="container-fluid relativo">
    <div class="row  ">
        <div class="col-12 onde_inferiore">

        </div>
        <h3 class="frase_onda1"> lorem ipsum dolor sit amet consecteur</h3>
        <div class="container-fluid  sfondo_finale ">
            <div class="container">
            <div class=" row flex_finale flex_finale1">
              
              <div class=" col-12 col-md-6 col-lg-4 su_card">
              <div data-aos='zoom-in-left' data-aos-duration='3000' class="card no in_comune
                 " style="width: 18rem;">
        
          <div class="card-body h_card bg_rosa_tab">
            <h5 class=" pb-4 card-title tab_rosa">tab rosa</h5>
            <img class=" mt-1 w-75 ml-4" src="/sveglia.png"> 
            <p class=" mt-4 card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="  mt-4 py-2  mx-auto cla_rosa" href="#" class="btn btn-primary">call to action</a>
          </div>
        </div>
                </div> 
                <div class=" col-12 col-md-6 col-lg-4 su_card">
              <div data-aos='zoom-in' data-aos-duration='3000' class="in_comune radius_card card" style="width: 18rem;">
        
          <div class="card-body h_card">
            <h5 class=" pb-4 card-title tab_gialla">tab gialla</h5>
            <img class="w-75 ml-4" src="/target.png">
            <p class=" mt-4 card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="  mt-4 py-2  mx-auto cla_gialla" href="#" class="btn btn-primary">call to action</a>
          </div>
        </div>
                </div> 
                <div class=" col-12 col-md-6 col-lg-4 su_card
    su_card">
              <div data-aos='zoom-in-right' data-aos-duration='3000' class="in_comune1 radius_card card" style="width: 18rem;">
        
          <div class="card-body h_card ">
            <h5 class=" pb-4 card-title tab_turchese">tab turchese</h5>
            <img class="w-75 ml-4 mt-3" src="/razzo.png">
            <p class=" mt-4 card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a class="  mt-4 py-2  mx-auto cla_turchese" href="#" class="btn btn-primary">call to action</a>
          </div>
        </div>
                </div> 
            </div>
        </div>
        
    </div>
    </div>

  
</div>
 <footer class="p_custom" >
     <img class="logo_footer" src="logotel.png">
     <p class="mt-2">Term & conditions | Privacy policy | cookies policy | Copyrights Notifications </p>
     <p class="mt-2"> Copyrights @ 2020 Logotel.All rights reserved.</p>
<div class="icons p_custom1">
    <h5 class="pb-2">seguici sui social:</h5>
     <div class='d-flex'>
         <img  class="icona_singola mr-2" src="fb.png">
         <img class="icona_singola mr-2"  src="ig.png">
         <img class="icona_singola mr-2"  src="li.png">
         <img class="icona_singola mr-2"  src="tw.png">
         <img class="icona_singola mr-2"  src="yt.png">  
     </div>
</div>

</footer>


 

     
              
          


     



    


      






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2858d9691e.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
   
   let navbar=document.querySelector('#navbar')


document.addEventListener('scroll', () => {


	if (window.scrollY > 250) {
		navbar.classList.add("navbarDesktop")
        navbar.classList.add("altezza_navbar")
	}

	else {
        navbar.classList.remove("navbarDesktop")
        navbar.classList.remove("altezza_navbar")
	}
})
document.querySelectorAll('.bio').forEach(e =>{
    if (e.innerHTML.split(" ").length > 30) {

        let string = e.innerHTML.split(" ").slice(0,11);
        e.innerHTML = string.join(" ") + ' [...]';
    }
})

let tasto1=document.querySelector('#tasto1')
/* let tasto2=document.querySelector('#tasto2')
let tasto3=document.querySelector('#tasto3')
let tasto4=document.querySelector('#tasto4')
let tasto5=document.querySelector('#tasto5')
let tasto5=document.querySelector('#tasto5') */


let primo=document.querySelector('#primo')
let secondo=document.querySelector('#secondo')
let terzo=document.querySelector('#terzo')
let quarto=document.querySelector('#quarto')
let quinto=document.querySelector('#quinto')
let sesto=document.querySelector('#sesto')

tasto1.addEventListener('click',function(){
    primo.classList.toggle('mostra')
})
tasto2.addEventListener('click',function(){
    secondo.classList.toggle('mostra')
})
tasto3.addEventListener('click',function(){
    terzo.classList.toggle('mostra')
})
tasto4.addEventListener('click',function(){
    quarto.classList.toggle('mostra')
})
tasto5.addEventListener('click',function(){
    quinto.classList.toggle('mostra')
})
tasto6.addEventListener('click',function(){
    sesto.classList.toggle('mostra')
})



</script>
</body>
</html>