<!DOCTYPE html>
<html lang="en-US">
   <head>
      <?php include 'inc/_head.php'; ?>
   </head>
   <body>
      <?php include 'inc/header.php'; ?>
      <!-- Breadcrumb Area Start -->
      <section class="filmoja-breadcrumb-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="breadcrumb-box">
                     <h2>Movie Grid Sidebar</h2>
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active-breadcromb">movie list</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Breadcrumb Area End -->
       
       
      <!-- Movie List Area Start -->
      <section class="filmoja-movie-list-area section_70">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="list-sidebar">
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">release date:</h3>
                        <input type="text" id="releasedate" placeholder="Select Date">
                     </div>
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">by Genres:</h3>
                        <ul>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Freelance" />
                              <label for="Freelance"><span></span>Action</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Full_Time" />
                              <label for="Full_Time"><span></span>Commedy</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Internship" />
                              <label for="Internship"><span></span>Sci-fi</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Part_Time" />
                              <label for="Part_Time"><span></span>Adventure</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Temporary" />
                              <label for="Temporary"><span></span>Historical</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Crime" />
                              <label for="Crime"><span></span>Crime</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="Drama" />
                              <label for="Drama"><span></span>Drama</label>
                           </li>
                           <li class="checkbox">
                              <input class="checkbox-spin" type="checkbox" id="animation" />
                              <label for="animation"><span></span>animation</label>
                           </li>
                        </ul>
                     </div>
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">coming soon:</h3>
                        <div class="coming-soon-slider owl-carousel">
                           <div class="single-comingsoon-slider">
                              <div class="comingsoon-img">
                                 <img src="assets/img/news-1.jpeg" alt="slider" />
                              </div>
                              <div class="comingsoon-text">
                                 <h4>into the wild</h4>
                                 <p>Release on: <span>20 dec,2018</span></p>
                              </div>
                           </div>
                           <div class="single-comingsoon-slider">
                              <div class="comingsoon-img">
                                 <img src="assets/img/news-2.jpeg" alt="slider" />
                              </div>
                              <div class="comingsoon-text">
                                 <h4>blade runner </h4>
                                 <p>Release on: <span>20 dec,2018</span></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Single Widget End -->
                      
                     <!-- Single Widget Start -->
                     <div class="single-sidebar-widget">
                        <h3 class="sidebar-widget-title">top movies:</h3>
                        <div class="top-movie-list">
                           <div class="sidebar-top-movie tablet-view">
                              <div class="sidebar-top-movie-left">
                                 <a href="#">
                                 <img src="assets/img/top_1.jpeg" alt="top movie" />
                                 </a>
                              </div>
                              <div class="sidebar-top-movie-right">
                                 <h3><a href="#">Busting Car</a></h3>
                                 <p>Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <h4 class="director">Movie Director - <span>Jhon Doe</span></h4>
                                 <div class="top-action">
                                    <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Single Widget End -->
                      
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="browse-option-box margin-top">
                     <div class="total-item-show">
                        <p>Found 732 movies in total</p>
                     </div>
                     <div class="total-item-show sorter">
                        <p>Sort by:</p>
                        <select>
                           <option value="popularity">Descending</option>
                           <option value="popularity">Ascending</option>
                           <option value="rating">Rating</option>
                           <option value="date">Release date</option>
                        </select>
                     </div>
                  </div>
                  <div class="movie-grid-box">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-1.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">Blood Day war</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-2.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">racing field</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                     </div>
                     <!-- End Row -->
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-3.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">runnig shoot</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-4.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">Mr. Cartoon</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                     </div>
                     <!-- End Row -->
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-5.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">Dareing Joker</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                        <div class="col-lg-6">
                           <div class="single-movie-list movie-grid-layout">
                              <div class="single-movie-list-left">
                                 <a href="#">
                                 <img src="assets/img/movie-list-3.jpeg" alt="top movie">
                                 </a>
                              </div>
                              <div class="single-movie-list-right">
                                 <h3><a href="#">runnig shoot</a></h3>
                                 <p class="list-genre">Acation</p>
                                 <ul>
                                    <li class="rating"><i class="fa fa-star"></i>4.5</li>
                                    <li class="dsc">HD</li>
                                    <li class="dsc">16+</li>
                                 </ul>
                                 <div class="movie-details-thumbs">
                                    <ul>
                                       <li>
                                          <a href="#"><i class="fa fa-thumbs-up"></i>
                                          256</a>
                                       </li>
                                       <li>
                                          <a href="#"><i class="fa fa-eye"></i>45</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="movie-list-info">
                                    <div class="list-info-left">
                                       <p>Director: <span>Jhon Doe</span></p>
                                       <p>Release: <span>12 Dec,2017</span></p>
                                    </div>
                                    <div class="top-action">
                                       <a href="https://www.youtube.com/watch?v=1Q8fG0TtVAY" class="popup-youtube"><i class="fa fa-play"></i> Watch Trailer</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- End Col -->
                     </div>
                     <!-- End Row -->
                  </div>
                  <!-- Pagination Start -->
                  <div class="pagination-box-row responsive-pag margin-top">
                     <p>Page 1 of 6</p>
                     <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li>...</li>
                        <li><a href="#">6</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                     </ul>
                  </div>
                  <!-- Pagination End -->
               </div>
            </div>
         </div>
      </section>
      <!-- Movie List Area End -->
       
       
      <?php include 'inc/footer.php'; ?>
   </body>
</html>

