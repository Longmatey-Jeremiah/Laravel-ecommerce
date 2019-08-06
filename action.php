<?php
    include "db.php";
    session_start();
    
    if(isset($_POST["categories"])){
        $category_query = "SELECT * FROM categories";
        $run_query = mysqli_query($con,$category_query);
        $count = mysqli_num_rows($run_query);
        echo " <ul class='ul'> ";
        if($count > 0){
            while($row=mysqli_fetch_array($run_query)){
                $cid = $row['category_id'];
                $cat_name = $row['category_title'];
                echo "
                <li class='li'><a href='#' class='category li' cid='$cid'> $cat_name</li>";
            }
            echo "</ul>";
        }
        
    }
    //fetch data from brands table in the database
    if(isset($_POST["brands"])){
        $brand_query = "SELECT * FROM brands";
        $run_query = mysqli_query($con,$brand_query);
        $count = mysqli_num_rows($run_query);
        echo "<ul class='ul'>";
        if($count > 0){
            while($row=mysqli_fetch_array($run_query)){
                $bid = $row['brand_id'];
                $brand_name = $row['brand_title'];
                $brand_cat  =   $row['brand_cat'];
                echo "
                    <li class='li'><a href='#' class='brand li' bid='$bid'> $brand_name</a></li>
                ";
                
            }
        }
        echo "</ul>";
    }
    //fetch data from products table in your database
