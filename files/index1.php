<html>
<head>
<link rel="import" href="bower_components/polymer/polymer.html">
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href="bower_components/core-scaffold/core-scaffold.html" rel="import">
<link href="bower_components/core-header-panel/core-header-panel.html" rel="import">
<link href="bower_components/core-menu/core-menu.html" rel="import">
<link href="bower_components/core-item/core-item.html" rel="import">
<link href="bower_components/core-icon-button/core-icon-button.html" rel="import">
<link href="bower_components/core-toolbar/core-toolbar.html" rel="import">
<link href="bower_components/core-menu/core-submenu.html" rel="import">
<link href="bower_components/paper-button/paper-button.html" rel="import">
<link href="bower_components/paper-input/paper-input.html" rel="import">
<link href="bower_components/paper-item/paper-item.html" rel="import">
</head>
<body>
<polymer-element name="my-element">


    <style>    
    h2{
      font-family: 'Roboto', sans-serif;
    }
      #design_host {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
      }
      #core_scaffold {
        position: absolute;
        top: -10px;
        right: 0px;
        bottom: 0px;
        left: 0px;
        background-color: rgb(0, 128, 255);
        opacity: 1;
      }
      #core_header_panel {
        background-color: rgb(255, 255, 255);
      }
      #core_toolbar {
        background-color: rgb(79, 125, 201);
        color: rgb(255, 255, 255);
      }
      #core_menu {
        font-size: 16px;
      }
      #paper_button {
        left: 3px;
        top: 20px;
        position: absolute;
        width: 260px;
        height: 50px;
      }
      #paper_button1 {
        left: 3px;
        top: 80px;
        position: absolute;
        width: 250px;
        height: 60px;
      }
      #paper_input {
        left: 610px;
        top: 200px;
        position: absolute;
      }
    </style>
    <style>    
      #design_host {
        position: absolute;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
      }
      #core_scaffold {
        position: absolute;
        top: 0px;
        right: 0px;
        bottom: 0px;
        left: -255px;
        background-color: rgb(0, 128, 255);
        opacity: 1;
      }
      #core_header_panel {
        background-color: rgb(255, 255, 255);
      }
      #core_toolbar {
        background-color: rgb(79, 125, 201);
        color: rgb(255, 255, 255);
      }
      #core_menu {
        font-size: 16px;
      }
      #paper_button {
        left: 3px;
        top: 20px;
        position: absolute;
        width: 260px;
        height: 50px;
      }
      #paper_button1 {
        left: 3px;
        top: 80px;
        position: absolute;
        width: 250px;
        height: 60px;
      }
      #paper_input {
        left: 450px;
        top: 80px;
        position: absolute;
      }
      #paper_button2 {
        left: 993px;
        top: 190px;
        position: absolute;
      }
      #paper_button3 {
        left: 783px;
        top: 85px;
        position: absolute;
      }

      #paper_item{

        width: 100%;
        top:300px;
      }
      #paper_item1{
        width: 100%;
        top:300px;
      }
    </style>
    <core-scaffold id="core_scaffold">
      
      <div id="div" tool>REA</div>
      <form action="uploader.php" method="post">
                        >
      <paper-input  id="paper_input" type="file"></paper-input>
      <!-- <paper-button id="paper_button2">download</paper-button> -->
      <paper-button type="submit" id="paper_button3">upload</paper-button><br><br></form>
      <h2 style="position:fixed;top:330px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Encrpted files</h2>
      <center><paper-item id="paper_item" >&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;&nbsp;encrypted file1<paper-button id="paper_button4">download</paper-button></paper-item></center><br>
      <center><paper-item id="paper_item1"  >&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;&nbsp;encrypted file2<paper-button id="paper_button4">download</paper-button></paper-item>
      </center>
      <form action="uploader.php" method="post"
                        enctype="multipart/form-data">
<input type="file" name="file" size="50" />
<br />
<input type="submit" value="Upload File" /></form>
    </core-scaffold>
  

  <script>

    Polymer({
      
    });

  </script>

</polymer-element>

</body>
</html>