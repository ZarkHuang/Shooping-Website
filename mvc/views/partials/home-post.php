<?php
while($row = mysqli_fetch_array($data["Post"])){
    $type ;
    if($row["type"] == 1){
        $type = $row["content"];
    }elseif($row["type"] == 2){
        $type = $row["content"];
    }
    echo '<div class="col-12 col-sm-6 col-md-4 col-lg-3 p-1">
    <div class="post--box p-3 bg-white shadow1" style="width: 100%;height:100% ;border-radius: 10px">
    <a href="./detail/page/'.$row["id"].'" style="text-decoration:none;color:black">
    <div class="prinfImage'.$row["id"].'" style="width: 100%;height: 200px;background-size: cover; background-repeat: no-repeat;border-radius: 10px;">
    
    </div>
    </a>
    <p class="font-weight-bold mt-3 mb-0" style="font-size: 110%">'.$row["title"].'</p>
    <p class="font-weight-bold mb-2" style="height:100px ;font-size: 30%;opacity: 0.7">'.$type.'</p>
    <p class="font-weight-bold float-left" style="font-size: 130%">$'.$row["price"].'</p>
    <div onclick="addToCart('.$row["id"].',`'.$row["title"].'`,`'.$row["image"].'`,'.$row["price"].')" class="float-right text-center bg" style="width: 40px;height: 40px;border-radius: 5px">
    <i class="fa fa-shopping-basket text-white" aria-hidden="true" style="font-size: 140%;line-height: 38px"></i>
    </div>
    <div style="clear: both;"></div>
    </div>
    
    </div><script type="text/javascript">
    $(document).ready(function(){
        var imageLink = "'.$row["image"].'";
        var imageLinkcut = imageLink.split(",",1);
        for (a in imageLinkcut) {
            var prinfImage = `<img src="./public/images/product/`+imageLinkcut[a]+`"  width="100%" height="100%" style="object-fit: contain;margin-top: 0px; padding:10px 0">`
            var x = document.getElementsByClassName("prinfImage'.$row["id"].'");
            for (i = 0; i < x.length; i++) {
                x[i].innerHTML = prinfImage;
            }
        }
        });
        </script>';


    }
    ?>
