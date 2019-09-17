/*
	View do OurPaterns igual do ThemeForest , feita em CSS/HTML + JS
	Code by : Tiago Ribeiro Santos;
	Date : 16 de Setembro 2019;
	GitHub : www.github.com/tiglinux;
*/

/*

	Falta só fazer a media querie;
*/

*{
	padding:0;
	margin:0;
	box-sizing: border-box;
}
a:link{
	text-decoration: none;
}

.list > li{
	margin-bottom: 20px;
	list-style: none;
}
.list a{
	color: gray;
}
.list a:hover{
	text-decoration: none;
	color: #48c7ec;
}

.section-title{
	margin-top: 45px;
	padding-left: 50px;
	font-family:'Poppins', sans-serif;
	font-size: 30px;
	font-weight:500;
	color:inherit;
	line-height: 1.3;
}
.section-title::after{
	content:"";
	position: absolute;
	top:93px;
	left: 50px;
	width: 92%;
	height: 0.5px;
	background: #48C7EC;
}
.parceiros{
	display: block;
}
@keyframes animacao{
	from{background: white;top: 0;left: 0;}
	to{background: white;top: 0px;left: -20px;};
}
.flex-container{
	margin-top: 30px;
	background: white;
	color:white;
	display: flex;
	flex-direction: row;
	margin-bottom:70px;
	text-transform: capitalize;

}
.flex-container > div{
	display: flex;
	flex-direction: row;
	margin-left: 30px;
	position: relative;

}
.flex-container >.one{
	animation-name: animacao;
	animation-duration: 5s;
	animation-delay: 3s;
	animation-iteration-count: 40;
}
.two{
	animation-name: animacao;
	animation-duration: 5s;
	animation-delay: 3s;
	animation-iteration-count: 40;
}
.three{
	animation-name: animacao;
	animation-duration: 5s;
	animation-delay: 3s;
	animation-iteration-count: 40;
}
.four{
	animation-name: animacao;
	animation-duration: 5s;
	animation-delay: 3s;
	animation-iteration-count: 40;
}
div.call-out{
	background:#48C7EC;
	margin-top:4px;
	padding-left: 30px;
	display: flex;
	flex-direction: row;
}
.logo{
	margin-top: 30px;
	margin-left: 20px;
}
.text-call-out > h4 {
	font-weight: 500;
	font-size:20px;
	line-height: 5.3;
	margin-left: 30px;
	color: white;
	text-align: center;
	font-family: 'Poppins',sans-serif;
}
.float-right{
	float:right;
}
.call-out .link{
	color:white;
	background:transparent;
	border-color:white;
	margin-top: 30px;
	margin-left: 70px;
	line-height:40px;
	padding:0.21px;
	padding-left: 20px;
	padding-right: 20px;
}
.link{
	position: relative;
	font-size: 15px;
	font-weight: 800;
	border:2px solid white;
	text-transform: uppercase;
	font-family: 'Poppins',sans-serif;
	display: inline-block;
	transition: all .5s cubic-bezier(0.4, 0, 1, 1);
	list-style: none;
}
a.link:hover{
	background: white;
	color:#48C7EC;
}
.btn_sub{
	margin-top: 20px;
	margin-left: 40px;
	line-height: 41px;
	width: 98%;
	background:#48C7EC;
	position: relative;
	font-size: 14px;
	font-weight: 600;
	color: white;
	border :  2px solid #48C7EC;
	text-transform: uppercase;
	font-family: 'Poppins',sans-serif;
	display: inline-block;
	padding: 0 38px;
	transition: all .5s cubic-bezier(0.4, 0, 1, 1);

}
.btn_sub:hover{
	 background:black;
	 border: 2px solid  #48C7EC ;
	 color:  #48C7EC;
	 transition: all .5s cubic-bezier(0.4, 0, 1, 1);
}
.about{
	background:#10252e;
	position: relative;
	padding: 70px 0px 20px;
	display: block;
}
/*
input[type="email"]{
	    display: block;
	    width: 100%;
	    line-height: 24px;
	    height: 46px;
	    font-size: 16px;
	    box-shadow: none;
	    border: 1px solid #f4f4f4;
	    padding: 12px 15px;
	    background: #fff;
	    border-radius: 0px;
	    transition: all 500ms ease;
	    -webkit-transition: all 500ms ease;
	    font-family: 'Hind', sans-serif;
}
*/
.footer-title{
	font-size: 20px;
	color:white;
	margin-bottom: 20px;
	font-weight: 500;
	line-height: 33px;
	font-family: 'Poppins',sans-serif;
	
}


.col-md-3 > p {
	margin-bottom: 10px;
}
.col-md-3  {
	margin-bottom: 70px;
	color: #848484;
	margin-left: 30px;
	margin-right: 90px;
}
.col-md-3 p span::after{
	content: "";
	padding-left: 10px;
}

form {
	position: relative;
	top: 0;
	left: 0;
}
#email {
	display: block;
	line-height:35px;
	margin-top: 20px;
	padding-left: 5px;
	margin-left: 30px;
	height: 35px;
	text-indent: 35px;
}

form span {
	position: absolute;
	top: 6px;
	left: 15px;
	font-size: 20px;
	color: #48c7ec;
}
form span::after {
	content: "|";
	color: black;
	text-indent: 50px;
	margin-left: 6px;
	font-size: 20px;


}


.container_about{
	padding-right: 15px;
	padding-left: 15px;
	margin-right: auto;
	margin-left: auto;
	display: block;
}
footer{
	display: block;
}
.main-footer{
	position: relative;
	background: rgb(132, 132, 132);
}
.row{
	margin-right: -15px;
	margin-left: -15px;
	display: flex;
	flex-direction: row;
}
.social{
	list-style: none;
	display: block;
}


@media screen and(max-width:999px )
{
	.container{
		width: 800px;
		
	}
}