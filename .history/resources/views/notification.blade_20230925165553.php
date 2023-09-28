    <!DOCTYPE <html>
        
    <head>

    <style>
        body {
  font-family: Calibri;
  /* background:#EEE; */
}

a {
  color: inherit;
  text-decoration: none;
}

* {
  margin: 0px;
  padding: 0px;
}

ul li {
  list-style-type: none;
}

header {
  height: 40px;
  width: 100%;
  position: relative;
  background-color: #5E6E7D;
  padding: 10px 0;
}

.down-arrow {
  width: 0px;
  background: rgba(0, 0, 0, 0);
  border: 10px solid transparent;
  border-bottom: 10px solid #D5ECF1;
  position: relative;
  left: 50%;
  margin-left: -15px;
}

.ntfctns {
  display: inline-block;
  width: 50px;
  position: relative;
  /* background:#FFF; */
  
  height: 40px;
  margin: 0 20px;
  text-align: center;
  float: left;
}

.ntfctns ul li a {
  float: left;
  width: 100%;
  padding: 10px 20px;
  box-sizing: border-box;
}

.dropdown {
  display: none;
  width: 240px;
  position: relative;
  /* left: -170%; */
  
  float: left;
  text-align: left;
}

.dropdown ul li:first-child {
  border-top: none;
  border-radius: 10px 10px 0 0;
}

.dropdown ul li:last-child {
  border-radius: 0 0 10px 10px;
}

.dropdown ul {
  border-radius: 0 0 10px 10px;
  float: left;
  width: 100%;
}

.dropdown ul li {
  position: relative;
  border-top: 1px solid #FFF;
  float: left;
  width: 100%;
}

.ntfctns .fa {
  position: relative;
  color: #FFF;
  margin: 5px 10px;
  cursor: pointer;
  /* left: 70%; */
}

.badge {
  padding: 2px 3px;
  background-color: #D5ECF1;
  border-radius: 50%;
  font-size: 10px;
  height: 15px;
  min-width: 15px;
  box-sizing: border-box;
  display: inline-block;
  vertical-align: middle;
  text-align: center;
  font-weight: bold;
  color: #5E6E7D;
  line-height: 1;
}

.badge.top {
  position: absolute;
  top: -3px;
  right: -3px;
}

.dropdown.open {
  display: block;
}

.ntfctn {
  background: #EEF5F7;
  font-size: .8em;
}

.unr-ntfctn {
  background: #C9DCE0;
}

.ntfctn-hdng {
  background: #EEF5F7;
  text-align: center;
  color: #000;
  padding: 10px 0;
}

.ntfctn-hdng .badge {
  background: #5E6E7D;
  color: #FFF;
}

.ntfctn img {
  border-radius: 50%;
  vertical-align: middle;
  height: 30px;
  width: 30px;
  margin-right: 20px;
  float: left;
}

.container {
  max-width: 960px;
  margin: auto;
}

.popups {
  display: none;
  width: 220px;
  min-height: 30px;
  position: fixed;
  left: 20px;
  bottom: 30px;
  border-radius: 5px;
  padding: 5px 15px;
  background: #D2E9F3;
  color: #5E6E7D;
}

.popups .fa-times {
  position: absolute;
  right: 5px;
  top: 5px;
  cursor: pointer;
}

.popup-ntfctn {
  font-size: 14px;
}
    </style>
    </head>
    
    
    <body>
    <header>
    <div class="container">
        <div class="ntfctns" id="notify">
        <i class="fa fa-bell-o fa-2x" data-toggle="dropdown" data-target="ntfctns" id="ntfctn-bell"><span class="badge top ntftcn-cnt">3</span></i>
        <div id="ntfctns" class="dropdown">
            <div class="down-arrow"></div>
            <ul>
            <li class="ntfctn-hdng">Notifications <span class="badge ntftcn-cnt">3</span></li>
            <li class="ntfctn unr-ntfctn">
                <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>Antony Smith </b>commented on your post </a>
            </li>
            <li class="ntfctn unr-ntfctn">
                <a href="void:;"><img src="http://dummyimage.com/30x30/EA5625/ffffff.jpg&text=img"><b>Samuel Gatthy</b> likes your post </a>
            </li>
            <li class="ntfctn unr-ntfctn">
                <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>Antony Smith and 14 others </b>likes your pic </a>
            </li>
            <li class="ntfctn">
                <a href="void:;"><img src="http://dummyimage.com/30x30/EA5625/ffffff.jpg&text=img"><b>Samuel Gatthy</b> likes your post </a>
            </li>
            <li class="ntfctn">
                <a href="void:;"><img src="http://dummyimage.com/30x30/EAC925/ffffff.jpg&text=img"><b>Antony Smith and 14 others </b>likes your pic </a>
            </li>

            </ul>
        </div>
        </div>
    </div>
    </header>

    <div id="popupWrap" class="popups">
    <i class="fa fa-times close"></i>
    <p class="popup-ntfctn">John Smith commented on your post</p>
    </div>
    </body>
    </html>