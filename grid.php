<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .widget-title, #sidebar-secondary .widget-title {
    background: #294a70 none repeat scroll 0 0;
    border-bottom: 0 solid #ffab1f;
    border-left: 5px solid #ffab1f;
    color: #ffffff;
    font-size: 16px;
    font-weight: normal;
    line-height: 1.5;
    padding: 5px 15px;
    position: relative;
}
 .widget-title::after,  .widget-title::after {
    border-left: 9px solid rgba(0, 0, 0, 0);
    border-right: 9px solid rgba(0, 0, 0, 0);
    border-top: 9px solid #294a70;
    bottom: -20px;
    content: "";
    display: block;
    height: 21px;
    left: 5%;
    margin: 0 auto;
    position: absolute;
    width: 13px;
    z-index: 9999;
 }
 .css {
  position:relative;
  top:7px;
  left:2px;
 margin-right: 5%;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <div class="row height_manage">
        
        <div class="col grid1">
            <h2 class="widget-title">news event</h2>
            <marquee class="css" behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();"> 
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid iste corporis aperiam assumenda numquam, est
            quaerat fugiat autem eveniet molestiae quam exercitationem. Voluptatibus pariatur cum expedita molestias sed
            illo animi!
            </marquee>
        </div>
        <div class="col-6 grid2">
           <h2>introduction</h2>
           Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid iste corporis aperiam assumenda numquam, est
            quaerat fugiat autem eveniet molestiae quam exercitationem. Voluptatibus pariatur cum expedita molestias sed
            illo animi!
        </div>
        <div class="col grid3">
            <h2 class="widget-title">news event</h2>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid iste corporis aperiam assumenda numquam, est
            quaerat fugiat autem eveniet molestiae quam exercitationem. Voluptatibus pariatur cum expedita molestias sed
            illo animi!
        </div>
    </div>
</body>

</html>