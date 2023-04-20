<?php
$tyu=$this->Category_model->get_category($b['categ']);

 if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
?>
<div class="blog-details-area pt-100 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="blog-details-content pr-20">
          <div class="blog-preview-img">
	
            <img src="<?=site_url().'uploads/blogs/'.$blogs['image'];?>" alt="Blog">
          </div>
          <ul class="tag-list">
            <li>
              <i class="ri-calendar-todo-fill"></i><?php echo date('M d , y', strtotime($blogs['bdate']));?> 
            </li>
            <li>
              <i class="ri-price-tag-3-fill"></i>
              <a href="#"><?=$tyu['category'];?></a>
            </li>
          </ul>
          <h2><?=$blogs['title'];?></h2>
          <p><?=$blogs['description'];?></p>
          <div class="article-share">
            <div class="row align-items-center">
              <div class="col-lg-6 col-md-6">
                <div class="article-tag">
                  <ul>
                    <li class="title">
                      <i class="ri-price-tag-3-fill"></i>
                    </li>
                    <li>
                      <a href="#" target="_blank"><?=$tyu['category'];?></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="article-social-icon">
                  <ul class="social-icon">
                    <li class="title">Share :</li>
                    <li>
                                        <a href="http://www.facebook.com/sharer.php?u=<?=$url;?>" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com/share?url=<?=$url;?>&text=<?=$courses['title'];?>&hashtags=gatewaytofpga" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?=$url;?>" target="_blank">
                                            <i class="ri-linkedin-line"></i>
                                        </a>
                                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div>
     <!-- <div class="col-lg-4">
        <div class="side-bar-area">
          <div class="side-bar-widget">
            <form class="search-form">
              <input type="search" class="form-control" placeholder="Search...">
              <button type="submit">
                <i class="ri-search-line"></i>
              </button>
            </form>
          </div>
          <div class="side-bar-widget">
            <h3 class="title">Categories</h3>
            <div class="side-bar-categories">
              <ul>
                <li>
                  <a href="categories.html" target="_blank"> Education </a>
                </li>
                <li>
                  <a href="categories.html" target="_blank"> Business </a>
                </li>
                <li>
                  <a href="categories.html" target="_blank"> Human resources </a>
                </li>
                <li>
                  <a href="categories.html" target="_blank"> Investment </a>
                </li>
                <li>
                  <a href="categories.html" target="_blank"> Lifestyle </a>
                </li>
                <li>
                  <a href="categories.html" target="_blank"> Mangement </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="side-bar-widget">
            <h3 class="title">Popular post</h3>
            <div class="widget-popular-post">
              <article class="item">
                <a href="blog-details.html" class="thumb">
                  <span class="full-image cover bg1" role="img"></span>
                </a>
                <div class="info">
                  <p>12 Jan, 2022</p>
                  <h4 class="title-text">
                    <a href="blog-details.html"> All that is wrong codding in the field of apprentices </a>
                  </h4>
                </div>
              </article>
              <article class="item">
                <a href="blog-details.html" class="thumb">
                  <span class="full-image cover bg2" role="img"></span>
                </a>
                <div class="info">
                  <p>14 Jan, 2022</p>
                  <h4 class="title-text">
                    <a href="blog-details.html"> How to use technology to adapt your talent to the world </a>
                  </h4>
                </div>
              </article>
              <article class="item">
                <a href="blog-details.html" class="thumb">
                  <span class="full-image cover bg3" role="img"></span>
                </a>
                <div class="info">
                  <p>16 Jan, 2022</p>
                  <h4 class="title-text">
                    <a href="blog-details.html"> Here are the things to look for when selecting an online courses </a>
                  </h4>
                </div>
              </article>
            </div>
          </div>
          <div class="side-bar-widget">
            <h3 class="title">Tags</h3>
            <ul class="side-bar-widget-tag">
              <li>
                <a href="tags.html" target="_blank"> Education</a>
              </li>
              <li>
                <a href="tags.html" target="_blank">Investment</a>
              </li>
              <li>
                <a href="tags.html" target="_blank">Lifestyle</a>
              </li>
              <li>
                <a href="tags.html" target="_blank">Business</a>
              </li>
              <li>
                <a href="tags.html" target="_blank">Mangement</a>
              </li>
              <li>
                <a href="tags.html" target="_blank">Human</a>
              </li>
            </ul>
          </div>
        </div>
      </div>-->
    </div>
  </div>
</div>