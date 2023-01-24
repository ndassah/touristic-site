  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <title>Forum</title>
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>

      .otherConnexion{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        align-items: center;
        column-gap: 1.6rem;
      }

      .otherConnexion::before, .otherConnexion::after{
        content: "";
        height: 1px;
        background-color: grey;
        display: block;
      }

      .date{
        font-size: .9em;
      }
.modalClass{
    background-color: black;
    color: white;
}

.ellips{
  transform: translateY(-180%);
}

.publiComments{
  display: flex;
}

.publication{
    font-size: .8em;
    opacity: .9;
}

.navbar{
  background-color: #02013d;
  color: var(--bs-light);
}

.nav-link{
  color: var(--bs-light);
}

.navbar-bra{
  text-decoration: none;
  color: var(--bs-light);
}

.link-profile{
  text-decoration: none;
}

.link-title{
  text-decoration: none;
  color: black;
}

.link-title:hover{
  color: black;
}

a.link-acceuil{
  text-decoration: none;
  color: (2, 1, 61);
}

h4{
  font-size: 25px;
  padding: 4px 0px 0px;
  margin: 0px;
}

.sticky{
  position: sticky;
  top: 0px;
}

.posi{
  display: flex;
  justify-content: center;
  align-items: center;
}

.adminAcceuil{
  text-decoration: none;
}

.no-gutter{
  padding-right: 0;
  padding-left: 0;
  margin-right: 0;
  margin-left: 0;
}

/* design By Tiani */
.sect1{
  background:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('img1.jpg');
  background-repeat:no-repeat;
  background-position:center;
  background-size:cover;
  text-align:center;
  height:25rem;
  color:var(--bs-light);
  z-index:1;
}
.sect1 .cont{
  position:relative;
  top:8rem;
}
 .form{
  z-index: 100;
 
}
.container .flori form{
  background: rgb(0,5,60);
  padding: 20px 0px;
  width:90%;
  position: absolute;
  left:5%;
  top:410px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.container .flori form .row{
  color: #eee;
}
.re{
  margin-top:1.5rem;
}
/*.form .int input, select{
  width: 110%;
 border-radius: 6px;
 border:none;
 margin-top:5px;

}*/
/*Destination CSS*/
#sect2{
    padding: 5rem 10% ;
    z-index: 1;
    background: linear-gradient(rgba(0,5,60,0.5),rgba(0,5,60,0.5));
}
.title {
    text-transform: capitalize;
    margin: 70px 0;
    font-weight: bold;
    color: #rgb(0,5,60);
    position: relative;
    margin-left:5px;
    font-size: 28px;

}
.title::after {
    position: absolute;
    left: -15px;
    content: "";
    height: 100%;
    background-color: #fff;
    width: 5px;
}
#sect2 .content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
    gap: 32px;
}
#sect2 .content .box {
    overflow: hidden;
    position: relative;
    height: 250px;
    transition: 0.5s;
}
#sect2 .content .box img {
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.box .content {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(255,255,255,0.6);
    text-align: center;
    align-items: center;
    transform: translateY(100%);
    transition: 0.5s;
}
.box .content  h4 {
    font-size: 25px;
    margin-bottom: 10px;
}
.box .content p {
    padding: 2px;
    font-size: 12px;
}
.box .content p:nth-child(3){
    margin-bottom: 25px;
}
.box .content a {
    margin-top: 60px;
    padding: 5px 60px;
    border: 2px solid rgb(0,5,60);
    color: rgb(0,5,60);
    font-weight: bold;
}
.box:hover {
    box-shadow: 0 0 10px rgb(0,5,60);
}
.box:hover .content {
    transform: translateY(0);
}
/*Resultats de la recherche CSS*/
.result{
  background: #eee;
  text-align:center;
  height:100vh;
  display: none;
  visibility: hidden;
}
.result .lan{
  width:80%;
  height: 7rem;
  /*box-shadow: 0 0 10px #fff;*/
  position: absolute;
  left:10%;
  background:#fff;
  border:none;
  display: flex;
}
.lan:nth-child(1){
  margin-top:5em;
}
.lan:nth-child(2){
  margin-top:14rem;
}
.lan:nth-child(3){
  margin-top:24rem;
}
.result .lan .horaire{
  border-left:1px solid rgb(0,5,60);
  width: 50rem;
  background: rgba(0,0,0,0.4); 
  color:#fff;
  display: flex;
 justify-content:center;
}
.result .lan .horaire .trait{
  width:10rem;
  height:5px;
  background:#fff;
  margin-top:2rem;
}

.result .lan .prix{
  position: absolute;
  top:20%;
  left:85%;
}
.result .lan .prix button{
  border:1px solid rgb(0,5,60);
}
/*Formulaire de reservation CSS*/
.flo{
  position:absolute;
  left:29%;
  top:20%;
  width:40%;
  background:gray;
}
.flo .contener{
  display: flex;
  background:#eee;
  height:30rem;
  padding:1.5rem;
  box-shadow: 8px 8px 12px #aaa;
}
.flo .contener .left{
  width:25rem;
  background:rgb(0,5,60);
  color:white;
}
.flo .contener .right{
  width:100%;;
  background:#fff;
  padding: 1rem;
}
input[type="submit"]{
  background:rgb(0,2,60);
  color:white;
}
.flo .contener .right form input,select{
  width:100%;
  background:#eee;
  border:none;
  outline:none;
}
.flo .contener .right .int{
 margin-top:1.5rem;
}
.flo .contener .right h4{
  font-size:20px;
}
 /*admin CSS*/
 .admin{
  display:flex;
 }
 .admin .cont1 .action{
  padding: 15px 25px;
 }
 .admin .cont1 .action button{
  border:none;
  background:rgb(0,5,60);
  color:#fff;
  transition:0.5s all;
 }
 .admin .cont1 .action button:hover{
  background:#aaa;
  color:#000;
  transform:translateY(-5px);
 }
 .admin .cont2{
  width:45rem;
  height: 15rem;
  border:1px solid rgb(0,5,60);
  /*position:absolute;
  left:45%;*/
  margin-left:12rem;
 }
 .admin .cont2 div{
  border-bottom:1px solid rgb(0,5,60);
 }
 .admin .cont2 .b{
  height:50%;
 }

footer{
  display : flex;
  background: rgb(0,5,60);
  color :white;
  padding:15px 10rem;
}
footer .flos{
  width:20rem;
  padding-left:3rem;
}
footer a{
  color:white;
  text-decoration:none;
}
</style>

</head>
