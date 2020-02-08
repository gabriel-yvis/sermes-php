<?php
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include 'inc/_head.php'; ?>
   </head>
   <body>
      <?php include 'inc/header.php'; ?>
      <section class="filmoja-slider-area fix">
         <div class="filmoja-slide">
            <div class="filmoja-main-slide slide-item-5">
               <div class="filmoja-main-caption">
                  <div class="filmoja-caption-cell">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="slider-content-holder">
                                 <div class="slider-text">
                                    <h4>Recomendação Principal</h4>
                                    <h2>Título da mídia <br> recomendada</h2>
                                    <p class="release-slider">Informação extra</p>
                                 </div>
                                 <div class="slider-play">
                                    <a class="popup-youtube" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                                    <i class="fa fa-play"></i> Conferir
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section id="movie-list" class="filmoja-top-movies-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="filmoja-heading">
                     <h2>Principais<span> Filmes</span></h2>
                  </div>
               </div>
            </div>
            <div class="row"></div>
         </div>
      </section>
      <section id="recomendacao" class="filmoja-theater-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="theater-left">
                     <div class="theater-box">
                        <div class="theater-text">
                           <h3>Recomendação de mídia</h3>
                           <h4>Título da mídia</h4>
                           <p>Breve descrição sobre a mídia recomendada nessa seção.</p>
                           <a href="#" class="filmoja-btn">Conferir</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="theater-slider slider-for">
                     <div class="single-theater">
                        <img src="assets/img/theater.jpeg" alt="theater thumb" />
                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY">
                        <i class="fa fa-play"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="filmoja-tv-movies-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="filmoja-heading">
                     <h2>Outras <span>mídias</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="tv-panel-list">
                     <div class="tv-tab">
                        <ul class="nav nav-pills tv-tab-switch" id="pills-tab" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" id="pills-popular-tab" data-toggle="pill" href="#pills-popular" role="tab" aria-controls="pills-popular" aria-selected="true">Filmes</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-upcoming-tab" data-toggle="pill" href="#pills-upcoming" role="tab" aria-controls="pills-upcoming" aria-selected="false">Séries</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-viewed-tab" data-toggle="pill" href="#pills-viewed" role="tab" aria-controls="pills-viewed" aria-selected="false">Cartoons</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" id="pills-rated-tab" data-toggle="pill" href="#pills-rated" role="tab" aria-controls="pills-rated" aria-selected="false">Animes</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                           <div class="tab-movies">
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-4.jpg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Blood Day war</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-5.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">mr.cartoon</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
                           <div class="tab-movies">
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-4.jpg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Blood Day war</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-5.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">mr.cartoon</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                           </div>
                        </div>
                        <div class="tab-pane fade show " id="pills-viewed" role="tabpanel" aria-labelledby="pills-viewed-tab">
                           <div class="tab-movies">
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-4.jpg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Blood Day war</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-5.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">mr.cartoon</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                           </div>
                        </div>
                        <div class="tab-pane fade" id="pills-rated" role="tabpanel" aria-labelledby="pills-rated-tab">
                           <div class="tab-movies">
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                              <div class="row">
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-5.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">mr. cartoon</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-3.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">runnig shoot</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-1.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">Dareing Joker</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-3 col-sm-6">
                                    <div class="single-top-movie">
                                       <div class="top-movie-wrap">
                                          <div class="top-movie-img">
                                             <a href="#">
                                             <img src="assets/img/top-slider-2.jpeg" alt="top movies" />
                                             </a>
                                          </div>
                                          <div class="thumb-hover">
                                             <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                                             <div class="thumb-date">
                                                <span>05:30</span>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="top-movie-details">
                                          <h4><a href="#">racing field</a></h4>
                                          <div class="movie-details-thumbs">
                                             <ul>
                                                <li>
                                                   <a href="#"><i class="fa fa-thumbs-up"></i>
                                                   256</a>
                                                </li>
                                                <li>
                                                   <a href="#"><i class="fa fa-eye"></i>45</a>
                                                </li>
                                                <li>
                                                   <a href="#"><span class="rating"><i class="fa fa-star"></i>4.5</span></a>
                                                </li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End Row -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php include 'inc/footer.php'; ?>
      <script>
         let element = `
            <div class="col-12 col-md-3">
               <div class="single-top-movie">
                  <div class="top-movie-wrap">
                     <div class="top-movie-img">
                        <a href="#"> <img src="assets/img/top-slider-1.jpeg" alt="top movies" /> </a>
                     </div>
                     <div class="thumb-hover">
                        <a class="play-video" href="https://www.youtube.com/watch?v=1Q8fG0TtVAY"><i class="fa fa-play"></i></a>
                        <div class="thumb-date"> <span>05:30</span> </div>
                     </div>
                  </div>
                  <div class="top-movie-details">
                     <h4><a href="#">Titulo do filme</a></h4>
                     <div class="movie-details-thumbs">
                        <ul>
                           <li><i class="fa fa-calendar"></i> 2000</li>
                           <li><i class="fa fa-clock"></i>120</li>
                           <li><span class="rating"><i class="fa fa-star"></i>4.5</span></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>`;
         let lista = document.querySelector('#movie-list .row:nth-child(2)');
         lista.innerHTML = element+element+element+element;
      </script>
   </body>
</html>