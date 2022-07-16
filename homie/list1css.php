<?php
    header('content-type:text/css;charset:UTF8');
?>
*{
    margin:0px;
    padding:0px;
}
.container{
    width:100%;
}
.m-container{
    margin-top:5px;
    width:600px;
    height:300px;
    margin-bottom:10px;
    margin-left:100px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.sub-container{
    margin-left:200px;
    height:50px;
    width:100%;
    display:grid;
    grid-template-columns:10% 70% 20%;
    background-color: #5cbafe;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.lower-container input{
    width:95%;
    height:50px;
    margin-left:5px;
    margin-right:5px;
    margin-top:5px;
    background-color:#09a5f4;
    color:white;
    border-radius:5px;
    border:none;
    font-size:20px;
}
.lower-container input:hover{
    background: white;
    color: #09a5f4;
    border: 1px solid ;
}
.upper-container{
    display:grid;
    grid-template-columns:50% 50%;
    
}
.img-container{
    width:300px;
    height:200px;
    position:relative;
    margin:10px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;

}   
.img-container img{
    width:300px;
    height:200px;
    vertical-align: middle;
}
.lower-container{
    height: 75px;
    width: 600px;
}
textarea{
    width: 280px;
    height: 200px;
    margin-top: 15px;
    border: none;
    margin-left: 10px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.s-container{
    width:498px;
    height:250px;
    display:grid;
    grid-template-rows:90% 10%;
    margin-bottom:10px;
}
/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
/* .dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
} */

/* .active, .dot:hover { */
.active:hover{
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text 
  {
    font-size: 11px
  }
}
