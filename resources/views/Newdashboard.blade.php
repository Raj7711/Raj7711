<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css" />
    <title>ANNUAL REPORT</title>
  </head>
  <style>
    :root {
  --color-primary: #0073ff;
  --color-white: #e9e9e9;
  --color-black: #141d28;
  --color-black-1: #212b38;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: sans-serif;
  
 
}
body{
    background-image:url('{{asset('/image/admin.jpg')}}');
    width: 100%;
    
    background-position: center;
    background-size: cover;
    height: 109vh;
 

}
img{
  display:flex;
}

.logo {
  color: var(--color-white);
  font-size: 30px;
}

.logo span {
  color: var(--color-primary);
}

.menu-bar {
  background-color: var(--color-black);
  height: 80px;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 5%;

  position: relative;
}

.menu-bar ul {
  list-style: none;
  display: flex;
}

.menu-bar ul li {
  /* width: 120px; */
  padding: 10px 30px;
  /* text-align: center; */

  position: relative;
}

.menu-bar ul li a {
  font-size: 20px;
  color: var(--color-white);
  text-decoration: none;

  transition: all 0.3s;
}

.menu-bar ul li a:hover {
  color: var(--color-primary);
}

.fas {
  float: right;
  margin-left: 10px;
  padding-top: 3px;
}

/* dropdown menu style */
.dropdown-menu {
  display: none;
}

.menu-bar ul li:hover .dropdown-menu {
  display: block;
  position: absolute;
  left: 0;
  top: 100%;
  background-color: var(--color-black);
}

.menu-bar ul li:hover .dropdown-menu ul {
  display: block;
  margin: 10px;
}

.menu-bar ul li:hover .dropdown-menu ul li {
  width: 150px;
  padding: 10px;
}

.dropdown-menu-1 {
  display: none;
}

.dropdown-menu ul li:hover .dropdown-menu-1 {
  display: block;
  position: absolute;
  left: 150px;
  top: 0;
  background-color: var(--color-black);
}

.hero {
  height: calc(100vh - 80px);
  background-image: url(./bg.jpg);
  background-position: center;
}
img{
   height:77px;
   margin:0;
   padding:0;
   
   
   border-radius:25px;
}
    </style>
  <body>
    <div class="menu-bar">
    <span class="img"><img src="{{asset('/image/mzu.jpg')}}" id="logo" alter="logo"></span>
      <h1 class="logo"><span>ANNUAL</span>REPORT.</h1>
      
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">SCHOOL & DEPARTMENT <i class="fas fa-caret-down"></i></a>

            <div class="dropdown-menu">
                <ul>
                  <li>
                  
                    <a href="#">SEMIS <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="{{url('/')}}/c">Commerce</a></li>
                        <li><a href="#">Economics</a></li>
                        <li><a href="#">Library & information Science</a></li>
                        <li><a href="#">Management</a></li>
                        <li><a href="#">Mass Communication</a></li>
                        <li><a href="#">Tourism &Hospitality Management</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Humanities &Languages <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">English &Culcural studies</a></li>
                        <li><a href="#">Mizo</a></li>
                        <li><a href="#">Hindi</a></li>
                       
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">School of Education <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Education</a></li>
                        
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Social Sciences <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">History & Ethnography</a></li>
                        <li><a href="#">Political Science</a></li>
                        <li><a href="#">Psychology</a></li>
                        <li><a href="#">Public Adminstration</a></li>
                        <li><a href="#">Social work</a></li>
                        <li><a href="#">Sociology</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">ES & NRM <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Environmnetal Science</a></li>
                        <li><a href="#">Forestry</a></li>
                        <li><a href="#">Geography & Resource Management</a></li>
                        <li><a href="#">Geology</a></li>
                        <li><a href="#">Horticulture,Aromatic & Medicinal Plants</a></li>
                        <li><a href="#">Exetension Education and Rural Development</a></li>
                        </ul>
                    </div>
                  </li>
                        
                  <li>
                    <a href="#">Physics Sciences<i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Chemistry</a></li>
                        <li><a href="#">Physics</a></li>
                        <li><a href="#">Mathematics and computer science</a></li>
                        <li><a href="#"> Industrial  Chemistry</a></li>
                       
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Engineering & Technology <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Information Technology</a></li>
                        <li><a href="#">Electronics & Communication Engineering</a></li>
                        <li><a href="#">Computer engineering</a></li>
                        <li><a href="#">Electrical Engineering</a></li>
                        <li><a href="#">Civil Engineering</a></li>
                        <li><a href="#">Food Technology</a></li>
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Life sciences <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Botany</a></li>
                        <li><a href="#">Zoology</a></li>
                        <li><a href="#">Biotechnology</a></li>
                        
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Fine Arts,Architecture &Fashion Technology <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Planning & Architecture</a></li>
                        
                      </ul>
                    </div>
                  </li>
                  <li>
                    <a href="#">Medical & Paramedical Sciences <i class="fas fa-caret-right"></i></a>
                    
                    <div class="dropdown-menu-1">
                      <ul>
                        <li><a href="#">Clinical Psychology</a></li>
                        
                      </ul>
                    </div>
                  </li>
                  

                 <li><a href="#">FAQ</a></li>
                </ul>
              </div>
        </li>
     <!--   <li><a href="#">Blog</a>-->
        </li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

    <div class="hero">
      &nbsp;
    </div>
  </body>
</html>