<style>
    body{
        width: 100vw;
        height: 100vh;
        margin: 0%;
        overflow: hidden;
        background-color: #030e21;
        color: rgba(255, 255, 255, 0.437);
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    a{
        text-decoration: none;
    }
    .container{
        width: 100%;
        height: 100%;
    }
    .container .navbar{
        width: 100%;
        height: 65px;
        justify-content: space-between;
        background-color: #001e4a;
    }
    .container .navbar .logo{
        display: flex;
        width: 300px;
        text-align: center;
        height: 65px;
        vertical-align: middle;
    }
    .container .navbar .logo span{
        margin: auto;
        margin-right: 4px;
        align-items: center;
    }
    .container .navbar .logo .span{
        margin: auto;
        font-size: x-large;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: white;
        display: table-cell;
        display: flex;
        margin-left: 5px;
    }


    #menu{
        position: absolute;
        display: none;
        left: 0px;
        top: 65px;
        width: 320px;
        height: 100vh;
        z-index: 40;
        color: white;
        overflow-y: scroll;
        background-color: #001e4a;
    }
    #menu .connect{
        width: 270px;
        padding: 9px;
        margin-top:10px;
        /* background-color: rgba(113, 218, 0, 0.729); */
        background-color: rgba(0, 0, 0, 0.856);
        border-radius:50px;
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        padding-left: 20px;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    #menu .reply{
        width: 270px;
        padding: 9px;
        margin-top:10px;
        /* background-color: rgba(113, 218, 0, 0.729); */
        background-color: rgb(203, 156, 1);
        border-radius:50px;
        border-bottom-left-radius: 0px;
        border-top-left-radius: 0px;
        padding-left: 20px;
        color: black;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    #menu .page:hover{
        background-color: rgba(135, 135, 135, 0.478);
        cursor: pointer;
    }
    #menu .page:active{
        background-color: rgba(95, 95, 95, 0.856);
        cursor: pointer;
    }
    #menu2{
        position: absolute;
        display: block;
        left: 0px;
        top: 65px;
        width: 17vw;
        height: 100vh;
        color: white;
        z-index: 5;
        background-color: rgba(0, 18, 33, 0.847);
    }
    #menu2 .page{
        display: grid;
        width: 50px;
        height: 50px;
        grid-template-columns: 1fr, 1fr;
        /* background-color: rgba(113, 218, 0, 0.729); */
        background-color: rgba(0, 119, 75, 0.856);
        border-radius: 5px;
        justify-content: center;
        align-items: center;
        font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    #menu .page:hover{
        background-color: rgba(135, 135, 135, 0.856);
        cursor: pointer;
    }
    #menu .page:active{
        background-color: rgba(95, 95, 95, 0.856);
        cursor: pointer;
    }
    #mail_blog{

    }
    #mail_blog .mail_message{
        width: 100vw;
        height: 40px;
        align-items: center;
        display: flex;
        color: rgba(255, 255, 255, 0.705);
        transition: .4s;
        background-color: rgba(45, 45, 45, 0.386);
        box-shadow: rgba(255, 255, 255, 0.13) 0px 1px 3px 0px, rgba(255, 255, 255, 0.141) 0px 1px 2px 0px;
    }
    #mail_blog .mail_message:hover{
        background-color: rgba(105, 105, 105, 0.226);
        cursor: pointer;
        transition: .2s;
        box-shadow: rgb(0, 234, 255) 0px 1px 3px 0px, rgb(0, 213, 255) 0px 1px 2px 0px;
    }
    #userMail{
        width: 18px;
        height: 18px;
        margin-left: 50px;
    }
    .fa-star{
        margin-left: 20px;
    }
    .msgname{
        width: 200px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .fa-bell-slash{
        margin-left: 5px;
    }
    .Huntkey{
        right: 40px;
        width: 700px;
        font-weight: 100;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .tag{
        width: 90px;
        text-align: center;
        margin-left: 100px;
        font-size: medium;
        white-space: nowrap;
        padding: 5px;
        overflow: hidden;
        text-overflow: ellipsis;
        background-color: rgb(91, 91, 91);
        border-radius: 50px;
        box-shadow: rgba(0, 255, 98, 0.866) 0px 1px 3px 0px, rgba(246, 0, 205, 0.948) 0px 1px 2px 0px;
    }
    .time{
        position: fixed;
        right: 20px;
        font-size: small;
    }
    .tool{
        position: absolute;
        display: flex;
        bottom: 50px;
        left: 50px;
    }
    .compose_btn1{
        position: relative;
    }
    .compose_btn2{
        position: relative;
        margin-left: 300px;
        margin-top: -110px;
    }
    #MessageCompose{
        position: absolute;
        right: 10px;
        bottom: 10px;
        width: 550px;
        display: none;
    }
    #MessageCompose2{
        position: absolute;
        right: 10px;
        bottom: 10px;
        width: 550px;
        display: none;
    }
    #mail_send{
        position: static;
    }
    .fa-circle-minus{
        position: absolute;
        right: 1px;
        bottom: 320px;
        font-size:2em;
    }
    .fa-circle-minus:hover{
        color:rgb(151, 151, 151);
        cursor: pointer;
    }
    button{
        cursor: pointer;
    }
    .fa-check-double{
        position: absolute;
        right: 50px;
        transition: 0.4s;
    }
    .fa-check-double:hover{
        color: rgb(0, 255, 0);
    }
    .fa-key{
        transition: 0.4s;
    }
    .fa-key:hover{
        color:  rgb(0, 255, 0);
    }
    #logout{
        position: absolute;
        bottom: 100px;
        left: 25%;
    }
    .idUser{
        width: 100px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .type_connect{
        position: fixed;
        color: rgba(255, 255, 255, 0.559);
    }
</style>