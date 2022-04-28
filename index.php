<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tweet Académie - accueil</title>
    <!-- ICONSCOUT CDN -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css"
    />
    <link rel="stylesheet" href="./style/style.css" />
    <!-- STYLESHEET -->
    <link rel="stylesheet" href="./style/fontello.css" />
  </head>
  <body>
    <!------------- START OF NAV ------------->
    <nav>
      <div class="container">
       <a style="text-decoration: none" href="./index.php"><h2 class="logo">Tweet Académie</h2></a> 
        <div class="search-bar">
          <i class="uil uil-search"></i>
          <input
            type="search"
            placeholder="Rechercher sur Tweet Académie"
          />
        </div>
        <div class="create">
          <label class="btn btn-primary" for="create-post">Create</label>
          <div class="profile-photo">
            <img src="./images/pp.png" />
          </div>
        </div>
      </div>
    </nav>
    <!------------- END OF NAV ------------->

    <!------------- START OF MAIN ------------->
    <main>
      <!------------- START OF CONTAINER ------------->
      <div class="container">
        <!------------- START OF LEFT ------------->
        <div class="left">
          <a class="profile">
            <div class="profile-photo">
              <img src="./images/pp.png" />
            </div>
            <div class="handle">
              <h4>Med Mboup</h4>
              <p class="text-muted">Developer</p>
            </div>
          </a>

          <!------------- START OF SIDEBAR ------------->
          <div class="sidebar">
            <a class="menu-item active">
              <span><i class="uil uil-home"></i></span>
              <h3>Accueil</h3>
            </a>
            <a class="menu-item">
              <span><i class="uil uil-compass"></i></span>
              <h3>Explorer</h3>
            </a>
            <a class="menu-item" id="notifications">
              <span
                ><i class="uil uil-bell"
                  ><small class="notifications-count">9+</small></i
                ></span
              >
              <h3>Notifications</h3>
              <!------------- START OF NOTIFiCATIONS POPUP ------------->
              <div class="notifications-popup">
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div> 
                  <div class="notification-body">
                    <b>Adlan Isaev</b> a aimé votre publication.
                    <small class="text-muted">à l'instant</small>
                  </div>
                </div>
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div class="notification-body">
                    <b>Smain Benai</b> a aimé votre publication.
                    <small class="text-muted">Il y a 30 minutes</small>
                  </div>
                </div>
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div class="notification-body">
                    <b>Roddy Ricch</b> a accepté votre demande d'ami.
                    <small class="text-muted">Il y a 4 heures</small>
                  </div>
                </div>
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div class="notification-body">
                    <b>Rihanna </b> vous a mentionné dans un commentaire.
                    <small class="text-muted">Il y a 15 heures</small>
                  </div>
                </div>
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div class="notification-body">
                    <b>Travis Scott</b> a répondu a votre commentaire.
                    <small class="text-muted">Il y a 1 jour</small>
                  </div>
                </div>
                <div>
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div class="notification-body">
                    <b>Lebron James</b> a répondu à votre commentaire.
                    <small class="text-muted">Il y a 2 jours</small>
                  </div>
                </div>
              </div>
              <!------------- END OF NOTIFiCATIONS POPUP ------------->
            </a>
            <a class="menu-item" id="messages-notification">
              <span
                ><i class="uil uil-envelope-alt">
                  <small class="notifications-count">6</small></i
                ></span
              >
              <h3>Messages</h3>
            </a>
            <a class="menu-item">
              <span><i class="uil uil-bookmark"></i></span>
              <h3>Signets</h3>
            </a>
            <a class="menu-item">
              <span><i class="uil uil-user-circle"></i></span>
              <h3>Profile</h3>
            </a>
            <a class="menu-item" id="theme">
              <span><i class="uil uil-palette"></i></span>
              <h3>Thème</h3>
            </a>
            <a class="menu-item">
              <span><i class="uil uil-setting"></i></span>
              <h3>Paramètres</h3>
            </a>
          </div>
          <!------------- END OF SIDEBAR ------------->
          <label class="btn btn-primary" for="create-post">Create Post</label>
        </div>
        <!------------- END OF LEFT ------------->

        <!------------- START OF MIDDLE ------------->
        <div class="middle">
          <form class="create-post">
            <div class="profile-photo">
              <img src="./images/pp.png" />
            </div>
            <input
              type="text"
              placeholder="Quoi de neuf ?"
              id="create-post"
            />
          </form>

          <!------------- START OF FEEDS ------------->
          <div class="feeds">
            <!------------- START OF FEED ------------->
            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Emmanuel Macron</h3>
                    <small>Paris, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Emmanuel_Macron_(cropped).jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>
            <!------------- END OF FEED ------------->

            <!------------- START OF FEED ------------->


            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Emmanuel Macron</h3>
                    <small>Paris, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Emmanuel_Macron_(cropped).jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>

            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Emmanuel Macron</h3>
                    <small>Paris, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Emmanuel_Macron_(cropped).jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>


            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Emmanuel Macron</h3>
                    <small>Paris, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Emmanuel_Macron_(cropped).jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>

            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Megan Thee Stallion</h3>
                    <small>Texas, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Megan-Thee-Stallion-Netflix-Visu-News.jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>
            <!------------- END OF FEED ------------->

            <div class="feed">
              <div class="head">
                <div class="user">
                  <div class="profile-photo">
                    <img src="./images/Travis-Scott-2.jpg" />
                  </div>
                  <div class="ingo">
                    <h3>Travis Scott</h3>
                    <small>Texas, il y a 15 minutes</small>
                  </div>
                </div>
                <span class="edit">
                  <i class="uil uil-ellipsis-h"></i>
                </span>
              </div>

              <div class="photo">
                <div class="overlay">
                  <i class="icon-heart"></i>
                </div>
                <img src="./images/Travis-Scott-2.jpg" />
              </div>

              <div class="action-buttons">
                <div class="interaction-buttons">
                  <span><i class="uil uil-comment"></i></span>
                  <span><i class="uil uil-heart"></i></span>
                  <span><i class="uil uil-share-alt"></i></span>
                </div>

                <div class="bookmark">
                  <span><i class="uil uil-upload"></i></span>
                </div>
              </div>

              <div class="liked-by">
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <span><img src="./images/profile-12.jpg" /></span>
                <p>Aimé par <b>Ariana Grande</b> et <b>2 323 autres</b></p>
              </div>

              <div class="caption">
                <p>
                  <b>Angele</b> Lorem ipsum dolor sit amet consectetur.
                  <span class="harsh-tag">#resurrection_ertuğrul</span>
                </p>
              </div>
              <div class="comments text-muted">Afficher tous les commentaires</div>
            </div>           
            <!------------- END OF FEED ------------->
          </div>
          <!------------- END OF FEEDS ------------->
        </div>
        <!------------- END OF MIDDLE ------------->

        <!------------- START OF RIGHT ------------->
        <div class="right">
          <!------------- START OF MESSAGES ------------->
          <div class="messages">
            <div class="heading">
              <h4>Messages</h4>
              <a href="./messages/utilisateurs.php"><i class="uil uil-edit"></i></a>
            </div>

            <!------------- START OF SEARCH BAR ------------->
            <div class="search-bar">
              <i class="uil uil-search"></i>
              <input
                type="search"
                placeholder="Search messages"
                id="message-search"
              />
            </div>
            <!------------- END OF SEARCH BAR ------------->

            <!------------- START OF MESSAGES CATEGORY ------------->
            <div class="category">
              <h6 class="active">Primaire</h6>
              <h6>Général</h6>
              <h6 class="message-requests">Demandes(<span>5</span>)</h6>
            </div>
            <!------------- END OF MESSAGES CATEGORY ------------->

            <div>
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/pp.png" />
                  <div class="active"></div>
                </div>
                <div class="message-body">
                  <h5>Kanye West</h5>
                  <p class="text-muted">Just woke up bruh</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/profile-12.jpg" />
                </div>
                <div class="message-body">
                  <h5>Snoop Dogg</h5>
                  <p class="text-bold">Received bruh, Thanks</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/pp.png" />
                </div>
                <div class="message-body">
                  <h5>Dababy</h5>
                  <p class="text-bold">ok</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/profile-12.jpg" />
                  <div class="active"></div>
                </div>
                <div class="message-body">
                  <h5>Lil Wayne</h5>
                  <p class="text-bold">2 new messages</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/pp.png" />
                </div>
                <div class="message-body">
                  <h5>Lil Durk</h5>
                  <p class="text-muted">lol u right</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/profile-12.jpg" />
                  <div class="active"></div>
                </div>
                <div class="message-body">
                  <h5>Kendrick Lamar</h5>
                  <p class="text-bold">Birthday Tomorrow!</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/pp.png" />
                  <div class="active"></div>
                </div>
                <div class="message-body">
                  <h5>Dr Dre</h5>
                  <p class="text-bold">Birthday Tomorrow!</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
              <!------------- START OF MESSAGE ------------->
              <div class="message">
                <div class="profile-photo">
                  <img src="./images/pp.png" />
                  <div class="active"></div>
                </div>
                <div class="message-body">
                  <h5>Nba Youngboy</h5>
                  <p class="text-bold">Birthday Tomorrow!</p>
                </div>
              </div>
              <!------------- END OF MESSAGE ------------->
            </div>
          </div>
          <!-------------  END OF MESSAGES ------------->

          <!------------- START OF FRIEND REQUESTS ------------->
          <div class="friend-requests">
            <h4>Requests</h4>
            <div>
              <!------------- START OF REQUEST ------------->
              <div class="request">
                <div class="info">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div>
                    <h5>Lil Baby</h5>
                    <p class="text-muted">27 amis en commun</p>
                  </div>
                </div>
                <div class="action">
                  <button class="btn btn-primary accept">Accepter</button>
                  <button class="btn decline">Refuser</button>
                </div>
              </div>
              <!------------- END OF  REQUEST ------------->
              <!------------- START OF REQUEST ------------->
              <div class="request">
                <div class="info">
                  <div class="profile-photo">
                    <img src="./images/pp.png" />
                  </div>
                  <div>
                    <h5>Lebron James</h5>
                    <p class="text-muted">45 amis en commun</p>
                  </div>
                </div>
                <div class="action">
                  <button class="btn btn-primary accept">Accepter</button>
                  <button class="btn decline">Refuser</button>
                </div>
              </div>
              <!------------- END OF  REQUEST ------------->
              <!------------- START OF REQUEST ------------->
              <div class="request">
                <div class="info">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div>
                    <h5>Pop Smoke</h5>
                    <p class="text-muted">159 amis en commun</p>
                  </div>
                </div>
                <div class="action">
                  <button class="btn btn-primary accept">Accepter</button>
                  <button class="btn decline">Refuser</button>
                </div>
              </div>
              <!------------- END OF  REQUEST ------------->
              <!------------- START OF REQUEST ------------->
              <div class="request">
                <div class="info">
                  <div class="profile-photo">
                    <img src="images/profile-23.jpg" />
                  </div>
                  <div>
                    <h5>Lil Tjay</h5>
                    <p class="text-muted">110 amis en commun</p>
                  </div>
                </div>
                <div class="action">
                  <button class="btn btn-primary accept">Accepter</button>
                  <button class="btn decline">Refuser</button>
                </div>
              </div>
              <!------------- END OF  REQUEST ------------->
              <!------------- START OF REQUEST ------------->
              <div class="request">
                <div class="info">
                  <div class="profile-photo">
                    <img src="./images/profile-12.jpg" />
                  </div>
                  <div>
                    <h5>Drake</h5>
                    <p class="text-muted">39 amis en commun</p>
                  </div>
                </div>
                <div class="action">
                  <button class="btn btn-primary accept">Accepter</button>
                  <button class="btn decline">Refuser</button>
                </div>
              </div>
              <!------------- END OF  REQUEST ------------->
            </div>
          </div>
          <!------------- END OF FRIEND REQUESTS ------------->
        </div>
        <!------------- END OF RIGHT ------------->
      </div>
      <!------------- END OF CONTAINER ------------->
    </main>
    <!------------- END OF MAIN ------------->

    <!--------------------------------------- START THEME CUSTOMIZTION --------------------------------------->
    <div class="customize-theme">
      <div class="card">
        <h2>Personnaliser votre page</h2>
        <p class="text-muted">Gérez la taille, la couleur et l'arrière-plan de votre police.</p>

        <!------------- START OF FONT SIZE ------------->
        <div class="font-size">
          <h4>Choisir la taille de la police</h4>
          <div>
            <h6>Aa</h6>
            <div class="choose-size">
              <span class="font-size-1" data-size="10px"></span>
              <span class="font-size-2" data-size="13px"></span>
              <span class="font-size-3 active" data-size="16px"></span>
              <span class="font-size-4" data-size="19px"></span>
              <span class="font-size-5" data-size="22px"></span>
            </div>
            <h3>Aa</h3>
          </div>
        </div>
        <!------------- END OF FONT SIZE ------------->

        <!------------- START OF PRIMARY COLORS ------------->
        <div class="color">
          <h4>Choose Color</h4>
          <div class="choose-color">
            <span class="color-1 active" data-color="252"></span>
            <span class="color-2" data-color="52"></span>
            <span class="color-3" data-color="352"></span>
            <span class="color-4" data-color="152"></span>
            <span class="color-5" data-color="202"></span>
          </div>
        </div>
        <!------------- END OF PRIMARY COLORS ------------->

        <!------------- START OF BACKGROUND COLORS ------------->
        <div class="background">
          <h4>Choose Background</h4>
          <div class="choose-bg">
            <div
              class="bg-1 active"
              data-white-bg="100%"
              data-light-bg="95%"
              data-dark-bg="17%"
            >
              <span>
                <i class="uil uil-check"></i>
              </span>
              <h5 for="bg-1">Clair</h5>
            </div>
            <div
              class="bg-2"
              data-white-bg="20%"
              data-light-bg="15%"
              data-dark-bg="95%"
            >
              <span>
                <i class="uil uil-check"></i>
              </span>
              <h5 for="bg-2">Dim</h5>
            </div>
            <div
              class="bg-3"
              data-white-bg="10%"
              data-light-bg="0%"
              data-dark-bg="95%"
            >
              <span>
                <i class="uil uil-check"></i>
              </span>
              <h5 for="bg-3">Lights Out</h5>
            </div>
          </div>
        </div>
        <!------------- END OF BACKGROUND COLORS ------------->
      </div>
    </div>
    <!--------------------------------------- END THEME CUSTOMIZTION --------------------------------------->

    <!--------------------------------------- START CREATE POSTS --------------------------------------->
    <div class="create-posts">
      <div class="card">
        <div class="head">
          <h2>Create Post</h2>
          <i class="uil uil-times"></i>
        </div>
        <div class="profile">
          <div class="profile-photo">
            <img src="images/profile-1.jpg" />
          </div>
          <div class="handle">
            <h4>Mahmoud Ramadan</h4>
            <select>
              <option value="public">Public</option>
              <option value="friends">Friends</option>
            </select>
          </div>
        </div>
        <form>
          <textarea placeholder="What`s on your mind, mahmoud"></textarea>
          <div class="file-test"></div>
          <input type="file" accept="image/*, video/*" />
          <div class="add-files">
            <i class="uil uil-image-plus"></i>
            <span class="text-bold">Add photos/videos</span>
          </div>
          <input type="submit" class="btn btn-primary" value="Post" />
        </form>
      </div>
    </div>
    <!--------------------------------------- END CREATE POSTS --------------------------------------->

    <!--------------------------------------- START CREATE POSTS --------------------------------------->
    <div class="create-stories">
      <div class="card">
        <div class="head">
          <h2>Create Story</h2>
          <i class="uil uil-times"></i>
        </div>
        <div class="profile">
          <div class="profile-photo">
            <img src="images/profile-1.jpg" />
          </div>
          <div class="handle">
            <h4>Mahmoud Ramadan</h4>
          </div>
        </div>
        <form>
          <div class="file-test"></div>
          <input type="file" accept="image/*, video/*" />
          <div class="add-files">
            <i class="uil uil-image-plus"></i>
            <span class="text-bold">Create a photo story</span>
          </div>
          <input type="submit" class="btn btn-primary" value="Share to Story" />
        </form>
      </div>
    </div>
    <!--------------------------------------- END CREATE POSTS --------------------------------------->
    <script src="js/main.js"></script>
  </body>
</html>