<?php
header('content-type:text/css;charset:UTF8');
?>
*{
    margin:0px;
    padding:0px;
}
.m-container{
    width:1260px;
    display:grid;
    grid-template-rows:10% 90%;
    height:730px;
}
.navbar{
    position:sticky;
    top:0px;
    background-color: #177cff;
    height:70px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    display:flex;
}
.navbar img{
    width:65px;
    height:65px;
    margin-left:50px;
    margin-top:2px;
    border-radius:5px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.s-container{
    margin-left: 200px;
    width: 900px;
    height: 700px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
    display: grid;
    grid-template-rows: 32% 68%;
}
.upperContainer{
    border-bottom:1px solid #80808045;;   
    margin-left:3px;
    margin-right:3px;
    display:grid;
    grid-template-columns: 30% 55% 15%;
   
}
.logout input{
    margin-top: 15px;
    margin-left: 59rem;
    display: inline-block;
    padding: .4rem 3rem;
    border-radius: .5rem;
    background-color:black;
    color:white;
    font-size: 1.2rem;
    cursor: pointer;
    position: relative;
    font-weight: 200;
    border:none;
    
}
.logout input:hover{
    background: white;
    color: #09a5f4;
    border: 1px solid ;
}
.lowerContainer{
    display:grid;
    grid-template-columns:15% 90%;
}
.lowerLeftContainer{
    border-right:1px solid #80808045;
    margin-top:3px;
    margin-bottom:3px;
}
.lowerLeftContainer ul{
    list-style-type:none;
}
.lowerLeftContainer li{
    padding:5px;
}
.lowerLeftContainer ul li a{
    text-decoration:none;
    color:#00000040;
}
.lowerLeftContainer ul li a:hover{
    color:#09a5f4;  
}

.upperContainer .user {
    display:grid;
    grid-template-rows:75% 25%;
    border-right:1px solid #80808045;
    width: 208px;
    height:216px;
    margin-top:3px;
    margin-bottom:3px;
}
.upperContainer .user .userimg{
    width:150px;
    height:150px;
    border-radius:70px;
    margin-left: 28px;
    margin-top: 5px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
}
.upperContainer .user .userimg img{
    width:140px;
    height:140px;  
    border-radius:70px;
    margin-left:4px;
    margin-top:4px;
}   
.upperContainer .user .name{
   
    margin-top:0px;
    width: 150px;
    margin-left: 27px;
}
.upperContainer .user .addphoto{
   
    margin-top:5px;
    width: 180px;
    margin-left:12px;   
}
.upperContainer .user2{
    border-right:1px solid #80808045;
    margin-top:3px;
    margin-bottom:3px;
}
.upperContainer .user2 .username{
    width:360px;
    height:50px;
    font-size:40px;
    margin-top:73px;    
    margin-left:19px;
}
.upperContainer .user2 .username label{
    font-size:30px;
    margin-left:5px;
}
.upperContainer .edit{
    margin-top:30px;
}
.upperContainer .edit a{
    text-decoration:none;
    color:#00000040;
    margin-left:15px;
    
}
.upperContainer .edit a:hover{
    color:#09a5f4;  
}
#x1{
    display:block;
    width: 595px;
}
#X2{
    display:none;
}
#x3
{
    display:none;
}
iframe{
    width: 760px;
    height: 450px;
    border:none;
}
#remove{
    border:none;
    margin-top:5px;
    margin-left:25px;
    padding:5px;
    border-radius:5px;
    background-color: #3bbdff;
    cursor:pointer;
}
#remove:hover{
    background-color: #09a5f4;
}