/*    if(isset($_POST["featured"])){
        $featured_query = "SELECT * FROM products ORDER BY RAND() LIMIT 0,3";
        $run_query = mysqli_query($con,$featured_query);
        $count = mysqli_num_rows($run_query);
        echo "<div class='row'>";
        if($count > 0){
            while($row=mysqli_fetch_array($run_query)){
                $pid = $row['product_id'];
                $pro_cat = $row['product_cat'];
                $pro_brand = $row['product_brand'];
                $pro_name = $row['product_title'];
                $pro_img = $row['product_img'];
                $pro_price = $row['product_price'];
                $pro_desc = $row['product_desc'];
                $pro_keywords = $row['product_keywords'];

                echo "
                    <div class='col-md-4 col-4'>
                        <img src='images/$pro_img' height='200px;'>
                    </div>
                ";
            }
        }
        echo "</div>";
    }
*/    /*if(isset($_POST["page"])){
        $sql = "SELECT * FROM products";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        $pageno = ceil($count/8);
        for($i = 1 ; $i <= $pageno ; $i++){
            echo "<li><a href='#' id='page' page='$i'>$i</a></li>";
        }
    }*/
    //fetch data from products table in your database
    if(isset($_POST["get_Product"])){
        $featured_query = "SELECT * FROM products LIMIT 0,12";
        $run_query = mysqli_query($con,$featured_query);
        $count = mysqli_num_rows($run_query);
        echo "<div class='row'>";
        if($count > 0){
            while($row=mysqli_fetch_array($run_query)){
                $pro_id = $row['product_id'];
                $pro_cat = $row['product_cat'];
                $pro_brand = $row['product_brand'];
                $pro_name = $row['product_title'];
                $pro_img = $row['product_img'];
                $pro_price = $row['product_price'];
                $pro_desc = $row['product_desc'];
                $pro_keywords = $row['product_keywords'];
                /*<button type='button' class='btn btn-secondary' id='pro_page' title='Quick Shop'>
                                    <i class='fa fa-eye'></i>
                                </button>*/
                echo "
                    <div class='col-md-3 col-3'>
                        <div class='top'>
                            <img src='images/$pro_img' class='pro-image'>
                            <div class='over'>
                                <button type='button' class='btn btn-secondary' title='Add to Wishlist'>
                                    <i class='fa fa-heart text-center'></i>
                                </button>
                                <button type='button' class='btn btn-secondary' id='product' pid='$pro_id' title='Add To Cart'>
                                    <i class='fa fa-shopping-cart text-center'></i>
                                </button>
                            </div>
                        </div>
                        <div class='bottom text-center' style='color:tomato;'>
                                <h4>$pro_name</h4>
                                <h5>$$pro_price.00</h5>
                            </div>
                    </div>
                ";
            }
        }
        echo "</div>";
    }
    
    if(isset($_POST['get_selected_category']) || isset($_POST['selectedBrand']) || isset($_POST['search'])){
        if(isset($_POST['get_selected_category'])){
            $id = $_POST['cat_id'];
            $sql = "SELECT * FROM products WHERE product_cat='$id'";
        }else if(isset($_POST['selectedBrand'])){
            $id = $_POST['brand_id'];
            $sql = "SELECT * FROM products WHERE product_brand='$id'";
        }else {
            $keyword = $_POST['keyword'];
            $sql = "SELECT * FROM products WHERE product_keywords like '%$keyword%'";
        }
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        echo "<div class='row'>";
        if($count > 0){
            while($row=mysqli_fetch_array($run_query)){
                $pro_id = $row['product_id'];
                $pro_cat = $row['product_cat'];
                $pro_brand = $row['product_brand'];
                $pro_name = $row['product_title'];
                $pro_img = $row['product_img'];
                $pro_price = $row['product_price'];
                $pro_desc = $row['product_desc'];
                $pro_keywords = $row['product_keywords'];

                echo "
                    <div class='col-md-3 col-3'>
                        <div class='top'>
                            <img src='images/$pro_img' class='pro-image'>
                            <div class='over'>
                                <button type='button' class='btn btn-secondary' title='Add to Wishlist'>
                                    <i class='fa fa-heart text-center'></i>
                                </button>
                                <button type='button' class='btn btn-secondary' title='Add To Cart'>
                                    <i id='product' pid='$pro_id' class='fa fa-shopping-cart text-center'></i>
                                </button>
                            </div>
                        </div>
                        <div class='bottom text-center' style='color:tomato;'>
                                <h4>$pro_name</h4>
                                <h5>$$pro_price</h5>
                            </div>
                    </div>
                ";
            }
        }
        echo "</div>";
    }
    if(isset($_POST['addToCart'])){
        $p_id = $_POST['pId'];
        $user_id = $_SESSION['userid'];
        $sql = "SELECT * FROM cart WHERE p_id='$p_id' AND user_id='$user_id' ";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        if($count > 0){
            echo "<div class='alert alert-warning'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <p><b>Product has already been added to Cart ..!</b></p>
            </div>
            ";
        }else{
            $sql = "SELECT * FROM products WHERE product_id='$p_id'";
            $run_query = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($run_query);
                $id = $row['product_id'];
                $pro_name = $row['product_title'];
                $pro_image = $row['product_img'];
                $pro_price = $row['product_price'];
            $sql = "INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`,
                 `product_title`, `product_image`, `qty`, `price`,
                  `total_amount`) VALUES (NULL, '$id', '0','$user_id', '$pro_name',
                   '$pro_image', '1', '$pro_price', '$pro_price')";
            if(mysqli_query($con,$sql)){
                echo "<div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <p><b>Product Added..!!</b></p>
                        </div>"
                        ;
            }
    }

    }
    if(isset($_POST["cart_checkout"])){
        $uid = $_SESSION['userid'];
        $sql = "SELECT * FROM cart WHERE user_id='$uid'";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        if($count > 0){
            $no=1;
            $Amount=0;
            while($row=mysqli_fetch_array($run_query)){
                $id         =   $row['id'];
                $pro_id     =   $row['p_id'];
                $pro_name   =   $row['product_title'];
                $pro_image  =   $row['product_image'];
                $qty        =   $row['qty'];
                $pro_price  =   $row['price'];
                $total      =   $row['total_amount'];
                $total_array =  array($total);
                $total_sum  =   array_sum($total_array);
                if($row > 0){
                    $Amount     =   $Amount + $total_sum;
                }else{
                    $Amount = "";
                }
                    echo"<div class='row p-2'>      
                    <div class='col-md-1'></div>
                    <div class='col-md-3 col-4'>
                    <div class='row'>
                        <div class='col-5 col-md-4 cart_image'>
                        <img src='images/$pro_image'class='img-thumbnail'>
                        <div class='btn-group'>
                                <a href='#' class='btn remove' remove_id='$pro_id'><span class='fa fa-trash'></span></a>
                                <a href='#' class='btn  update' update_id='$pro_id'><span class='fa fa-check'></span></a>
                        </div>
                        </div>
                        <div class='col-7 col-md-8'>
                            <b class='pname' style='color:tomato;'>$pro_name</b><br>
                            
                    </div>
                    </div>
                    </div>
                    <div class='col-md-3 col-2'>
                        <input type='text' style='width:40px;color:tomato;' class='form-control qty' pid='$pro_id' id='qty-$pro_id' value='$qty'>
                    </div>
                    <div class='col-md-2 col-3'>
                    <input type='text' class='price form-control ' pid='$pro_id' id='price-$pro_id' disabled value='$pro_price' style='width:100%;color:tomato;'>
                    </div>
                    <div class='col-md-2 col-3'>
                    <input type='text' class='total form-control' pid='$pro_id' id='total-$pro_id' disabled value='$total' style='width:100%;color:tomato;'>
                    </div>
                    <div class='col-md-1'></div>
                    </div>
                </div>
                </div><hr>";                           
                }
                echo "<div class='row'>
                    <div class='col-md-10'>
                        <p class='btn' style='float:right;color:white;background-color:gray;'>Total $$Amount</p>
                    </div>
        
                    <div class='col-md-2'></div>
                </div>";
            }
            else{
                echo "<p class='empty'>Cart is empty!!</p>    
                        <div><a href='index.php' class='text-center btn' style='text-align:center;background-color:tomato;color:white;text-decoration:none;float:right;'>
                        Start Shopping!!</a>
                        </div>
                    ";
            }
    }
    if(isset($_POST["cart_count"]) AND isset($_SESSION['userid'])){
        $uid = $_SESSION['userid'];
        $sql = "SELECT * FROM cart WHERE user_id='$uid'";
        $run_query = mysqli_query($con,$sql);
        $count = mysqli_num_rows($run_query);
        echo $count;
    }else {
    }
    if(isset($_POST['removeFromCart']) || isset($_POST['updateCart'])){
        $uid  = $_SESSION['userid'];
        if(isset($_POST['removeFromCart'])){
                $pid  = $_POST['removeId'];
                $sql  = "DELETE FROM cart WHERE p_id='$pid' AND user_id='$uid'";
                $run_query = mysqli_query($con,$sql);
                if($run_query){
                    echo "<div class='alert alert-danger'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <p><b>Removed..!!</b></p>
                            </div>
                    ";
                }
        }else{
                $pid  = $_POST['updateId'];
                $qty  = $_POST['qty'];
                $price  = $_POST['price'];
                $total  = $_POST['total'];
                $sql  = "UPDATE cart SET qty='$qty',price='$price',total_amount='$total' WHERE p_id='$pid' AND user_id='$uid'";
                $run_query = mysqli_query($con,$sql);
                if($run_query){
                    echo "<div class='alert alert-success'>
                            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                            <p><b>Cart Updated..!!</b></p>
                            </div>
                    ";
                }
    }
    }
?>